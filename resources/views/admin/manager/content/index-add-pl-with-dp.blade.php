@extends('admin.manager.body.add-pl-with-dp')
@section('price-list-with-down-payment-content')
<div class="page-content">
  		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title" style="margin-bottom: 20px;">Add New Price List (With Downpayment)</h6>
                        <form action="{{ route('store.pricelist.withdown') }}" method="POST">
                                    @csrf
                               
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="product_type_id" class="form-label">Product Type</label>
                                                <input type="text" name="product_type_id" id="product_type_id" class="form-control @error('product_type_id') is-invalid @enderror" placeholder="Enter Product Type">
                                                @error('product_type_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="product_category_id" class="form-label">Product Category</label>
                                                <input type="text" name="product_category_id" id="product_category_id" class="form-control @error('product_category_id') is-invalid @enderror" placeholder="Enter Product Category">
                                                @error('product_category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->                                  
                                    </div><!-- Row --> 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="pre_need_price_spot_cash" class="form-label">Pre-Need Price (Spot Cash)</label>
                                                <input type="text" name="pre_need_price_spot_cash" id="pre_need_price_spot_cash" class="form-control @error('pre_need_price_spot_cash') is-invalid @enderror" placeholder="Enter Spot Cash Price">
                                                @error('pre_need_price_spot_cash')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="pre_need_price_contract_price" class="form-label">Pre-Need Price (Contract Price)</label>
                                                <input type="text" name="pre_need_price_contract_price" id="pre_need_price_contract_price" class="form-control @error('pre_need_price_contract_price') is-invalid @enderror" placeholder="Enter Contract Price">
                                                @error('pre_need_price_contract_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                        
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="at_need_price" class="form-label">At-Need Price</label>
                                                <input type="text" name="at_need_price" id="at_need_price" class="form-control @error('at_need_price') is-invalid @enderror" placeholder="Enter At-Need Price">
                                                @error('at_need_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="down_payment" class="form-label">20% Downpayment</label>
                                                <input type="text" name="down_payment" id="down_payment" class="form-control @error('down_payment') is-invalid @enderror" placeholder="Enter Downpayment Value">
                                                @error('down_payment')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label for="balance" class="form-label">80% Balance</label>
                                                <input type="text" name="balance" id="balance" class="form-control @error('balance') is-invalid @enderror" placeholder="Enter Expected Balance">
                                                @error('balance')
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