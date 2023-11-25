@extends('admin.manager.body.discount-rate')
@section('discount-rate-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                
                    <form action="{{ route('manager.store.discount.rate') }}" method="POST">
                        @csrf
                        <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Percentage/100 = Decimal, Decimal * 100 = Percentage" data-feather="help-circle" class=""></i></span>Interest Rate</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_1" class="form-label">1 year (12 months) %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_1" id="one_year_rate_percentage" value="{{ optional($rate1)->interest_rate_percentage . '%' }}" class="form-control @error('one_year_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('one_year_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_1" id="rate_name_1" value="1 year (12months)">
                                    <input type="hidden" name="term_1" id="term_1" value="12">
                                    <label for="interest_rate_decimal_1" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_1" id="interest_rate_decimal_1"  value="{{ optional($rate1)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_1') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_1')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_2" class="form-label">2 years (24 months) %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_2" id="two_year_rate_percentage" value="{{ optional($rate2)->interest_rate_percentage . '%' }}" class="form-control @error('two_year_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('two_year_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                <input type="hidden" name="rate_name_2" id="rate_name_2" value="2 years (24months)">
                                    <input type="hidden" name="term_2" id="term_2" value="24">
                                    <label for="interest_rate_decimal_2" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_2" id="interest_rate_decimal_2" value="{{ optional($rate2)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_2') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_2')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_3" class="form-label">3 year (36 months) %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_3" id="three_year_rate_percentage" value="{{ optional($rate3)->interest_rate_percentage . '%' }}" class="form-control @error('three_year_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('three_year_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_3" id="rate_name_3" value="3 years (36months)">
                                    <input type="hidden" name="term_3" id="term_3" value="36">
                                    <label for="interest_rate_decimal_3" class="form-label">&nbsp;</label>                                
                                    <input type="number" step="any" name="interest_rate_decimal_3" id="interest_rate_decimal_3" value="{{ optional($rate3)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_3') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_3')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_4" class="form-label">4 year (48 months) %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_4" id="four_year_rate_percentage" value="{{ optional($rate4)->interest_rate_percentage . '%' }}" class="form-control @error('four_year_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('four_year_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_4" id="rate_name_4" value="4 years (36months)">
                                    <input type="hidden" name="term_4" id="term_4" value="48">
                                    <label for="interest_rate_decimal_4" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_4" id="interest_rate_decimal_4" value="{{ optional($rate4)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_4') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_4')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_5" class="form-label">5 year (60 months) %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_5" id="five_year_rate_percentage" value="{{ optional($rate5)->interest_rate_percentage . '%' }}" class="form-control @error('five_year_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('five_year_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_5" id="rate_name_5" value="5 years (60months)">
                                    <input type="hidden" name="term_5" id="term_5" value="60">
                                    <label for="interest_rate_decimal_5" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_5" id="interest_rate_decimal_5" value="{{ optional($rate5)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_5') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_5')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row --> <br>

                        <h4 class="card-title">List Price Rate</h4>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_6" class="form-label">Spot Cash Price %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_6" id="spot_cash_rate_percentage" value="{{ optional($rate6)->interest_rate_percentage . '%' }}" class="form-control @error('spot_cash_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('spot_cash_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_6" id="rate_name_6" value="spot cash rate">
                                    <input type="hidden" name="term_6" id="term_6" value="0">
                                    <label for="interest_rate_decimal_6" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_6" id="interest_rate_decimal_6" value="{{ optional($rate6)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_6') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_6')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_7" class="form-label">At Need %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_7" id="at_need_rate_percentage" value="{{ optional($rate7)->interest_rate_percentage . '%' }}" class="form-control @error('at_need_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('at_need_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_7" id="rate_name_7" value="at need rate">
                                    <input type="hidden" name="term_7" id="term_7" value="0">
                                    <label for="interest_rate_decimal_7" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_7" id="interest_rate_decimal_7" value="{{ optional($rate7)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_7') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_7')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_8" class="form-label">Down payment %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_8" id="down_payment_rate_percentage" value="{{ optional($rate8)->interest_rate_percentage . '%' }}" class="form-control @error('down_payment_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('down_payment_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_8" id="rate_name_8" value="discount rate">
                                    <input type="hidden" name="term_8" id="term_8" value="0">
                                    <label for="interest_rate_decimal_8" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_8" id="interest_rate_decimal_8" value="{{ optional($rate8)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_8') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_8')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->

                        </div><!-- Row --> <br>

                        <h4 class="card-title">Penalty Rate</h4>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="interest_rate_percentage_9" class="form-label">Penalty Rate %</label>
                                    <input type="text" step="any" name="interest_rate_percentage_9" id="penalty_rate_percentage" value="{{ optional($rate9)->interest_rate_percentage . '%' }}" class="form-control @error('penalty_rate_percentage') is-invalid @enderror" placeholder="0.000%">
                                    @error('penalty_rate_percentage')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <input type="hidden" name="rate_name_9" id="rate_name_9" value="penalty rate">
                                    <input type="hidden" name="term_9" id="term_9" value="0">
                                    <label for="interest_rate_decimal_9" class="form-label">&nbsp;</label>
                                    <input type="number" step="any" name="interest_rate_decimal_9" id="interest_rate_decimal_9" value="{{ optional($rate9)->interest_rate_decimal}}" class="form-control @error('interest_rate_decimal_9') is-invalid @enderror" placeholder="0.00000" readonly>
                                    @error('interest_rate_decimal_9')
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
        function updateInterestRateDecimal(percentage, decimalFieldId) {
            if (!isNaN(percentage)) {
                var decimalValue = percentage / 100;
                $(decimalFieldId).val(decimalValue.toFixed(5));
            }
        }

        function handleInterestRateInput(inputId, decimalFieldId) {
            $(inputId).on('input', function () {
                var percentage = parseFloat($(this).val());
                updateInterestRateDecimal(percentage, decimalFieldId);
            });
        }

        handleInterestRateInput('#one_year_rate_percentage', '#interest_rate_decimal_1');
        handleInterestRateInput('#two_year_rate_percentage', '#interest_rate_decimal_2');
        handleInterestRateInput('#three_year_rate_percentage', '#interest_rate_decimal_3');
        handleInterestRateInput('#four_year_rate_percentage', '#interest_rate_decimal_4');
        handleInterestRateInput('#five_year_rate_percentage', '#interest_rate_decimal_5');
        handleInterestRateInput('#spot_cash_rate_percentage', '#interest_rate_decimal_6');
        handleInterestRateInput('#at_need_rate_percentage', '#interest_rate_decimal_7');
        handleInterestRateInput('#down_payment_rate_percentage', '#interest_rate_decimal_8');
        handleInterestRateInput('#penalty_rate_percentage', '#interest_rate_decimal_9');
    });
</script>

@endsection