@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
    <div class="row d-flex align-items-start">
        <!-- Left card with fixed height -->
        <div class="col-md-4 mb-3 stretch-card">
            <div class="card h-100">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Purchase Memorial Lot</h6>
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="selectedPhase" class="form-label">Phase</label>
                                        <select name="phase_name" id="selectedPhase" class="form-select mb-3 @error('phase_name') is-invalid @enderror">
                                            <option selected disabled>Open this select menu</option>
                                            @foreach($phase as $phases)
                                                <option value="{{ $phases->id }}">{{ $phases->phase_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('phase_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <!-- Identify Prodduct List Price ID base on selected Product Entry Code -->
                                        <input type="text" name="product_entry_code_id" id="product_entry_code_id" value="">
                                        <label for="product_entry_code" class="form-label">Entry Code</label>
                                        <select name="product_entry_code" id="product_entry_code" class="form-select mb-3 @error('product_entry_code') is-invalid @enderror">
                                            <option selected disabled>No Available Entry Code</option>
                                        </select>
                                        @error('product_entry_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label for="plpMode" class="form-label">Product List Price Mode</label>
                                        <select name="product_list_price_mode" id="plpMode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror">
                                            <option selected disabled>Open this select menu</option>
                                            <option value="At-Need">At-Need</option>
                                            <option value="Spot Cash">Spot Cash</option>	
                                            <option value="With Down Payment">With Down Payment</option>
                                            <option value="No Down Payment">No Down Payment</option>
                                            <option value="With Down Payment No Interest">With Down Payment No Interest</option>
                                            <option value="No Down Payment No Interest">No Down Payment No Interest</option>
                                        </select>
                                        @error('product_list_price_mode')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <div class="mb-3">
                                            <input type="hidden" name="term_id" id="term_id" value="">
                                            <label for="wdp_term" class="form-label">Term</label>
                                            <select name="wdp_term" class="form-select mb-3 @error('wdp_term') is-invalid @enderror" id="wdp_term">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="At-Need">1 year/s or 12 months</option>
                                                <option value="Spot Cash">2 year/s or 24 months</option>	
                                                <option value="With Down Payment">3 year/s or 38 months</option>
                                                <option value="No Down Payment">4 year/s or 48 months</option>
                                                <option value="No Down Payment No Interest">5 year/s or 60 months</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <div class="mb-3 input-group flatpickr" id="flatpickr-date">
                                        <input type="text" class="form-control" placeholder="Select date" data-input>
                                        <input type="hidden" name="start_date" id="hidden_start_date">
                                        <span class="input-group-text input-group-addon" data-toggle><i data-feather="calendar"></i></span>
                                    </div>
                                    @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-primary submit">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        <!-- Right card -->
        <div class="col-md-8 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Product Information</h6>
                    <ul>
                        <li>Product Price: ₱ </li>
                        <li>Description: </li>
                        <li>Phase:  </li>
                        <li>Status: </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr('#flatpickr-date', {
            enableTime: false,
            dateFormat: 'Y-m-d',
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('hidden_start_date').value = dateStr;
            },
            onReady: function(selectedDates, dateStr, instance) {
                instance.setDate(selectedDates, true);
            },
            wrap: true,
        });
    });

    // Declare a variable to hold the response array
    var responseArray = [];

    // Event handler for the selectedPhase dropdown
    $('#selectedPhase').on('change', function () {
        const selectedPhase = $(this).val();

        // Perform AJAX request to get entry codes based on the selectedPhase
        $.ajax({
            url: '/admin/staff/user/customer/purchase-memorial-lot/get-entry-codes/' + selectedPhase,
            method: 'GET',
            data: {
                selectedPhase: selectedPhase // Pass selectedPhase as a parameter
            },
            dataType: 'json',
            success: function (response) {
                console.log(response);

                var dropdown = $('#product_entry_code');
                var plpIdInput = $('#product_entry_code_id');
                dropdown.empty();

                // Set the responseArray directly
                responseArray = response;

                if (response.length > 0) {
                    // Append new options based on the response
                    dropdown.append($('<option selected disabled></option>').text('Open this select menu'));
                    $.each(response, function (index, entryCode) {
                        dropdown.append($('<option></option>').attr('value', entryCode.id).text(entryCode.product_entry_code));
                    });

                    // Set the initial value of product_entry_code_id based on the first entry code
                    plpIdInput.val(response[0].id);
                } else {
                    // If no entries are found, reset the dropdown and product_entry_code_id
                    dropdown.append($('<option selected disabled></option>').text('No Available Entry Code'));
                    plpIdInput.val('');
                }
            },
        });
    });

    // Event handler for the product_entry_code dropdown
    $('#product_entry_code').on('change', function () {
        var selectedEntryCode = $(this).val();
        var plpIdInput = $('#product_entry_code_id');

        // Find the selected entry code in the responseArray
        var selectedEntry = responseArray.find(entry => entry.id == selectedEntryCode);

        // Set the value of product_entry_code_id based on the selected entry code
        if (selectedEntry) {
            plpIdInput.val(selectedEntry.id);

            // Fetch additional details for the selected entry code
            $.ajax({
                url: '/admin/staff/user/customer/purchase-memorial-lot/get-entry-details/' + selectedEntry.id,
                method: 'GET',
                dataType: 'json',
                success: function (details) {
                    // Handle the received details (update UI, etc.)
                    console.log(details);
                },
                error: function (error) {
                    console.error('Error fetching entry details:', error);
                }
            });
        } else {
            plpIdInput.val('');
        }
    });

</script>

@endsection
