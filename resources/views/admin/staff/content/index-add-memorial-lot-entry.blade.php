@extends('admin.staff.body.memorial-lot-entry')
@section('memorial-lot-entry-content')
<div class="page-content">
<div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Make Entry based on Product List Price" data-feather="help-circle" class=""></i></span>Memorial Lot Entry</h4>
                        <form action="{{ route('staff.store.product.entry') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" id="plp_id" value="">
                                        <label for="product_list_price_code" class="form-label">PLP Code</label>
                                        <select name="product_list_price_code" class="form-select mb-3 @error('product_list_price_code') is-invalid @enderror" id="product_list_price_code">
                                            <option selected disabled>Open this select menu</option>
                                            @foreach($PLP_CODE as $PLP)
                                            <option name="product_list_price_id" value="{{ $PLP->id }}"
                                                    data-down-payment-amount="{{ $PLP->downPayment->down_payment_amount }}"
                                                    data-remaining-balance="{{ $PLP->downPayment->remaining_balance }}" 
                                                    data-pre-need="{{ $PLP->preNeed->spot_cash }}" 
                                                    data-at-need="{{ $PLP->atNeed->at_need }}">
                                                    {{ $PLP->product_list_price_code }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('product_list_price_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="product_list_price_mode" class="form-label">PLP Mode</label>
                                        <select name="product_list_price_mode" class="form-select mb-3 @error('product_list_price_mode') is-invalid @enderror" id="product_list_price_mode">
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
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <input type="hidden" name="term_id" id="term_id" value="">
                                        <label for="wdp_term" class="form-label">Term</label>
                                        <select name="wdp_term" class="form-select mb-3 @error('wdp_term') is-invalid @enderror" id="wdp_term">
                                        </select>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="phase_id" class="form-label">Phase</label>
                                        <select name="phase_id" class="form-select mb-3 @error('phase_id') is-invalid @enderror" id="phase_id">
                                            <option selected disabled>Open this select menu</option>
                                            @foreach($showEntry as $phase)
                                                <option value="{{ $phase->id }}">{{ $phase->phase_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('phase_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="block_number" class="form-label">Block Number</label>
                                        <input type="number" name="block_number" id="block_number" value="{{ old('block_number') }}" class="form-control @error('block_number') is-invalid @enderror" autocomplete="on" placeholder="0">
                                        @error('block_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="block_quantity" class="form-label">Quantity</label>
                                        <input type="number" name="block_quantity" id="block_quantity" value="{{ old('block_quantity') }}" class="form-control @error('block_quantity') is-invalid @enderror" autocomplete="on" placeholder="0">
                                        @error('block_quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                        </div><!-- Row -->
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="down_payment_amount" class="form-label">DP Amount</label>
                                    <input type="number" name="down_payment_amount" id="down_payment_amount" value="" class="form-control @error('down_payment_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('down_payment_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="remaining_balance" class="form-label">Balance</label>
                                    <input type="number" name="remaining_balance" id="remaining_balance" value="" class="form-control @error('remaining_balance') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('remaining_balance')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="at_need" class="form-label">At Need Price</label>
                                    <input type="number" name="at_need" id="at_need" value="" class="form-control @error('at_need') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('at_need')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="spot_cash" class="form-label">Pre Need (Spot Cash)</label>
                                    <input type="number" name="spot_cash" id="spot_cash" value="" class="form-control @error('spot_cash') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('spot_cash')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->  
                        </div><!-- Row -->

						<div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">  
                                    <label for="wdp_annual_interest" class="form-label">WDP Interest</label>
                                    <input type="number" name="wdp_annual_interest" id="wdp_annual_interest" value="" class="form-control @error('wdp_annual_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_annual_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">      
                                    <label for="wdp_monthly_payment" class="form-label">WDP Monthly</label>
                                    <input type="number" name="wdp_monthly_payment" id="wdp_monthly_payment" value="" class="form-control @error('wdp_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="wdp_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="wdp_end_price" id="wdp_end_price" value="" class="form-control @error('wdp_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    
                                    <label for="ndp_annual_interest" class="form-label">NDP Interest</label>
                                    <input type="number" name="ndp_annual_interest" id="ndp_annual_interest" value="" class="form-control @error('ndp_annual_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_annual_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_monthly_payment" class="form-label">NDP Monthly</label>
                                    <input type="number" name="ndp_monthly_payment" id="ndp_monthly_payment" value="" class="form-control @error('ndp_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="ndp_end_price" id="ndp_end_price" value="" class="form-control @error('ndp_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
							<div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="wdpni_monthly_payment" class="form-label">WDPNI Monthly</label>
                                    <input type="number" name="wdpni_monthly_payment" id="wdpni_monthly_payment" value="" class="form-control @error('wdpni_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="wdpni_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="wdpni_end_price" id="wdpni_end_price" value="" class="form-control @error('wdpni_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
							<div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="ndpni_monthly_payment" class="form-label">NDPNI Monthly</label>
                                    <input type="number" name="ndpni_monthly_payment" id="ndpni_monthly_payment" value="" class="form-control @error('ndpni_monthly_payment') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_monthly_payment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="ndpni_end_price" class="form-label">End Amount</label>
                                    <input type="number" name="ndpni_end_price" id="ndpni_end_price" value="" class="form-control @error('ndpni_end_price') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_end_price')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <button type="submit" class="btn btn-primary submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        function updateFields(selectedPLP, plpId) {
            var downPaymentAmount = selectedPLP.data('down-payment-amount');
            var remainingBalance = selectedPLP.data('remaining-balance');
            var preNeed = selectedPLP.data('preNeed');
            var atNeed = selectedPLP.data('atNeed');

            var selectedMode = $('#product_list_price_mode').val();
            var termOptions = $('#wdp_term',);

            if (selectedMode === 'With Down Payment' ||
                selectedMode === 'No Down Payment' ||
                selectedMode === 'With Down Payment No Interest' ||
                selectedMode === 'No Down Payment No Interest') {
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

            $('#down_payment_amount').val(downPaymentAmount);
            $('#remaining_balance').val(remainingBalance);

            if (selectedMode === 'At-Need') {
                $('#at_need').val(atNeed);
                $('#spot_cash').val('');
                resetWDPFields();
                resetNDPFields();
            } else if (selectedMode === 'Spot Cash') {
                $('#at_need').val('');
                $('#spot_cash').val(preNeed);
                resetWDPFields();
                resetNDPFields();
            } else if (selectedMode === 'With Down Payment') {
                $('#spot_cash').val('');
                $('#at_need').val('');
                fetchDataAndUpdate(plpId);
                resetNDPFields();
            } else if (selectedMode === 'No Down Payment') {
                $('#spot_cash').val('');
                $('#at_need').val('');
                resetWDPFields();
                fetchDataAndUpdate(plpId);
            } else if (selectedMode === 'With Down Payment No Interest') {
                $('#spot_cash').val('');
                $('#at_need').val('');
                resetWDPFields();
                fetchDataAndUpdate(plpId);
                resetNDPNIFields()
            } else if (selectedMode === 'No Down Payment No Interest') {
                $('#spot_cash').val('');
                $('#at_need').val('');
                resetWDPFields();
                resetWDPNIFields()
                fetchDataAndUpdate(plpId);
            } else {
                $('#at_need').val('');
                $('#spot_cash').val('');
                resetWDPFields();
                resetNDPFields();
            }
        }

        function resetWDPFields() {
            $('#wdp_annual_interest').val('');
            $('#wdp_monthly_payment').val('');
            $('#wdp_end_price').val('');
        }

        function resetNDPFields() {
            $('#ndp_annual_interest').val('');
            $('#ndp_monthly_payment').val('');
            $('#ndp_end_price').val('');
        }

        function resetWDPNIFields() {
            $('#wdpni_monthly_payment').val('');
            $('#wdpni_end_price').val('');
        }

        function resetNDPNIFields() {
            $('#ndpni_monthly_payment').val('');
            $('#ndpni_end_price').val('');
        }

        function updateWDPFields(ajaxData) {
            $('#wdp_annual_interest').val(ajaxData.wdp_annual_interest);
            $('#wdp_monthly_payment').val(ajaxData.wdp_monthly_payment);
            $('#wdp_end_price').val(ajaxData.wdp_end_price);
        }

        function updateNDPFields(ajaxData) {
            $('#ndp_annual_interest').val(ajaxData.ndp_annual_interest);
            $('#ndp_monthly_payment').val(ajaxData.ndp_monthly_payment);
            $('#ndp_end_price').val(ajaxData.ndp_end_price);
        }

        function updateWDPNIFields(ajaxData) {
            $('#wdpni_monthly_payment').val(ajaxData.wdpni_monthly_payment);
            $('#wdpni_end_price').val(ajaxData.wdpni_end_price);
        }

        function updateNDPNIFields(ajaxData) {
            $('#ndpni_monthly_payment').val(ajaxData.ndpni_monthly_payment);
            $('#ndpni_end_price').val(ajaxData.ndpni_end_price);
        }

        // Function to fetch term ID and value via AJAX
        function fetchTermIdAndValue(plpId, selectedTerm, ajaxData) {
            $('#term_id').val(ajaxData.id);
            updateWDPFields(ajaxData);
            updateNDPFields(ajaxData);
            updateWDPNIFields(ajaxData)
            updateNDPNIFields(ajaxData)
        }

        function fetchDataAndUpdate(plpId, selectedTerm) {
            var selectedMode = $('#product_list_price_mode').val();

            $.ajax({
                url: '/admin/staff/memorial-lot/product/' + plpId + '/entry/' + selectedTerm,
                method: 'GET',
                data: { selectedMode: selectedMode },
                success: function (ajaxData) {
                    fetchTermIdAndValue(plpId, selectedTerm, ajaxData);
                },
                error: function (error) {
                    console.error('Ajax error:', error);
                }
            });
        }

        // Event handler for PLP Code change
        $('#product_list_price_code').change(function () {
            var selectedPLP = $(this).find(':selected');
            var plpId = selectedPLP.val();
            $('#plp_id').val(plpId);
            updateFields(selectedPLP, plpId);
        });

        // Event handler for PLP Mode change
        $('#product_list_price_mode').change(function () {
            updateFields($('#product_list_price_code option:selected'), $('#plp_id').val());
        });

        // Event handler for WDP Term change
        $('#wdp_term').change(function () {
            var plpId = $('#plp_id').val();
            var selectedTerm = $(this).val();
            fetchDataAndUpdate(plpId, selectedTerm);
        });

        // Event handler for product_list_price_mode change
        $('#product_list_price_mode').change(function () {
            var selectedMode = $(this).val();

            if (selectedMode === 'With Down Payment' || selectedMode === 'With Down Payment No Interest') {
                $('#down_payment_amount').closest('.col-sm-3').find('input').prop('disabled', false);
                $('#remaining_balance').closest('.col-sm-3').find('input').prop('disabled', false);
            } else {
                $('#down_payment_amount').closest('.col-sm-3').find('input').prop('disabled', true);
                $('#remaining_balance').closest('.col-sm-3').find('input').prop('disabled', true);
            }
        });
        // Trigger the change event for PLP Code to initialize its value
        $('#product_list_price_code').trigger('change');
    });
</script>

@endsection