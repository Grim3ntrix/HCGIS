@extends('admin.staff.body.memorial-lot-entry')
@section('memorial-lot-entry-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Memorial Lot Entry</h6>
                    <form action="{{ route('staff.store.product.entry') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="id" id="plp_id" value="">
                                    <label for="product_list_price_code" class="form-label">PLP Code</label>
                                    <select name="product_list_price_code" class="form-select mb-3 @error('product_list_price_code') is-invalid @enderror" id="product_list_price_code">
                                        <option selected disabled>Open this select menu</option>
                                        @foreach($PLP_CODE as $PLP)
                                            <option value="{{ $PLP->id }}" 
                                                data-down-payment-amount="{{ $PLP->downPayment->down_payment_amount }}"
                                                data-remaining-balance="{{ $PLP->downPayment->remaining_balance }}" 
                                                data-pre-need="{{ $PLP->preNeed->spot_cash }}" 
                                                data-at-need="{{ $PLP->atNeed->at_need }}"
                                                data-with-down-payment="">
                                                {{ $PLP->product_list_price_code }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('product_list_price_code')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="down_payments" class="form-label">Down Payment</label>
                                    <select name="down_payments" class="form-select mb-3 @error('down_payments') is-invalid @enderror" id="down_payments">
                                        <option selected value="with_down_payment">With Down Payment</option>
                                        <option value="no_down_payment">No Down Payment</option>
                                    </select>
                                    @error('down_payments')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
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
                        </div><!-- Row -->

						<div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="id" id="plp_mode_id" value="">
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
							<div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="term" class="form-label">Term</label>
                                    <select name="term" class="form-select mb-3 @error('term') is-invalid @enderror" id="term">
                                        <option selected disabled>Open this select menu</option>
										<option value="">1 year/s or 12 months</option>
										<option value="">2 year/s or 24 months</option>	
										<option value="">3 year/s or 36 months</option>
										<option value="">4 year/s or 48 months</option>
										<option value="">5 year/s or 60 months</option>										
                                    </select>
                                </div>
                            </div><!-- Col -->

                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="phase" class="form-label">Phase</label>
                                    <input type="text" name="phase" id="phase" value="" class="form-control @error('phase') is-invalid @enderror" autocomplete="on" placeholder="Enter Phase">
                                    @error('phase')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="block_quantity" class="form-label">Quantity (Block)</label>
                                    <input type="number" name="block_quantity" id="block_quantity" value="" class="form-control @error('block_quantity') is-invalid @enderror" autocomplete="on" placeholder="0">
                                    @error('block_quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="at_need" class="form-label">At Need Price</label>
                                    <input type="number" name="at_need" id="at_need" value="" class="form-control @error('at_need') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('at_need')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
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
                                    <input type="hidden" name="id" id="wdp_interest_id" value="">
                                    <label for="wdp_interest" class="form-label">WDP Interest</label>
                                    <input type="number" name="wdp_interest" id="wdp_interest" value="" class="form-control @error('wdp_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                <input type="hidden" name="id" id="wdp_monthly_id" value="">
                                    <label for="wdp_monthly" class="form-label">WDP Monthly</label>
                                    <input type="number" name="wdp_monthly" id="wdp_monthly" value="" class="form-control @error('wdp_monthly') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_monthly')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="wdp_end_amount" class="form-label">End Amount</label>
                                    <input type="number" name="wdp_end_amount" id="wdp_end_amount" value="" class="form-control @error('wdp_end_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdp_end_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <input type="hidden" name="id" id="ndp_interest_id" value="">
                                    <label for="ndp_interest" class="form-label">NDP Interest</label>
                                    <input type="number" name="ndp_interest" id="ndp_interest" value="" class="form-control @error('ndp_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_monthly" class="form-label">NDP Monthly</label>
                                    <input type="number" name="ndp_monthly" id="ndp_monthly" value="" class="form-control @error('ndp_monthly') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_monthly')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndp_end_amount" class="form-label">End Amount</label>
                                    <input type="number" name="ndp_end_amount" id="ndp_end_amount" value="" class="form-control @error('ndp_end_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndp_end_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <input type="hidden" name="id" id="wdpni_interest_id" value="">
                                    <label for="wdpni_interest" class="form-label">WDPNI Interest</label>
                                    <input type="number" name="wdpni_interest" id="wdpni_interest" value="" class="form-control @error('wdpni_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="wdpni_monthly" class="form-label">WDPNI Monthly</label>
                                    <input type="number" name="wdpni_monthly" id="wdpni_monthly" value="" class="form-control @error('wdpni_monthly') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_monthly')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="wdpni_end_amount" class="form-label">End Amount</label>
                                    <input type="number" name="wdpni_end_amount" id="wdpni_end_amount" value="" class="form-control @error('wdpni_end_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('wdpni_end_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <input type="hidden" name="id" id="ndpni_interest_id" value="">
                                    <label for="ndpni_interest" class="form-label">NDPNI Interest</label>
                                    <input type="number" name="ndpni_interest" id="ndpni_interest" value="" class="form-control @error('ndpni_interest') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_interest')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
							<div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndpni_monthly" class="form-label">NDPNI Monthly</label>
                                    <input type="number" name="ndpni_monthly" id="ndpni_monthly" value="" class="form-control @error('ndpni_monthly') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_monthly')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="ndpni_end_amount" class="form-label">End Amount</label>
                                    <input type="number" name="ndpni_end_amount" id="ndpni_end_amount" value="" class="form-control @error('ndpni_end_amount') is-invalid @enderror" autocomplete="on" placeholder="₱00.00" readonly>
                                    @error('ndpni_end_amount')
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
        // Function to update fields based on selected PLP Code
        function updateFields(selectedPLP) {
            var downPaymentAmount = selectedPLP.data('down-payment-amount');
            var remainingBalance = selectedPLP.data('remaining-balance');
            var preNeed = selectedPLP.data('preNeed');
            var atNeed = selectedPLP.data('atNeed');

            $('#down_payment_amount').val(downPaymentAmount);
            $('#remaining_balance').val(remainingBalance);

            // Update the values based on the selected PLP Mode
            var selectedMode = $('#product_list_price_mode').val();

            if (selectedMode === 'At-Need') {
                $('#at_need').val(atNeed);
                $('#spot_cash').val('');
            } else if (selectedMode === 'Spot Cash') {
                $('#spot_cash').val(preNeed);
                $('#at_need').val('');
            } else {
                // Handle other modes if needed
                $('#at_need').val('');
                $('#spot_cash').val('');
            }
        }

        // Event handler for PLP Code change
        $('#product_list_price_code').change(function () {
            var selectedPLP = $(this).find(':selected');
            $('#plp_id').val(selectedPLP.val());
            updateFields(selectedPLP);
        });

        // Event handler for PLP Mode change
        $('#product_list_price_mode').change(function () {
            updateFields($('#product_list_price_code option:selected'));
        });

        // Event handler for down payments change
        $('#down_payments').change(function () {
            var selectedOption = $(this).val();

            if (selectedOption === 'with_down_payment') {
                $('#down_payment_amount').closest('.col-sm-3').show();
                $('#remaining_balance').closest('.col-sm-3').show();
            } else {
                $('#down_payment_amount').closest('.col-sm-3').hide();
                $('#remaining_balance').closest('.col-sm-3').hide();
            }
        });
    });
</script>


@endsection