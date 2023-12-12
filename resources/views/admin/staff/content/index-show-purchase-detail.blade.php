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
                                    <label for="plpMode">PLP Mode</label>
                                    <select name="product_list_price_mode" id="plpMode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror">
                                        <option selected disabled>Open this select menu</option>
                                        <option value="At-Need">At-Need</option>
                                        <option value="Spot Cash">Spot Cash</option>	
                                        <option value="With Down Payment">With Down Payment</option>
                                        <option value="No Down Payment">No Down Payment</option>
                                        <option value="With Down Payment No Interest">With Down Payment No Interest</option>
                                        <option value="No Down Payment No Interest">No Down Payment No Interest</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input type="hidden" name="term_id" id="term_id" value="">
                                    <label for="term" class="form-label">Term</label>
                                    <select name="term" id="term" class="form-select mb-3 @error('term') is-invalid @enderror">
                                        <option selected disabled>Open this select menu</option>
                                        <option value="12">1 year/s or 12 Months</option>
                                        <option value="24">2 year/s or 24 Months</option>
                                        <option value="36">3 year/s or 36 Months</option>
                                        <option value="48">4 year/s or 48 Months</option>
                                        <option value="60">5 year/s or 60 Months</option>
                                    </select>
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <input type="hidden" name="entry_id" id="entry_id" value="">
                                    <label for="product_entry_code" class="form-label">Entry Code</label>
                                    <select name="product_entry_code" id="product_entry_code" class="form-select mb-3 @error('product_entry_code') is-invalid @enderror">
                                        <option selected disabled>Open this select menu</option>
                                        
                                            <option value=""></option>
                                       
                                    </select>
                                    @error('product_entry_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                <form action="{{ route('store.customer.account') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="container-fluid d-flex justify-content-between">
                        <div class="col-lg-3 ps-0">
                            <a href="#" class="logo-light d-block mt-3 mb-3"><h4 class="text-white">HolyCross</h4><h4><span>Garden</span></h4></a>                 
                            <p class="mt-1 mb-1"><b>Site: Brgy. Sto. Ni&ntilde;o, Bontoc, So. Leyte</b></p>
                            <p>Office: St. Bernard Multipurpose Bldg.,<br> Unit 2,<br>Zamora St., Brgy. Zone 1, Sogod, So. Leyte.</p>
                            <h5 class="mt-5 mb-2 text-muted">Order by :</h5>
                            <p>Do Dong,<br> Brgy. San Isidro,<br> Mahaplag, Leyte.</p>
                        </div>
                        <div class="col-lg-3 pe-0">
                            <h4 class="fw-bolder text-uppercase text-end mt-4 mb-2">Order</h4>
                            <h6 class="text-end mb-5 pb-4"># Order-002308</h6>
                            <p class="text-end mb-1">Product List Price</p>
                            <h4 class="text-end fw-normal">₱ 45000.00</h4>
                            <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Start Date :</span> 2023-12-7</h6>
                            <h6 class="text-end fw-normal"><span class="text-muted">End Date :</span> 2024-12-7</h6>
                        </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-start">Product</th>
                                        <th class="text-start">Term</th>
                                        <th class="text-start">PLP Mode</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-end">
                                        <td class="text-start">Lawn Lot-Regular-AB</td>
                                        <td class="text-start">1 year/s or 12 months</td>
                                        <td class="text-start">With Down Payment</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid mt-3 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-start">Interest</th>
                                        <th class="text-start">Monthly</th>
                                        <th class="text-start">End Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-end">
                                        <td class="text-start">3300.48</td>
                                        <td class="text-start">3275.04</td>
                                        <td class="text-start">39300.48</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 w-100">
                        <div class="row">
                            <div class="col-md-6 ms-auto">
                                <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end">₱ 45000.00</td>
                                        </tr>
                                        <tr>
                                        <td class="text-bold-800">Down payment</td>
                                        <td class="text-bold-800 text-end">₱ 9000.00</td>
                                        </tr>
                                        <td class="text-bold-800">Balance</td>
                                        <td class="text-bold-800 text-end">₱ 36000.00</td>
                                        </tr>
                                        <td class="text-bold-800">Total</td>
                                        <td class="text-bold-800 text-end">₱ 39300.48</td>
                                        </tr>
                                        <tr class="bg-dark">
                                        <td class="text-bold-800">Balance Due</td>
                                        <td class="text-bold-800 text-end">₱ 3275.04</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
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

    $(document).ready(function () {
        $('#selectedPhase, #plpMode, #term').on('change', function () {
            const selectedPhase = $('#selectedPhase').val();
            const selectedMode = $('#plpMode').val();
            const selectedTerm = $('#term').val();

            $.ajax({
                url: '/admin/staff/user/customer/purchase-memorial-lot/get-entry-codes/' + selectedPhase + '/' + selectedMode + '/' + selectedTerm,
                method: 'GET',
                data: {
                    selectedPhase: selectedPhase,
                    selectedMode: selectedMode,
                    term: selectedTerm
                },
                dataType: 'json',
                success: function (response) {
                console.log(response);

                // Assuming response is an array of entry codes
                var dropdown = $('#product_entry_code');
                    dropdown.empty();

                    // Append new options based on the response
                    $.each(response, function (index, entryCode) {
                        dropdown.append($('<option></option>').attr('value', entryCode.id).text(entryCode.product_entry_code));
                    });
                },
            });
        });
    });
</script>

@endsection
