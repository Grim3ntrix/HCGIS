@extends('admin.manager.body.listprice')
@section('listprice-content')
<div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card mb-4">
                    <div class="card-body">
                    <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Make sure Rates is not Empty to Generate and Save PLP" data-feather="help-circle" class=""></i></span>Product List Price</h4>
                        <form action="{{ route('manager.store.list.price') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="product_type" class="form-label">Product Type</label>
                                        <select name="product_type" class="form-select mb-3 @error('product_type') is-invalid @enderror" id="product_type">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="Lawn Lot">Lawn Lot</option>
                                                <option value="Garden Lot-Twin Lot">Garden Lot-Twin Lot</option>
                                                <option value="Garden Lot-Triple Lot">Garden Lot-Triple Lot</option>
                                                <option value="Garden Lot-4 Lot">Garden Lot-4 Lot</option>
                                                <option value="Garden Estate-A">Garden Estate-A</option>
                                                <option value="Garden Estate-A">Garden Estate-B</option>
                                                <option value="Family Estate">Family Estate</option>
                                                <option value="Apartment Units">Apartment Units</option>
                                        </select>
                                        @error('product_type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="product_category" class="form-label">Product Category</label>
                                        <select name="product_category" class="form-select mb-3 @error('product_category') is-invalid @enderror" id="product_category">
                                                <option selected disabled>Open this select menu</option>
                                                <option value="Regular">Regular</option>
                                                <option value="Prime">Prime</option>
                                                <option value="Super Prime">Super Prime</option>
                                                <option value="Level D">Level D</option>
                                                <option value="Level A, B, & C">Level A, B, and C</option>
                                        </select>
                                        @error('product_category')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="list_price" class="form-label">Price (Contract)</label>
                                        <input type="list_price" name="list_price" id="list_price" value="{{ old('list_price') }}" class="form-control @error('list_price') is-invalid @enderror" placeholder="₱00.00">
                                        @error('list_price')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <button type="submit" class="btn btn-outline-primary generate">Generate</button>
                            <button type="submit" class="btn btn-success save">Save</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">List Price</h6>
                        
                            <div class="mb-3">
                                <label for="spot_cash" class="form-label">Spot Cash</label>
                                <input type="number" name="spot_cash" id="spot_cash" class="form-control @error('spot_cash') is-invalid @enderror" autocomplete="off" placeholder="₱00.00" readonly>
                                @error('spot_cash')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="at_need" class="form-label">At-Need</label>
                                <input type="number" name="at_need" id="at_need" class="form-control @error('at_need') is-invalid @enderror" placeholder="₱00.00" readonly>
                                @error('at_need')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="down_payment_amount" class="form-label">20% Down Payment</label>
                                <input type="number" name="down_payment_amount" id="down_payment_amount" class="form-control @error('down_payment_amount') is-invalid @enderror" placeholder="₱00.00" readonly>
                                @error('down_payment_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="remaining_balance" class="form-label">80% Balance</label>
                                <input type="number" name="remaining_balance" id="remaining_balance" class="form-control @error('remaining_balance') is-invalid @enderror" placeholder="₱00.00" readonly>
                                @error('remaining_balance')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">With Down Payment (With Interest)</h6>
                        
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_1" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_1" id="wdp_monthly_payment_1" class="form-control @error('wdp_monthly_payment_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_term_1" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdp_term_1" id="wdp_term_1" value="12" class="form-control @error('wdp_term_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdp_end_price_1" id="wdp_end_price_1" value="">
                                        @error('wdp_term_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_2" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_2" id="wdp_monthly_payment_2" class="form-control @error('wdp_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_term_2" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdp_term_2" id="wdp_term_2" value="24" class="form-control @error('wdp_term_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdp_end_price_2" id="wdp_end_price_2" value="">
                                        @error('wdp_term_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_3" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_3" id="wdp_monthly_payment_3" class="form-control @error('wdp_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_term_3" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdp_term_3" id="wdp_term_3" value="36" class="form-control @error('wdp_term_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdp_end_price_3" id="wdp_end_price_3" value="">
                                        @error('wdp_term_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_4" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_4" id="wdp_monthly_payment_4" class="form-control @error('wdp_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_term_4" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdp_term_4" id="wdp_term_4" value="48" class="form-control @error('wdp_term_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdp_end_price_4" id="wdp_end_price_4" value="">
                                        @error('wdp_term_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_5" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_5" id="wdp_monthly_payment_5" class="form-control @error('wdp_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_term_5" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdp_term_5" id="wdp_term_5" value="60" class="form-control @error('wdp_term_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdp_end_price_5" id="wdp_end_price_5" value="">
                                        @error('wdp_term_5')
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
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Description</h6>                     
                            <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" id="product_description" value="{{ old('product_description') }}" cols="25" rows="11"></textarea>
                            @error('product_description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">No Down Payment (With Interest)</h6>
                        
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_1" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_1" id="ndp_monthly_payment_1" class="form-control @error('ndp_monthly_payment_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_term_1" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndp_term_1" id="ndp_term_1" value="12" class="form-control @error('ndp_term_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndp_end_price_1" id="ndp_end_price_1" value="">
                                        @error('ndp_term_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_2" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_2" id="ndp_monthly_payment_2" class="form-control @error('ndp_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_term_2" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndp_term_2" id="ndp_term_2" value="24" class="form-control @error('ndp_term_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndp_end_price_2" id="ndp_end_price_2" value="">
                                        @error('ndp_term_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_3" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_3" id="ndp_monthly_payment_3" class="form-control @error('ndp_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_term_3" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndp_term_3" id="ndp_term_3" value="36" class="form-control @error('ndp_term_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndp_end_price_3" id="ndp_end_price_3" value="">
                                        @error('ndp_term_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_4" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_4" id="ndp_monthly_payment_4" class="form-control @error('ndp_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_term_4" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndp_term_4" id="ndp_term_4" value="48" class="form-control @error('ndp_term_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndp_end_price_4" id="ndp_end_price_4" value="">
                                        @error('ndp_term_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_5" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_5" id="ndp_monthly_payment_5" class="form-control @error('ndp_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_term_5" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndp_term_5" id="ndp_term_5" value="60" class="form-control @error('ndp_term_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndp_end_price_5" id="ndp_end_price_5" value="">
                                        @error('ndp_term_5')
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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">With Down Payment (No Interest)</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="wdpni_monthly_payment" class="form-label">Monthly Payment (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment" id="wdpni_monthly_payment" class="form-control @error('wdpni_monthly_payment') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="wdpni_end_price_1" id="wdpni_end_price_1" value="">
                                        @error('wdpni_monthly_payment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="wdpni_term_1" class="form-label">Term (Months)</label>
                                        <input type="number" name="wdpni_term_1" id="wdpni_term_1" value="" class="form-control @error('wdpni_term_1') is-invalid @enderror" placeholder="Term" readonly>
                                        <input type="hidden" name="wdpni_end_price_2" id="wdpni_end_price_2" value="">
                                        @error('wdpni_term_1')
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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">No Down Payment (No Interest)</h6>
                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ndpni_monthly_payment" class="form-label">Monthly Payment (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment" id="ndpni_monthly_payment" class="form-control @error('ndpni_monthly_payment') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        <input type="hidden" name="ndpni_end_price_1" id="ndpni_end_price_1" value="">
                                        @error('ndpni_monthly_payment')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="ndpni_term_1" class="form-label">Term (Months)</label>
                                        <input type="number" name="ndpni_term_1" id="ndpni_term_1" value="" class="form-control @error('ndpni_term_1') is-invalid @enderror" placeholder="Term" readonly>
                                        <input type="hidden" name="ndpni_end_price_2" id="ndpni_end_price_2" value="">
                                        @error('ndpni_term_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" step="any" name="interest_rate_decimal_1" id="12_months_rate" value="{{ optional($rate1)->interest_rate_decimal}}" readonly><!--1yr/s (12 months) Interest Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_2" id="24_months_rate" value="{{ optional($rate2)->interest_rate_decimal}}" readonly><!--2yr/s (24 months) Interest Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_3" id="36_months_rate" value="{{ optional($rate3)->interest_rate_decimal}}" readonly><!--3yr/s (36 months) Interest Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_4" id="48_months_rate" value="{{ optional($rate4)->interest_rate_decimal}}" readonly><!--4yr/s (48 months) Interest Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_5" id="60_months_rate" value="{{ optional($rate5)->interest_rate_decimal}}" readonly><!--5yr/s (60 months) Interest Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_6" id="spot_cash_rate" value="{{ optional($rate6)->interest_rate_decimal}}" readonly><!--Spot Cash Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_7" id="at_need_rate" value="{{ optional($rate7)->interest_rate_decimal}}" readonly><!--At Need Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_8" id="down_payment_rate" value="{{ optional($rate8)->interest_rate_decimal}}" readonly><!--Down Payment Rate-->
        <input type="hidden" step="any" name="interest_rate_decimal_9" id="penalty_rate" value="{{ optional($rate9)->interest_rate_decimal}}" readonly><!--Penalty Rate-->
    </div><!-- page-content -->
   
    <!-- Modal -->
    <div class="modal fade" id="ops" tabindex="-1" aria-labelledby="opsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="opsLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
            </div>
            <div class="modal-body">
                Ops! Cannot Generate, PLP and/or Rates cannot be Empty!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {

        function calculatePrices() {

            if (!$("#12_months_rate").val() || !$("#24_months_rate").val() || !$("#36_months_rate").val() ||
                !$('#48_months_rate').val() || !$("#60_months_rate").val() || !$("#spot_cash_rate").val() ||
                !$("#at_need_rate").val() || !$("#down_payment_rate").val() || !$('#penalty_rate').val() ||
                !$('#product_type').val() || !$('#product_category').val() || !$('#list_price').val()) {

                $('#ops').modal('show');
                return;
            } else {

                var principal = parseFloat($("#list_price").val());

                var wdp_twelveMonthsTerm = parseFloat($('#wdp_term_1').val());//WDP
                var wdp_twentyfourMonthsTerm = parseFloat($('#wdp_term_2').val());
                var wdp_thirtysixMonthsTerm = parseFloat($('#wdp_term_3').val());
                var wdp_fourtyeightMonthsTerm = parseFloat($('#wdp_term_4').val());
                var wdp_sixtyMonthsTerm = parseFloat($('#wdp_term_5').val());//End WDP

                var ndp_twelveMonthsTerm = parseFloat($('#ndp_term_1').val());//NDP
                var ndp_twentyfourMonthsTerm = parseFloat($('#ndp_term_2').val());
                var ndp_thirtysixMonthsTerm = parseFloat($('#ndp_term_3').val());
                var ndp_fourtyeightMonthsTerm = parseFloat($('#ndp_term_4').val());
                var ndp_sixtyMonthsTerm = parseFloat($('#ndp_term_5').val());//End NDP

                var wdpni_Term = parseFloat($('#wdpni_term_1').val());//End WDPNI
                var ndpni_Term = parseFloat($('#ndpni_term_1').val());//End NDPNI

                var spotCashRate = parseFloat($("#spot_cash_rate").val());
                var atNeedRate = parseFloat($("#at_need_rate").val());
                var downPaymentRate = parseFloat($("#down_payment_rate").val());
                var penaltyRate = parseFloat($('#penalty_rate').val());
                var twelveMonthsRate = parseFloat($("#12_months_rate").val());
                var twentyfourMonthsRate = parseFloat($("#24_months_rate").val());
                var thirtysixMonthsRate = parseFloat($("#36_months_rate").val());
                var fourtyeightMonthsRate = parseFloat($('#48_months_rate').val());
                var sixtyMonthsRate = parseFloat($("#60_months_rate").val());//InterestRate

                var wdp_spotCashAmount = principal * spotCashRate;
                var wdp_spotCashPrice = principal - wdp_spotCashAmount;//Sot Cash

                var wdp_atNeedAmount = principal * atNeedRate;
                var wdp_atNeedPrice = principal + wdp_atNeedAmount;//At-Need

                var wdp_dpAmount = principal * downPaymentRate;
                var wdp_remainingBalance = principal - wdp_dpAmount;//DP and Remaining Balance

                var wdp_monthlyPayment_1 = wdp_remainingBalance * twelveMonthsRate;//WDP
                var wdp_endPrice_1 = wdp_monthlyPayment_1 * wdp_twelveMonthsTerm;//revised

                var wdp_monthlyPayment_2 = wdp_remainingBalance * twentyfourMonthsRate;
                var wdp_endPrice_2 = wdp_monthlyPayment_2 * wdp_twentyfourMonthsTerm;//revised

                var wdp_monthlyPayment_3 = wdp_remainingBalance * thirtysixMonthsRate;
                var wdp_endPrice_3 = wdp_monthlyPayment_3 * wdp_thirtysixMonthsTerm;//revised

                var wdp_monthlyPayment_4 = wdp_remainingBalance * fourtyeightMonthsRate;
                var wdp_endPrice_4 = wdp_monthlyPayment_4 * wdp_fourtyeightMonthsTerm;//revised

                var wdp_monthlyPayment_5 = wdp_remainingBalance * sixtyMonthsRate;
                var wdp_endPrice_5 = wdp_monthlyPayment_5 * wdp_sixtyMonthsTerm;//revised

                var ndp_monthlyPayment_1 = principal * twelveMonthsRate;//NDP
                var ndp_endPrice_1 = ndp_monthlyPayment_1 * ndp_twelveMonthsTerm;//revised

                var ndp_monthlyPayment_2 = principal * twentyfourMonthsRate;
                var ndp_endPrice_2 = ndp_monthlyPayment_2 * ndp_twentyfourMonthsTerm;//revised

                var ndp_monthlyPayment_3 = principal * thirtysixMonthsRate;
                var ndp_endPrice_3 = ndp_monthlyPayment_3 * ndp_thirtysixMonthsTerm;//revised

                var ndp_monthlyPayment_4 = principal * fourtyeightMonthsRate;
                var ndp_endPrice_4 = ndp_monthlyPayment_4 * ndp_fourtyeightMonthsTerm;//revised

                var ndp_monthlyPayment_5 = principal * sixtyMonthsRate;
                var ndp_endPrice_5 = ndp_monthlyPayment_5 * ndp_sixtyMonthsTerm;//revised

                //WDPNI
                var wdpni_monthlyPayment_1 = wdp_remainingBalance / wdpni_Term;
                var wdpni_endPrice_1 = wdpni_monthlyPayment_1 * wdpni_Term;
                //End WDPNI

                //NDPNI
                var ndpni_monthlyPayment_1 = principal / ndpni_Term;
                var ndpni_endPrice_1 = ndpni_monthlyPayment_1 * ndpni_Term;
                //End NDPNI

                $("#spot_cash").val(wdp_spotCashPrice.toFixed(2));
                $("#at_need").val(wdp_atNeedPrice.toFixed(2));
                $("#down_payment_amount").val(wdp_dpAmount.toFixed(2));
                $("#remaining_balance").val(wdp_remainingBalance.toFixed(2));//Fill the fields

                $("#wdp_monthly_payment_1").val(wdp_monthlyPayment_1.toFixed(2));
                $("#wdp_end_price_1").val(wdp_endPrice_1.toFixed(2));

                $("#wdp_monthly_payment_2").val(wdp_monthlyPayment_2.toFixed(2));
                $("#wdp_end_price_2").val(wdp_endPrice_2.toFixed(2));

                $("#wdp_monthly_payment_3").val(wdp_monthlyPayment_3.toFixed(2));
                $("#wdp_end_price_3").val(wdp_endPrice_3.toFixed(2));

                $("#wdp_monthly_payment_4").val(wdp_monthlyPayment_4.toFixed(2));
                $("#wdp_end_price_4").val(wdp_endPrice_4.toFixed(2));

                $("#wdp_monthly_payment_5").val(wdp_monthlyPayment_5.toFixed(2));
                $("#wdp_end_price_5").val(wdp_endPrice_5.toFixed(2));//WDP

                $("#ndp_monthly_payment_1").val(ndp_monthlyPayment_1.toFixed(2));
                $("#ndp_end_price_1").val(ndp_endPrice_1.toFixed(2));

                $("#ndp_monthly_payment_2").val(ndp_monthlyPayment_2.toFixed(2));
                $("#ndp_end_price_2").val(ndp_endPrice_2.toFixed(2));

                $("#ndp_monthly_payment_3").val(ndp_monthlyPayment_3.toFixed(2));
                $("#ndp_end_price_3").val(ndp_endPrice_3.toFixed(2));

                $("#ndp_monthly_payment_4").val(ndp_monthlyPayment_4.toFixed(2));
                $("#ndp_end_price_4").val(ndp_endPrice_4.toFixed(2));

                $("#ndp_monthly_payment_5").val(ndp_monthlyPayment_5.toFixed(2));
                $("#ndp_end_price_5").val(ndp_endPrice_5.toFixed(2));//NDP

                $("#wdpni_monthly_payment").val(wdpni_monthlyPayment_1.toFixed(2));
                $("#wdpni_end_price_1").val(wdpni_endPrice_1.toFixed(2));//WDPNI

                $("#ndpni_monthly_payment").val(ndpni_monthlyPayment_1.toFixed(2));
                $("#ndpni_end_price_1").val(ndpni_endPrice_1.toFixed(2));//NDPNI
            }
        }

        $(".generate").click(function (event) {
            event.preventDefault(); // Generate

            calculatePrices();
        });
    });

</script>
@endsection