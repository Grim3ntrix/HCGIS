@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title" style="margin-bottom: 20px;">Edit Price List (With Downpayment)</h6>
                    <form action="{{ route('update.pricelist.withdown') }}" method="POST">
                                @csrf                                                               
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $product->id }}"></input>                                     
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="product_type" class="form-label">Product Type</label>
                                            <input type="text" name="product_type" id="product_type" value="{{ $product->productType->product_type }}" class="form-control @error('product_type') is-invalid @enderror" placeholder="Enter Product Type">
                                            @error('product_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="product_category" class="form-label">Product Category</label>
                                            <input type="text" name="product_category" id="product_category" value="{{ $product->productCategory->product_category }}" class="form-control @error('product_category') is-invalid @enderror" placeholder="Enter Product Category">
                                            @error('product_category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col -->                                
                                </div><!-- Row -->
                                
                                <div class="row">                                     
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="contract_price" class="form-label">List Price (Contract)</label>
                                            <input type="number" name="contract_price" id="contract_price" value="{{ $product->listPrice->contract_price }}" class="form-control @error('contract_price') is-invalid @enderror" placeholder="₱00.00">
                                            @error('contract_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col --> 
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="spot_cash" class="form-label">Pre-Need (Spot Cash)</label>
                                            <input type="number" name="spot_cash" id="spot_cash" value="{{ $product->listPrice->spot_cash }}" class="form-control @error('spot_cash') is-invalid @enderror" placeholder="₱00.00">
                                            @error('spot_cash')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col --> 
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="at_need_price" class="form-label">At Need Price</label>
                                            <input type="number" name="at_need_price" id="at_need_price" value="{{ $product->listPrice->at_need_price }}" class="form-control @error('at_need_price') is-invalid @enderror" placeholder="₱00.00">
                                            @error('at_need_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col -->                                   
                                </div><!-- Row -->
                                <div class="row">                                     
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="down_payment_rate" class="form-label">Down Payment Rate</label>
                                            <input type="text" name="down_payment_rate" id="down_payment_rate" value="{{ $product->downPayment->down_payment_rate }}" class="form-control @error('down_payment_rate') is-invalid @enderror" placeholder="00.00%">
                                            @error('down_payment_rate')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="down_payment_amount" class="form-label">Down Payment Amount</label>
                                            <input type="number" name="down_payment_amount" id="down_payment_amount" value="{{ $product->downPayment->down_payment_amount }}" class="form-control @error('down_payment_amount') is-invalid @enderror" placeholder="₱00.00">
                                            @error('down_payment_amount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col --> 
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="balance" class="form-label">Balance</label>
                                            <input type="number" name="balance" id="balance" value="{{ $product->downPayment->balance }}" class="form-control @error('balance') is-invalid @enderror" placeholder="₱00.00">
                                            @error('balance')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><!-- Col -->                                   
                                </div><!-- Row -->
                                <div class="row">                                     
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                        <label for="description" class="form-label">Product Description</label>
                                            <textarea maxlength="300" name="description" id="maxlength-textarea" class="form-control @error('description') is-invalid @enderror" cols="30" rows="2" placeholder="Enter Product Description">{{ $product->description }}</textarea>
                                            @error('description')
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