@extends('admin.staff.body.purchase-lot')
@section('purchase-lot-content')
<div class="page-content">
    <div class="row d-flex align-items-start">
        <!-- Left card with fixed height -->
        <div class="col-md-5 mb-3 stretch-card">
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
                                        <!-- Identify Product List Price ID base on selected Product Entry Code -->
                                        <input type="hidden" name="plp_id" id="plp_id" value="">
                                        <!-- Identify Product Entry Code ID base on selected Product Entry Code -->
                                        <input type="hidden" name="product_entry_code_id" id="product_entry_code_id" value="">
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
                                        <label for="plpMode" class="form-label">Product Price Mode</label>
                                        <select name="product_list_price_mode" id="plpMode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror">
                                            <option selected disabled>No Available Price Mode</option>
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
                                            <label for="term" class="form-label">Term</label>
                                            <select name="wdp_term" class="form-select mb-3 @error('wdp_term') is-invalid @enderror" id="term">
                                                <option selected disabled>No Available Term</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="hidden_start_date" class="form-label">Start Date</label>
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
        <div class="col-md-7 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Product Entry Information</h6>
                    <ul>
                        <li id="productPrice">Product Price: ₱ </li>
                        <li id="description">Description: </li>
                        <li id="phase">Phase: </li>
                        <li id="phaseStatus">Phase Status: </li>
                        <li id="entryStatus">Entry Status: </li>
                        <li id="start_date">Start Date: </li>
                        <li id="end_date">End Date: </li>
                    </ul>
                </div>
                <hr style="border: 2px dashed;">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Product Price Mode</h6>
                    <ol>
                        <li style="position: relative;">
                            <p>At-Need<i class="fas fa-check-circle" id="at-need-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i></p>
                            <ul class="mb-2">
                                <li id="at_need">Price: ₱</li>
                            </ul>
                        </li>
                        <li style="position: relative;">
                            <p>Spot Cash<i class="fas fa-check-circle" id="spot-cash-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i></p>
                            <ul class="mb-2">
                                <li id="spot_cash">Price: ₱</li>
                            </ul>
                        </li>
                        <li style="position: relative;">
                            <p>With Down Payment
                                <i class="fas fa-file-text" id="wdp_more_price" style="position: absolute; top: 20%; transform: translateY(-50%); right: 25px;"></i>
                                <i class="fas fa-check-circle" id="wdp-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i>
                            </p>
                            <ul class="mb-2">
                                <li id="">Monthly: ₱</li>
                                <li id="">Term: </li>
                            </ul>
                        </li>
                        <li style="position: relative;">
                            <p>No Down Payment
                                <i class="fas fa-file-text" id="ndp_more_price" style="position: absolute; top: 20%; transform: translateY(-50%); right: 25px;"></i>
                                <i class="fas fa-check-circle" id="ndp-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i>
                            </p>
                            <ul class="mb-2">
                                <li id="">Monthly: ₱</li>
                                <li id="">Term: </li>
                            </ul>
                        </li>
                        <li style="position: relative;">
                            <p>With Down Payment No Interest
                                <i class="fas fa-file-text" id="wdpni_more_price" style="position: absolute; top: 20%; transform: translateY(-50%); right: 25px;"></i>
                                <i class="fas fa-check-circle" id="wdpni-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i>
                            </p>
                            <ul class="mb-2">
                                <li id="">Monthly: ₱</li>
                                <li id="">Term: </li>
                            </ul>
                        </li>
                        <li style="position: relative;">
                            <p>No Down Payment No Interest
                                <i class="fas fa-file-text" id="ndpni_more_price" style="position: absolute; top: 20%; transform: translateY(-50%); right: 25px;"></i>
                                <i class="fas fa-check-circle" id="ndpni-check-circle-color" style="position: absolute; top: 20%; transform: translateY(-50%); right: 0;"></i>
                            </p>
                            <ul>
                                <li id="">Monthly: ₱</li>
                                <li id="">Term: </li>
                            </ul>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

    </div>
    
    <!-- DP Modal -->
    <div class="modal fade" id="wdp_show_more_price" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Installment Prices (With Down Payment)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="table-responsive pt-3">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th>Term in Months</th>
                                        <th>Annual Interest</th>
                                        <th>Monthly</th>
                                        <th>End Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NDP Modal -->
<div class="modal fade" id="ndp_show_more_price" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Installment Prices (No Down Payment)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Term in Months</th>
                                    <th>Annual Interest</th>
                                    <th>Monthly</th>
                                    <th>End Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- WDPNI Modal -->
<div class="modal fade" id="wdpni_show_more_price" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Installment Prices (With Down Payment No Interest)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Term in Months</th>
                                    <th>Annual Interest</th>
                                    <th>Monthly</th>
                                    <th>End Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- NDPNI Modal -->
<div class="modal fade" id="ndpni_show_more_price" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Installment Prices (No Down Payment No Interest)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th>Term in Months</th>
                                    <th>Annual Interest</th>
                                    <th>Monthly</th>
                                    <th>End Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var triggerIcon = document.getElementById('wdp_more_price');

        triggerIcon.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('wdp_show_more_price'));
            myModal.show();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var triggerIcon = document.getElementById('ndp_more_price');

        triggerIcon.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('ndp_show_more_price'));
            myModal.show();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var triggerIcon = document.getElementById('wdpni_more_price');

        triggerIcon.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('wdpni_show_more_price'));
            myModal.show();
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var triggerIcon = document.getElementById('ndpni_more_price');

        triggerIcon.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(document.getElementById('ndpni_show_more_price'));
            myModal.show();
        });
    });

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
            data: { selectedPhase: selectedPhase },
            dataType: 'json',
            success: function (response) {

                // Reset selectedPlpMode if selected entry will change
                resetSelectedPlpMode();
                updateFileTextIconVisibility('');
                resetCheckCircleColors();

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
                    // Clear product details
                    clearProductDetails();
                } else {
                    // If no entries are found, reset the dropdown and product_entry_code_id
                    dropdown.append($('<option selected disabled></option>').text('No Available Entry Code'));
                    plpIdInput.val('');
                    // Clear product details
                    clearProductDetails();
                }
            },
        });
    });

    // Function to clear product details
    function clearProductDetails() {

        $('#plp_id').val('');
        
        $('#productPrice').text('Product Price: ₱ ');
        $('#description').text('Description: ');
        $('#phase').text('Phase: ');
        $('#phaseStatus').text('Phase Status: ');
        $('#entryStatus').text('Entry Status: ');
    }

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

                    // Reset selectedPlpMode if selected entry will change
                    resetSelectedPlpMode();
                    updateFileTextIconVisibility('');
                    resetCheckCircleColors();

                    // Handle the received details (update UI, etc.)
                    console.log(details);

                    $('#plp_id').val(details.entryDetails.product_list_price_id);

                    // Update the content of the HTML elements with the received details
                    $('#productPrice').text('Product Price: ₱ ' + details.listPriceDetails.list_price);
                    $('#description').text('Description: ' + details.listPriceDetails.product_description);
                    $('#phase').text('Phase: ' + details.phaseDetails.phase_name);
                    $('#phaseStatus').text('Phase Status: ' + details.phaseDetails.status);
                    $('#entryStatus').text('Entry Status: ' + details.entryDetails.status);
                },
                error: function (error) {
                    console.error('Error fetching entry details:', error);
                }
            });
        } else {
            plpIdInput.val('');
            // Clear product details
            clearProductDetails();
        }
    });

    // Function to show/hide the fa-file-text icon based on selectedPlpMode
    function updateFileTextIconVisibility(selectedPlpMode) {
        // Replace the following IDs with the actual IDs of your file-text icons
        var wdpIcon = $('#wdp_more_price');
        var ndpIcon = $('#ndp_more_price');
        var wdpniIcon = $('#wdpni_more_price');
        var ndpniIcon = $('#ndpni_more_price');

        // Hide all icons by default
        wdpIcon.hide();
        ndpIcon.hide();
        wdpniIcon.hide();
        ndpniIcon.hide();

        // Show the appropriate icon based on selectedPlpMode
        if (selectedPlpMode === 'With Down Payment') {
            wdpIcon.show();
        } else if (selectedPlpMode === 'No Down Payment') {
            ndpIcon.show();
        } else if (selectedPlpMode === 'With Down Payment No Interest') {
            wdpniIcon.show();
        } else if (selectedPlpMode === 'No Down Payment No Interest') {
            ndpniIcon.show();
        }
    }

    // Call the function to hide icons by default when the page loads
    $(document).ready(function() {
        updateFileTextIconVisibility('');
    });

    // Separate function to reset selectedPlpMode
    function resetSelectedPlpMode() {
        $('#plpMode').val('');
        
        // Replace the selected value with the HTML of the default option
        $('#plpMode').html(`
                        <option selected disabled>Open this select menu</option>
                        <option value="At-Need">At-Need</option>
                        <option value="Spot Cash">Spot Cash</option>	
                        <option value="With Down Payment">With Down Payment</option>
                        <option value="No Down Payment">No Down Payment</option>
                        <option value="With Down Payment No Interest">With Down Payment No Interest</option>
                        <option value="No Down Payment No Interest">No Down Payment No Interest</option>
                    `);
        // Trigger the change event to execute its handler
        $('#plpMode').change();
    }

    //declare a broader scope variable
    var selectedPlpMode;

    // Function to update the color of the check circle based on the selected plan mode
    function updateCheckCircleColor(mode, color) {
        var checkCircle = document.getElementById(mode + "-check-circle-color");
        if (checkCircle) {
            checkCircle.style.color = color;
        }
    }

    // Separate function to reset check circle colors
    function resetCheckCircleColors() {
        updateCheckCircleColor("at-need", "");
        updateCheckCircleColor("spot-cash", "");
        updateCheckCircleColor("wdp", "");
        updateCheckCircleColor("ndp", "");
        updateCheckCircleColor("wdpni", "");
        updateCheckCircleColor("ndpni", "");
    }

     //Event handler for the product list price mode dropdown
    $('#plpMode').on('change', function () {
        var selectedPlpMode = $(this).val();
        var plpIdValue = $('#plp_id').val(); // Get the value of the plp_id input field so that we can get the prices

        $.ajax({
            url: '/admin/staff/user/customer/purchase-memorial-lot/get-product-list-price-mode-details/' + selectedPlpMode,
            method: 'GET',
            data: { 
                selectedPlpMode: selectedPlpMode,
                plpId: plpIdValue, // Include the value of plp_id in the data object
            },
            dataType: 'json',
            success: function (plpModeDetails) {
                // Handle the received details (update UI, etc.)
                console.log(plpModeDetails);

                // Update the content of the HTML elements with the received plpModeDetails
                $('#at_need').text('Price: ₱' + plpModeDetails.at_need);
                $('#spot_cash').text('Price: ₱ ' + plpModeDetails.spot_cash);

                var termOptions = $('#term'); //populate option on this id

                if (
                    selectedPlpMode === 'With Down Payment' ||
                    selectedPlpMode === 'No Down Payment' ||
                    selectedPlpMode === 'With Down Payment No Interest' ||
                    selectedPlpMode === 'No Down Payment No Interest'
                    ) {
                    termOptions.html(`
                        <option selected disabled>Open this select menu</option>
                        <option value="12">1 year/s or 12 Months</option>
                        <option value="24">2 year/s or 24 Months</option>
                        <option value="36">3 year/s or 36 Months</option>
                        <option value="48">4 year/s or 48 Months</option>
                        <option value="60">5 year/s or 60 Months</option>
                    `);
                    } else {
                    termOptions.html(`
                        <option value="" selected>No Available Term</option>
                    `);
                }

                // Populate the table with data for WDPNI modal
                var wdpTableBody = $('#wdp_show_more_price .table-dark tbody');
                wdpTableBody.empty(); // Clear existing rows

                for (var i = 0; i < plpModeDetails.length; i++) {
                    var rowData = plpModeDetails[i];
                    var rowHtml = `
                        <tr>
                            <td>${rowData.wdp_term}</td>
                            <td>${rowData.wdp_annual_interest}</td>
                            <td>${rowData.wdp_monthly_payment}</td>
                            <td>${rowData.wdp_end_price}</td>
                        </tr>
                    `;
                    wdpTableBody.append(rowHtml);
                }

                // Populate the table with data for WDPNI modal
                var ndpTableBody = $('#ndp_show_more_price .table-dark tbody');
                ndpTableBody.empty(); // Clear existing rows

                for (var i = 0; i < plpModeDetails.length; i++) {
                    var rowData = plpModeDetails[i];
                    var rowHtml = `
                        <tr>
                            <td>${rowData.ndp_term}</td>
                            <td>${rowData.ndp_annual_interest}</td>
                            <td>${rowData.ndp_monthly_payment}</td>
                            <td>${rowData.ndp_end_price}</td>
                        </tr>
                    `;
                    ndpTableBody.append(rowHtml);
                }

                // Populate the table with data for WDPNI modal
                var wdpniTableBody = $('#wdpni_show_more_price .table-dark tbody');
                wdpniTableBody.empty(); // Clear existing rows

                for (var i = 0; i < plpModeDetails.length; i++) {
                    var rowData = plpModeDetails[i];
                    var rowHtml = `
                        <tr>
                            <td>${rowData.wdpni_term}</td>
                            <td>${rowData.wdpni_annual_interest}</td>
                            <td>${rowData.wdpni_monthly_payment}</td>
                            <td>${rowData.wdpni_end_price}</td>
                        </tr>
                    `;
                    wdpniTableBody.append(rowHtml);
                }

                // Populate the table with data for WDPNI modal
                var ndpniTableBody = $('#ndpni_show_more_price .table-dark tbody');
                ndpniTableBody.empty(); // Clear existing rows

                for (var i = 0; i < plpModeDetails.length; i++) {
                    var rowData = plpModeDetails[i];
                    var rowHtml = `
                        <tr>
                            <td>${rowData.ndpni_term}</td>
                            <td>${rowData.annual_interest}</td>
                            <td>${rowData.ndpni_monthly_payment}</td>
                            <td>${rowData.ndpni_end_price}</td>
                        </tr>
                    `;
                    ndpniTableBody.append(rowHtml);
                }

                // Example: Update colors based on the selected plan mode
                switch (selectedPlpMode) {
                    case "At-Need":
                        updateCheckCircleColor("at-need", "#6571ff");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    case "Spot Cash":
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "#6571ff");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    case "With Down Payment":
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "#6571ff");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    case "No Down Payment":
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "#6571ff");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    case "With Down Payment No Interest":
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "#6571ff");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    case "No Down Payment No Interest":
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "#6571ff");
                        break;
                    default:
                        updateCheckCircleColor("at-need", "");
                        updateCheckCircleColor("spot-cash", "");
                        updateCheckCircleColor("wdp", "");
                        updateCheckCircleColor("ndp", "");
                        updateCheckCircleColor("wdpni", "");
                        updateCheckCircleColor("ndpni", "");
                        break;
                    }

                // Call the function to show/hide file-text icons based on selectedPlpMode
                updateFileTextIconVisibility(selectedPlpMode);
            },
            error: function (error) {
                console.error('Error fetching product list price details:', error);
            }
        });
    });

    // Event handler for WDP Term change
    $('#term').change(function () {
        var selectedPlpMode = $('#plpMode').val();
        var plpIdValue = $('#plp_id').val();
        var selectedTerm = $(this).val();

        selectedTerm = parseInt(selectedTerm);

        $.ajax({
            url: '/admin/staff/user/customer/purchase-memorial-lot/get-product-list-price-mode-details/' + selectedTerm,
            method: 'GET',
            data: { 
                selectedPlpMode: selectedPlpMode,
                plpId: plpIdValue,
                selectedTerm: selectedTerm,
            },
            dataType: 'json',
            success: function (plpModeDetails) {
                // Handle the received details (update UI, etc.)
                console.log(plpModeDetails);

                // Additional logic as needed
            },
            error: function (error) {
                console.error('Error fetching product list price details:', error);
            }
        });
    });
    
</script>
@endsection