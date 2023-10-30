@extends('admin.staff.body.add-product-detail-of-purchase')
@section('add-product-detail-of-purchase-content')
<div class="page-content">
  		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title" style="margin-bottom: 20px;">Purchase Details</h6>
							<form action="{{ route('staff.store.productdetail.form') }}" method="POST">
								@csrf
								
								<div class="row">
									<div class="col-sm-3">
										<div class="mb-3">
											<label class="form-label">Lot No.</label>
											<input type="text" class="form-control" placeholder="Enter lot no.">
										</div>
									</div><!-- Col -->
									<div class="col-sm-3">
										<div class="mb-3">
											<label class="form-label">Customer No.</label>
											<input type="text" class="form-control" placeholder="">
										</div>
									</div><!-- Col -->
									<div class="col-sm-3">
										<div class="mb-3">
											<label class="form-label">Reservation Date</label>
											<input type="date" class="form-control" placeholder="">
										</div>
									</div><!-- Col -->
									<div class="col-sm-3">
										<div class="mb-3">
											<label class="form-label">Contract Date</label>
											<input type="date" class="form-control" placeholder="">
										</div>
									</div><!-- Col -->
								</div><!-- Row -->
								<div class="row">																					
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label">Product Type</label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">Lawn Lot (1x2.44mm)</option>
												<option value="2">Garden Lot-Twin Lot (2x2.44mm,4.88sqm,double tiered)</option>
												<option value="3">Garden Lot-Triple Lot (3x2.44mm,7.32sqm,double tiered)</option>
											</select>
										</div>
									</div><!-- Col -->
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label">Product Category</label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">Regular</option>
												<option value="2">Prime</option>
												<option value="3">Super Prime</option>
											</select>
										</div>
									</div><!-- Col -->
								</div><!-- Row -->
								<div class="row">																					
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">Down Payment</label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">No down paymemt</option>
												<option value="2">With down paymemt</option>
											</select>
										</div>
									</div><!-- Col -->
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">DP %</label>
											<input type="text" class="form-control" placeholder="0.00%">
										</div>
									</div><!-- Col -->
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">Down Payment Amount</label>
											<input type="text" class="form-control" placeholder="00.00">
										</div>
									</div><!-- Col -->									
								</div><!-- Row -->
								<div class="row">																					
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">Price Mode</label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">At-Need</option>
												<option value="2">Pre-Need (Spot Cash)</option>
												<option value="3">Pre-Need (Installment)</option>
											</select>
										</div>
									</div><!-- Col -->
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">Discount %</label>
											<input type="text" class="form-control" placeholder="0.00%">
										</div>
									</div><!-- Col -->							
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">Discount Amount</label>
											<input type="text" class="form-control" placeholder="00.00">
										</div>
									</div><!-- Col -->
								</div><!-- Row -->
								
								<div class="row">
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">List Price (Spot Cash)</label>
											<input type="text" class="form-control" placeholder="Php" disabled>
										</div>
									</div><!-- Col -->	
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">List Price (Contract)</label>
											<input type="text" class="form-control" placeholder="Php" disabled>
										</div>
									</div><!-- Col -->										
									<div class="col-sm-4">
										<div class="mb-3">
											<label class="form-label">List Price (At-Need)</label>
											<input type="text" class="form-control" placeholder="Php" disabled>
										</div>
									</div><!-- Col -->
									<div class="col-sm-12">
										<div class="mb-3">
											<label class="form-label">Outstanding Balance</label>
											<input type="text" class="form-control" placeholder="Php" disabled>
										</div>
									</div><!-- Col -->
								</div><!-- Row -->
								<hr>
								<h6 class="card-title" style="margin-top: 20px; margin-bottom: 20px;">Pre-Need (Installment) Details</h6>
								<div class="row">																					
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label">Installment Term</label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">Lawn Lot (1x2.44mm)</option>
												<option value="2">Garden Lot-Twin Lot (2x2.44mm,4.88sqm,double tiered)</option>
												<option value="3">Garden Lot-Triple Lot (3x2.44mm,7.32sqm,double tiered)</option>
											</select>
										</div>
									</div><!-- Col -->
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label">Interest Rate </label>
											<select class="form-select mb-3">
												<option selected="">Open this select menu</option>
												<option value="1">Regular</option>
												<option value="2">Prime</option>
												<option value="3">Super Prime</option>
											</select>
										</div>
									</div><!-- Col -->
									<div class="col-sm-12">
										<div class="mb-3">
											<label class="form-label">Monthly Payment</label>
											<input type="text" class="form-control" placeholder="Php" disabled>
										</div>
									</div><!-- Col -->
								</div><!-- Row -->
							</form>
						<button type="button" class="btn btn-primary submit">Submit</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection