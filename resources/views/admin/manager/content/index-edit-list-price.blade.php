@extends('admin.manager.body.listprice')
@section('listprice-content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Make sure Rates is not Empty to Generate and Save PLP" data-feather="help-circle" class=""></i></span>Product List Price</h4>
                        <form action="{{ route('manager.view.list.price', ['id' => $PLP->id] ) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                   
                                        <label for="product_type" class="form-label">Product Type</label>
                                        <input type="text" name="product_type" id="product_type" value="{{ $PLP->product_type }}" class="form-control @error('product_type') is-invalid @enderror" placeholder="Enter Product Type" readonly>
                                        @error('product_type')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="product_category" class="form-label">Product Category</label>
                                        <input type="product_category" name="product_category" id="product_category" value="{{ $PLP->product_category }}" class="form-control @error('product_category') is-invalid @enderror" placeholder="Enter Product Category" readonly>
                                        @error('product_category')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="list_price" class="form-label">Price (Contract)</label>
                                        <input type="list_price" name="list_price" id="list_price" value="{{ $PLP->list_price }}" class="form-control @error('list_price') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('list_price')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        
                    </div>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">List Price</h6>
                        
                            <div class="mb-3">
                                <input type="hidden" name="spot_cash_id" id="spot_cash_id" value="{{ $PLP->preNeed->id ?? ''}}">
                                <label for="spot_cash" class="form-label">Spot Cash</label>
                                <input type="number" name="spot_cash" id="spot_cash" value="{{ $PLP->preNeed->spot_cash }}" class="form-control @error('spot_cash') is-invalid @enderror" autocomplete="off" placeholder="₱00.00" readonly>
                                @error('spot_cash')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="at_need_id" id="at_need_id" value="{{ $PLP->atNeed->id ?? ''}}">
                                <label for="at_need" class="form-label">At-Need</label>
                                <input type="number" name="at_need" id="at_need" value="{{ $PLP->atNeed->at_need }}" class="form-control @error('at_need') is-invalid @enderror" placeholder="₱00.00" readonly>
                                @error('at_need')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="dp_id" id="dp_id" value="{{ $PLP->downPayment->id ?? ''}}">
                                <label for="down_payment_amount" class="form-label">20% Down Payment</label>
                                <input type="number" name="down_payment_amount" id="down_payment_amount" value="{{ $PLP->downPayment->down_payment_amount }}" class="form-control @error('down_payment_amount') is-invalid @enderror" placeholder="₱00.00" readonly>
                                @error('down_payment_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="remaining_balance" class="form-label">80% Balance</label>
                                <input type="number" name="remaining_balance" id="remaining_balance" value="{{ $PLP->downPayment->remaining_balance }}" class="form-control @error('remaining_balance') is-invalid @enderror" placeholder="₱00.00" readonly>
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
                                        <input type="hidden" name="wdp_id_1" id="wdp_id_1" value="{{ $PLP->withDownPayment[0]->id ?? ''}}">
                                        <input type="hidden" name="wdp_term_1" id="wdp_term_1" value="12">
                                        <label for="wdp_annual_interest_1" class="form-label">1yr/s (Interest)</label>
                                        <input type="number" name="wdp_annual_interest_1" id="wdp_annual_interest_1" value="{{ $PLP->withDownPayment[0]->wdp_annual_interest }}" class="form-control @error('wdp_annual_interest_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_annual_interest_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_1" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_1" id="wdp_monthly_payment_1" value="{{ $PLP->withDownPayment[0]->wdp_monthly_payment }}" class="form-control @error('wdp_monthly_payment_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdp_id_2" id="wdp_id_2" value="{{ $PLP->withDownPayment[1]->id ?? ''}}">
                                        <input type="hidden" name="wdp_term_2" id="wdp_term_2" value="24">
                                        <label for="wdp_annual_interest_2" class="form-label">2yr/s (Interest)</label>
                                        <input type="number" name="wdp_annual_interest_2" id="wdp_annual_interest_2" value="{{ $PLP->withDownPayment[1]->wdp_annual_interest }}" class="form-control @error('wdp_annual_interest_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_annual_interest_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_2" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_2" id="wdp_monthly_payment_2" value="{{ $PLP->withDownPayment[1]->wdp_monthly_payment }}" class="form-control @error('wdp_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdp_id_3" id="wdp_id_3" value="{{ $PLP->withDownPayment[0]->id ?? ''}}">
                                        <input type="hidden" name="wdp_term_3" id="wdp_term_3" value="36">
                                        <label for="wdp_annual_interest_3" class="form-label">3yr/s (Interest)</label>
                                        <input type="number" name="wdp_annual_interest_3" id="wdp_annual_interest_3" value="{{ $PLP->withDownPayment[2]->wdp_annual_interest }}" class="form-control @error('wdp_annual_interest_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_annual_interest_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_3" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_3" id="wdp_monthly_payment_3" value="{{ $PLP->withDownPayment[2]->wdp_monthly_payment }}" class="form-control @error('wdp_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdp_id_4" id="wdp_id_4" value="{{ $PLP->withDownPayment[3]->id ?? ''}}">
                                        <input type="hidden" name="wdp_term_4" id="wdp_term_4" value="48">
                                        <label for="wdp_annual_interest_4" class="form-label">4yr/s (Interest)</label>
                                        <input type="number" name="wdp_annual_interest_4" id="wdp_annual_interest_4" value="{{ $PLP->withDownPayment[3]->wdp_annual_interest }}" class="form-control @error('wdp_annual_interest_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_annual_interest_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_4" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_4" id="wdp_monthly_payment_4" value="{{ $PLP->withDownPayment[3]->wdp_monthly_payment }}" class="form-control @error('wdp_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdp_id_5" id="wdp_id_5" value="{{ $PLP->withDownPayment[4]->id ?? ''}}">
                                        <input type="hidden" name="wdp_term_5" id="wdp_term_5" value="60">
                                        <label for="wdp_annual_interest_5" class="form-label">5yr/s (Interest)</label>
                                        <input type="number" name="wdp_annual_interest_5" id="wdp_annual_interest_5" value="{{ $PLP->withDownPayment[4]->wdp_annual_interest }}" class="form-control @error('wdp_annual_interest_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_annual_interest_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="wdp_monthly_payment_5" class="form-label">Monthly Payment</label>
                                        <input type="number" name="wdp_monthly_payment_5" id="wdp_monthly_payment_5" value="{{ $PLP->withDownPayment[4]->wdp_monthly_payment }}" class="form-control @error('wdp_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdp_monthly_payment_5')
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
                            <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" id="product_description" value="{{ old('product_description') }}" cols="25" rows="11">{{$PLP->product_description}}</textarea>
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
                                        <input type="hidden" name="ndp_id_1" id="ndp_id_1" value="{{ $PLP->noDownPayment[0]->id ?? ''}}">
                                        <input type="hidden" name="ndp_term_1" id="ndp_term_1" value="12">
                                        <label for="ndp_annual_interest_1" class="form-label">1yr/s (Interest)</label>
                                        <input type="number" name="ndp_annual_interest_1" id="ndp_annual_interest_1" value="{{ $PLP->noDownPayment[0]->ndp_annual_interest }}" class="form-control @error('ndp_annual_interest_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_annual_interest_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_1" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_1" id="ndp_monthly_payment_1" value="{{ $PLP->noDownPayment[0]->ndp_monthly_payment }}" class="form-control @error('email') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndp_id_2" id="ndp_id_2" value="{{ $PLP->noDownPayment[1]->id ?? ''}}">
                                        <input type="hidden" name="ndp_term_2" id="ndp_term_2" value="24">
                                        <label for="ndp_annual_interest_2" class="form-label">2yr/s (Interest)</label>
                                        <input type="number" name="ndp_annual_interest_2" id="ndp_annual_interest_2" value="{{ $PLP->noDownPayment[1]->ndp_annual_interest }}" class="form-control @error('ndp_annual_interest_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_annual_interest_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_2" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_2" id="ndp_monthly_payment_2" value="{{ $PLP->noDownPayment[1]->ndp_monthly_payment }}" class="form-control @error('ndp_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndp_id_3" id="ndp_id_3" value="{{ $PLP->noDownPayment[2]->id ?? ''}}">
                                        <input type="hidden" name="ndp_term_3" id="ndp_term_3" value="36">
                                        <label for="ndp_annual_interest_3" class="form-label">3yr/s (Interest)</label>
                                        <input type="number" name="ndp_annual_interest_3" id="ndp_annual_interest_3" value="{{ $PLP->noDownPayment[2]->ndp_annual_interest }}" class="form-control @error('ndp_annual_interest_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_annual_interest_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_3" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_3" id="ndp_monthly_payment_3" value="{{ $PLP->noDownPayment[2]->ndp_monthly_payment }}" class="form-control @error('ndp_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndp_id_4" id="ndp_id_4" value="{{ $PLP->noDownPayment[3]->id ?? ''}}">
                                        <input type="hidden" name="ndp_term_4" id="ndp_term_4" value="48">
                                        <label for="ndp_annual_interest_4" class="form-label">4yr/s (Interest)</label>
                                        <input type="number" name="ndp_annual_interest_4" id="ndp_annual_interest_4" value="{{ $PLP->noDownPayment[3]->ndp_annual_interest }}" class="form-control @error('ndp_annual_interest_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_annual_interest_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_4" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_4" id="ndp_monthly_payment_4" value="{{ $PLP->noDownPayment[3]->ndp_monthly_payment }}" class="form-control @error('ndp_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndp_id_5" id="ndp_id_5" value="{{ $PLP->noDownPayment[4]->id ?? ''}}">
                                        <input type="hidden" name="ndp_term_5" id="ndp_term_5" value="60">
                                        <label for="ndp_annual_interest_5" class="form-label">5yr/s (Interest)</label>
                                        <input type="number" name="ndp_annual_interest_5" id="ndp_annual_interest_5" value="{{ $PLP->noDownPayment[4]->ndp_annual_interest }}" class="form-control @error('ndp_annual_interest_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_annual_interest_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndp_monthly_payment_5" class="form-label">Monthly Payment</label>
                                        <input type="number" name="ndp_monthly_payment_5" id="ndp_monthly_payment_5" value="{{ $PLP->noDownPayment[4]->ndp_monthly_payment }}" class="form-control @error('ndp_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndp_monthly_payment_5')
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
                                <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_term_1" id="wdpni_term_1" value="12">
                                        <label for="wdpni_annual_interest_1" class="form-label">1yr/s (12 months)</label>
                                        <input type="number" name="wdpni_annual_interest_1" id="wdpni_annual_interest_1" class="form-control @error('wdpni_annual_interest_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_annual_interest_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_id_1" id="wdpni_id_1" value="{{ $PLP->withDownPaymentNoInterest[0]->id ?? ''}}">
                                        <input type="hidden" name="wdpni_term_1" id="wdpni_term_1" value="12">
                                        <label for="wdpni_monthly_payment_1" class="form-label">1yr/s 12 mos. (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment_1" id="wdpni_monthly_payment_1"  value="{{ $PLP->withDownPaymentNoInterest[0]->wdpni_monthly_payment }}" class="form-control @error('wdpni_monthly_payment_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_monthly_payment_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                               <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_term_2" id="wdpni_term_2" value="24">
                                        <label for="wdpni_annual_interest_2" class="form-label">2yr/s (24 months)</label>
                                        <input type="number" name="wdpni_annual_interest_2" id="wdpni_annual_interest_2" class="form-control @error('wdpni_annual_interest_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_annual_interest_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_id_2" id="wdpni_id_2" value="{{ $PLP->withDownPaymentNoInterest[1]->id ?? ''}}">
                                        <input type="hidden" name="wdpni_term_2" id="wdpni_term_2" value="24">
                                        <label for="wdpni_monthly_payment_2" class="form-label">2yr/s 24 mos. (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment_2" id="wdpni_monthly_payment_2"  value="{{ $PLP->withDownPaymentNoInterest[1]->wdpni_monthly_payment }}" class="form-control @error('wdpni_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                           <div class="row">
                              <!--   <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_term_3" id="wdpni_term_3" value="36">
                                        <label for="wdpni_annual_interest_3" class="form-label">3yr/s (36 months)</label>
                                        <input type="number" name="wdpni_annual_interest_3" id="wdpni_annual_interest_3" class="form-control @error('wdpni_annual_interest_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_annual_interest_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_id_3" id="wdpni_id_3" value="{{ $PLP->withDownPaymentNoInterest[2]->id ?? ''}}">
                                        <input type="hidden" name="wdpni_term_3" id="wdpni_term_3" value="36">
                                        <label for="wdpni_monthly_payment_3" class="form-label">3yr/s 36 mos. (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment_3" id="wdpni_monthly_payment_3"  value="{{ $PLP->withDownPaymentNoInterest[2]->wdpni_monthly_payment }}" class="form-control @error('wdpni_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                               <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_term_4" id="wdpni_term_4" value="48">
                                        <label for="wdpni_annual_interest_4" class="form-label">4yr/s (48 months)</label>
                                        <input type="number" name="wdpni_annual_interest_4" id="wdpni_annual_interest_4" class="form-control @error('wdpni_annual_interest_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_annual_interest_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_id_4" id="wdpni_id_4" value="{{ $PLP->withDownPaymentNoInterest[3]->id ?? ''}}">
                                        <input type="hidden" name="wdpni_term_4" id="wdpni_term_4" value="48">
                                        <label for="wdpni_monthly_payment_4" class="form-label">4yr/s 48 mos. (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment_4" id="wdpni_monthly_payment_4"  value="{{ $PLP->withDownPaymentNoInterest[3]->wdpni_monthly_payment }}" class="form-control @error('wdpni_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                               <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_term_5" id="wdpni_term_5" value="60">
                                        <label for="wdpni_annual_interest_5" class="form-label">5yr/s (60 months)</label>
                                        <input type="number" name="wdpni_annual_interest_5" id="wdpni_annual_interest_5" class="form-control @error('wdpni_annual_interest_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_annual_interest_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="wdpni_id_5" id="wdpni_id_5" value="{{ $PLP->withDownPaymentNoInterest[4]->id ?? ''}}">
                                        <input type="hidden" name="wdpni_term_5" id="wdpni_term_5" value="60">
                                        <label for="wdpni_monthly_payment_5" class="form-label">5yr/s 60 mos. (No Interest)</label>
                                        <input type="number" name="wdpni_monthly_payment_5" id="wdpni_monthly_payment_5"  value="{{ $PLP->withDownPaymentNoInterest[4]->wdpni_monthly_payment }}" class="form-control @error('wdpni_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('wdpni_monthly_payment_5')
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
                                <!--<div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndpni_annual_interest_1" class="form-label">1yr/s (12 months)</label>
                                        <input type="number" name="ndpni_annual_interest_1" id="ndpni_annual_interest_1" class="form-control @error('ndpni_annual_interest_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_annual_interest_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndpni_id_1" id="ndpni_id_1" value="{{ $PLP->noDownPaymentNoInterest[0]->id ?? ''}}">
                                        <input type="hidden" name="ndpni_term_1" id="ndpni_term_1" value="12">
                                        <label for="ndpni_monthly_payment_1" class="form-label">1yr/s 12 mos. (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment_1" id="ndpni_monthly_payment_1" value="{{ $PLP->noDownPaymentNoInterest[0]->ndpni_monthly_payment }}" class="form-control @error('ndpni_monthly_payment_1') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_monthly_payment_1')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                               <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndpni_annual_interest_2" class="form-label">2yr/s (24 months)</label>
                                        <input type="number" name="ndpni_annual_interest_2" id="ndpni_annual_interest_2" class="form-control @error('ndpni_annual_interest_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_annual_interest_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndpni_id_2" id="ndpni_id_2" value="{{ $PLP->noDownPaymentNoInterest[1]->id ?? ''}}">
                                        <input type="hidden" name="ndpni_term_2" id="ndpni_term_2" value="24">
                                        <label for="ndpni_monthly_payment_2" class="form-label">2yr/s 24 mos. (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment_2" id="ndpni_monthly_payment_2" value="{{ $PLP->noDownPaymentNoInterest[1]->ndpni_monthly_payment }}" class="form-control @error('ndpni_monthly_payment_2') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_monthly_payment_2')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <!--<div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndpni_annual_interest_3" class="form-label">3yr/s (36 months)</label>
                                        <input type="number" name="ndpni_annual_interest_3" id="ndpni_annual_interest_3" class="form-control @error('ndpni_annual_interest_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_annual_interest_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndpni_id_3" id="ndpni_id_3" value="{{ $PLP->noDownPaymentNoInterest[2]->id ?? ''}}">
                                        <input type="hidden" name="ndpni_term_3" id="ndpni_term_3" value="36">
                                        <label for="ndpni_monthly_payment_3" class="form-label">3yr/s 36 mos. (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment_3" id="ndpni_monthly_payment_3" value="{{ $PLP->noDownPaymentNoInterest[2]->ndpni_monthly_payment }}" class="form-control @error('ndpni_monthly_payment_3') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_monthly_payment_3')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                
                               <!-- <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndpni_annual_interest_4" class="form-label">4yr/s (48 months)</label>
                                        <input type="number" name="ndpni_annual_interest_4" id="ndpni_annual_interest_4" class="form-control @error('ndpni_annual_interest_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_annual_interest_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndpni_id_4" id="ndpni_id_4" value="{{ $PLP->noDownPaymentNoInterest[3]->id ?? ''}}">
                                        <input type="hidden" name="ndpni_term_4" id="ndpni_term_4" value="48">
                                        <label for="ndpni_monthly_payment_4" class="form-label">4yr/s 48 mos. (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment_4" id="ndpni_monthly_payment_4" value="{{ $PLP->noDownPaymentNoInterest[3]->ndpni_monthly_payment }}" class="form-control @error('ndpni_monthly_payment_4') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_monthly_payment_4')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <!--<div class="col-sm-3">
                                    <div class="mb-3">
                                        <label for="ndpni_annual_interest_5" class="form-label">5yr/s (60 months)</label>
                                        <input type="number" name="ndpni_annual_interest_5" id="ndpni_annual_interest_5" class="form-control @error('ndpni_annual_interest_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_annual_interest_5')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input type="hidden" name="ndpni_id_5" id="ndpni_id_5" value="{{ $PLP->noDownPaymentNoInterest[4]->id ?? ''}}">
                                        <input type="hidden" name="ndpni_term_5" id="ndpni_term_5" value="60">
                                        <label for="ndpni_monthly_payment_5" class="form-label">5yr/s 60 mos. (No Interest)</label>
                                        <input type="number" name="ndpni_monthly_payment_5" id="ndpni_monthly_payment_5" value="{{ $PLP->noDownPaymentNoInterest[4]->ndpni_monthly_payment }}"  class="form-control @error('ndpni_monthly_payment_5') is-invalid @enderror" placeholder="₱00.00" readonly>
                                        @error('ndpni_monthly_payment_5')
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
    <script>
        $(document).ready(function () {

            function calculatePrices() {

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

                var wdpni_twelveMonthsTerm = parseFloat($('#wdpni_term_1').val());//WDPNI
                var wdpni_twentyfourMonthsTerm = parseFloat($('#wdpni_term_2').val());
                var wdpni_thirtysixMonthsTerm = parseFloat($('#wdpni_term_3').val());
                var wdpni_fourtyeightMonthsTerm = parseFloat($('#wdpni_term_4').val());
                var wdpni_sixtyMonthsTerm = parseFloat($('#wdpni_term_5').val());//End WDPNI

                var ndpni_twelveMonthsTerm = parseFloat($('#ndpni_term_1').val());//NDPNI
                var ndpni_twentyfourMonthsTerm = parseFloat($('#ndpni_term_2').val());
                var ndpni_thirtysixMonthsTerm = parseFloat($('#ndpni_term_3').val());
                var ndpni_fourtyeightMonthsTerm = parseFloat($('#ndpni_term_4').val());
                var ndpni_sixtyMonthsTerm = parseFloat($('#ndpni_term_5').val());//End NDPNI
                
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

                var wdp_interestAmount_1 = wdp_remainingBalance * twelveMonthsRate;//WDP
                var wdp_endPrice_1 = wdp_remainingBalance + wdp_interestAmount_1;
                var wdp_monthlyPayment_1 = wdp_endPrice_1 / wdp_twelveMonthsTerm;

                var wdp_interestAmount_2 = wdp_remainingBalance * twentyfourMonthsRate;
                var wdp_endPrice_2 = wdp_remainingBalance + wdp_interestAmount_2;
                var wdp_monthlyPayment_2 = wdp_endPrice_2 / wdp_twentyfourMonthsTerm;

                var wdp_interestAmount_3 = wdp_remainingBalance * thirtysixMonthsRate;
                var wdp_endPrice_3 = wdp_remainingBalance + wdp_interestAmount_3;
                var wdp_monthlyPayment_3 = wdp_endPrice_3 / wdp_thirtysixMonthsTerm;

                var wdp_interestAmount_4 = wdp_remainingBalance * fourtyeightMonthsRate;
                var wdp_endPrice_4 = wdp_remainingBalance + wdp_interestAmount_4;
                var wdp_monthlyPayment_4 = wdp_endPrice_4 / wdp_fourtyeightMonthsTerm;

                var wdp_interestAmount_5 = wdp_remainingBalance * sixtyMonthsRate;
                var wdp_endPrice_5 = wdp_remainingBalance + wdp_interestAmount_5;
                var wdp_monthlyPayment_5 = wdp_endPrice_5 / wdp_sixtyMonthsTerm;//End WDP

                var ndp_interestAmount_1 = principal * twelveMonthsRate;//NDP
                var ndp_endPrice_1 = principal + ndp_interestAmount_1;
                var ndp_monthlyPayment_1 = ndp_endPrice_1 / ndp_twelveMonthsTerm;

                var ndp_interestAmount_2 = principal * twentyfourMonthsRate;
                var ndp_endPrice_2 = principal + ndp_interestAmount_2;
                var ndp_monthlyPayment_2 = ndp_endPrice_2 / ndp_twentyfourMonthsTerm;
                
                var ndp_interestAmount_3 = principal * thirtysixMonthsRate;
                var ndp_endPrice_3 = principal + ndp_interestAmount_3;
                var ndp_monthlyPayment_3 = ndp_endPrice_3 / ndp_thirtysixMonthsTerm;
                
                var ndp_interestAmount_4 = principal * fourtyeightMonthsRate;
                var ndp_endPrice_4 = principal + ndp_interestAmount_4;
                var ndp_monthlyPayment_4 = ndp_endPrice_4 / ndp_fourtyeightMonthsTerm;

                var ndp_interestAmount_5 = principal * sixtyMonthsRate;
                var ndp_endPrice_5 = principal + ndp_interestAmount_5;
                var ndp_monthlyPayment_5 = ndp_endPrice_5 / ndp_sixtyMonthsTerm;//End NDP
                
                var wdpni_monthlyPayment_1 = wdp_remainingBalance / wdpni_twelveMonthsTerm;//WDPNI
                var wdpni_endPrice_1 = wdpni_monthlyPayment_1 * wdpni_twelveMonthsTerm;

                var wdpni_monthlyPayment_2 = wdp_remainingBalance / wdpni_twentyfourMonthsTerm;
                var wdpni_endPrice_2 = wdpni_monthlyPayment_2 * wdpni_twentyfourMonthsTerm;

                var wdpni_monthlyPayment_3 = wdp_remainingBalance / wdpni_thirtysixMonthsTerm;
                var wdpni_endPrice_3 = wdpni_monthlyPayment_3 * wdpni_thirtysixMonthsTerm;

                var wdpni_monthlyPayment_4 = wdp_remainingBalance / wdpni_fourtyeightMonthsTerm;
                var wdpni_endPrice_4 = wdpni_monthlyPayment_4 * wdpni_fourtyeightMonthsTerm;

                var wdpni_monthlyPayment_5 = wdp_remainingBalance / wdpni_sixtyMonthsTerm;
                var wdpni_endPrice_5 = wdpni_monthlyPayment_5 * wdpni_sixtyMonthsTerm;//End WDPNI

                var ndpni_monthlyPayment_1 = principal / ndpni_twelveMonthsTerm;//NDPNI
                var ndpni_endPrice_1 = ndpni_monthlyPayment_1 * ndpni_twelveMonthsTerm;

                var ndpni_monthlyPayment_2 = principal / ndpni_twentyfourMonthsTerm;
                var ndpni_endPrice_2 = ndpni_monthlyPayment_2 * ndpni_twentyfourMonthsTerm;

                var ndpni_monthlyPayment_3 = principal / ndpni_thirtysixMonthsTerm;
                var ndpni_endPrice_3 = ndpni_monthlyPayment_3 * ndpni_thirtysixMonthsTerm;

                var ndpni_monthlyPayment_4 = principal / ndpni_fourtyeightMonthsTerm;
                var ndpni_endPrice_4 = ndpni_monthlyPayment_4 * ndpni_fourtyeightMonthsTerm;

                var ndpni_monthlyPayment_5 = principal / ndpni_sixtyMonthsTerm;
                var ndpni_endPrice_5 = ndpni_monthlyPayment_5 * ndpni_sixtyMonthsTerm;//End NDPNI
                
                $("#spot_cash").val(wdp_spotCashPrice.toFixed(2));
                $("#at_need").val(wdp_atNeedPrice.toFixed(2));
                $("#down_payment_amount").val(wdp_dpAmount.toFixed(2));
                $("#remaining_balance").val(wdp_remainingBalance.toFixed(2));//Fill the fields

                $("#wdp_annual_interest_1").val(wdp_interestAmount_1.toFixed(2));
                $("#wdp_monthly_payment_1").val(wdp_monthlyPayment_1.toFixed(2));
                
                $("#wdp_annual_interest_2").val(wdp_interestAmount_2.toFixed(2));
                $("#wdp_monthly_payment_2").val(wdp_monthlyPayment_2.toFixed(2));

                $("#wdp_annual_interest_3").val(wdp_interestAmount_3.toFixed(2));
                $("#wdp_monthly_payment_3").val(wdp_monthlyPayment_3.toFixed(2));

                $("#wdp_annual_interest_4").val(wdp_interestAmount_4.toFixed(2));
                $("#wdp_monthly_payment_4").val(wdp_monthlyPayment_4.toFixed(2));

                $("#wdp_annual_interest_5").val(wdp_interestAmount_5.toFixed(2));
                $("#wdp_monthly_payment_5").val(wdp_monthlyPayment_5.toFixed(2));//WDP

                $("#ndp_annual_interest_1").val(ndp_interestAmount_1.toFixed(2));
                $("#ndp_monthly_payment_1").val(ndp_monthlyPayment_1.toFixed(2));

                $("#ndp_annual_interest_2").val(ndp_interestAmount_2.toFixed(2));
                $("#ndp_monthly_payment_2").val(ndp_monthlyPayment_2.toFixed(2));

                $("#ndp_annual_interest_3").val(ndp_interestAmount_3.toFixed(2));
                $("#ndp_monthly_payment_3").val(ndp_monthlyPayment_3.toFixed(2));

                $("#ndp_annual_interest_4").val(ndp_interestAmount_4.toFixed(2));
                $("#ndp_monthly_payment_4").val(ndp_monthlyPayment_4.toFixed(2));

                $("#ndp_annual_interest_5").val(ndp_interestAmount_5.toFixed(2));
                $("#ndp_monthly_payment_5").val(ndp_monthlyPayment_5.toFixed(2));//NDP

                $("#wdpni_monthly_payment_1").val(wdpni_monthlyPayment_1.toFixed(2));
                $("#wdpni_monthly_payment_2").val(wdpni_monthlyPayment_2.toFixed(2));
                $("#wdpni_monthly_payment_3").val(wdpni_monthlyPayment_3.toFixed(2));
                $("#wdpni_monthly_payment_4").val(wdpni_monthlyPayment_4.toFixed(2));
                $("#wdpni_monthly_payment_5").val(wdpni_monthlyPayment_5.toFixed(2));//WDPNI

                $("#ndpni_monthly_payment_1").val(ndpni_monthlyPayment_1.toFixed(2));
                $("#ndpni_monthly_payment_2").val(ndpni_monthlyPayment_2.toFixed(2));
                $("#ndpni_monthly_payment_3").val(ndpni_monthlyPayment_3.toFixed(2));
                $("#ndpni_monthly_payment_4").val(ndpni_monthlyPayment_4.toFixed(2));
                $("#ndpni_monthly_payment_5").val(ndpni_monthlyPayment_5.toFixed(2));//NDPNI
                
            }

            $(".generate").click(function (event) {
                event.preventDefault();//Generate

                calculatePrices();
            });
        });
    </script>
@endsection