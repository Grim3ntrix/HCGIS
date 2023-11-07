@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Add New List Price (Contract) / Installment Price With Down</h6>
                    <form action="{{ route('store.installment.pricelist.withdown') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{ $product->id }}"></input>
                        <div class="row">
                        <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="balance" class="form-label">Principal</label>
                                    <input type="number" name="balance" id="contract_price" value="{{ $product->downPayment->balance }}" class="form-control @error('balance') is-invalid @enderror" placeholder="₱00.00" readonly>
                                    @error('balance')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="interest_rate" class="form-label">Interest Rate</label>
                                    <input type="number" name="interest_rate" id="interest_rate" step="any" class="form-control @error('interest_rate') is-invalid @enderror" placeholder="0.00000">
                                    @error('interest_rate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->  
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="contract_term" class="form-label">Term (Month)</label>
                                    <input type="number" name="contract_term" id="contract_term" class="form-control @error('contract_term') is-invalid @enderror" placeholder="eg. 12 24, 36, 48, 60">
                                    @error('contract_term')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="annual_interest_amount" class="form-label">Annual Interest Amount</label>
                                    <input type="number" name="annual_interest_amount" id="annual_interest_amount" class="form-control @error('annual_interest_amount') is-invalid @enderror" placeholder="₱00.00" readonly>
                                    @error('annual_interest_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="monthly_interest_amount" class="form-label">Monthly Interest Amount</label>
                                    <input type="number" name="monthly_interest_amount" id="monthly_interest_amount" class="form-control @error('monthly_interest_amount') is-invalid @enderror" placeholder="₱00.00" readonly>
                                    @error('monthly_interest_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="end_price" class="form-label">End Price</label>
                                    <input type="number" name="end_price" id="end_price" class="form-control @error('end_price') is-invalid @enderror" placeholder="₱00.00" readonly>
                                    @error('end_price')
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
@endsection
