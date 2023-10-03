@extends('admin.staff.body.add-product-detail-of-purchase')
@section('add-product-detail-of-purchase-content')
<div class="page-content">
  		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title" style="margin-bottom: 20px;">Product Details of Purchase</h6>
									<form>
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
													<label class="form-label">List Price (Contract)</label>
													<input type="text" class="form-control" placeholder="Php" disabled>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">At - Need Price</label>
													<input type="text" class="form-control" placeholder="Php" disabled>
												</div>
											</div><!-- Col -->
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
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Pre-Need Amount (Spot Cash)</label>
													<input type="text" class="form-control" placeholder="Php" disabled>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Discount Rate</label>
													<select class="form-select mb-3">
														<option selected="">Open this select menu</option>
														<option value="1">10%</option>
														<option value="2" disabled>20%</option>
														<option value="3" disabled>30%</option>
													</select>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Pre-Need Amount (Installment) </label>
													<input type="text" class="form-control" placeholder="Php" disabled>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-3">
												<div class="mb-3">
													<label class="form-label">Term</label>
													<select class="form-select mb-3">
														<option selected="">- Please select-</option>
														<option value="1">1 yr. / 12 mos.</option>
														<option value="2">2 yrs./ 24 mos.</option>
														<option value="3">3 yrs./ 36 mos.</option>
														<option value="2">4 yrs./ 48 mos.</option>
														<option value="3">5 yrs./ 60 mos.</option>
													</select>
												</div>
											</div><!-- Col -->
											<div class="col-sm-3">
												<div class="mb-3">
													<label class="form-label">Interest Rate</label>
													<input type="text" class="form-control" placeholder="" disabled>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Down Payment (Amount)</label>
													<input type="text" class="form-control" placeholder="Php" disabled>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-3">
												<div class="mb-3">
													<label class="form-label">DP Rate</label>
													<select class="form-select mb-3">
														<option selected="">- Please select-</option>
														<option value="1" disabled>10%</option>
														<option value="2">20%</option>
													</select>
												</div>
											</div><!-- Col -->
											<div class="col-sm-3">
												<div class="mb-3">
													<label class="form-label">Outstanding Balance</label>
													<input type="text" class="form-control" value="Hello World!" placeholder="" disabled>
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