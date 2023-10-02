@extends('admin.staff.body.add-purchase-lot')
@section('add-purchase-lot-content')
	<div class="page-content">
  		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title" style="margin-bottom: 20px;">Customer's Personal Information</h6>
									<form>
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Enter last name">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="Enter first name">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Middle Name</label>
													<input type="text" class="form-control" placeholder="Enter middle name">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">																					
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Gender</label>
													<input type="text" class="form-control" placeholder="Enter gender">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Religion</label>
													<input type="text" class="form-control" placeholder="Enter religion">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Date of Birth</label>
													<input type="date" class="form-control" placeholder="">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Current Address</label>
													<input type="text" class="form-control" placeholder="House No. / Street / Barangay / District / Municipality / Province">
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Zip</label>
													<input type="text" class="form-control" placeholder="Enter zip code">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Marital Status</label>
													<input type="text" class="form-control" placeholder="Single / Married">
												</div>
											</div><!-- Col -->										
											<div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Spouse</label>
													<input type="text" class="form-control" placeholder="If married, enter name of spouse">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
										<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input type="text" class="form-control" placeholder="Enter email address">
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Tel</label>
													<input type="text" class="form-control" placeholder="Enter telephone number">
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Phone</label>
													<input type="text" class="form-control" placeholder="Enter phone number">
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