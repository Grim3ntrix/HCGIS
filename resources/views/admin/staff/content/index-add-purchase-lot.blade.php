@extends('admin.staff.body.add-purchase-lot')
@section('add-purchase-lot-content')
	<div class="page-content">
  		<div class="row">
			<div class="col-md-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title" style="margin-bottom: 20px;">Customer's Personal Information</h6>
									<form action="{{ route('staff.store.personalinfo.form') }}" method="POST">
										@csrf
										<input type="text" name="user_id" id="user_id" value="{{ $row->id }}">
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label for="lastname" class="form-label">Last Name</label>
													<input type="text" name="last_name" id="lastname" class="form-control" placeholder="Enter last name" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">First Name</label>
													<input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter first name" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-2">
												<div class="mb-3">
													<label class="form-label">Middle Initial</label>
													<input type="text" name="middle_initial" id="middle_initial" class="form-control" placeholder="Enter M.I" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-2">
												<div class="mb-3">
													<label class="form-label">Extension</label>
													<input type="text" name="name_extension" id="name_extension" class="form-control" placeholder="Jr./Sr.">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">																					
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Gender</label>
													<input type="text" name="gender" id="gender" class="form-control" placeholder="Enter gender" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Religion</label>
													<input type="text" name="religion" id="religion" class="form-control" placeholder="Enter religion" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Date of Birth</label>
													<input type="date" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="" required>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Current Address</label>
													<input type="text" name="current_address" id="current_address" class="form-control" placeholder="House No. / Street / Barangay / District / Municipality / Province" required>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Zip</label>
													<input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Enter zip code" required>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Marital Status</label>
													<input type="text" name="marital_status" id="marital_status" class="form-control" placeholder="Single / Married" required>
												</div>
											</div><!-- Col -->										
											<div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Spouse</label>
													<input type="text" name="spouse" id="spouse" class="form-control" placeholder="If married, enter name of spouse">
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
										<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Email</label>
													<input type="text" name="email_address" id="email_address" class="form-control" placeholder="Enter email address" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Tel.</label>
													<input type="text" name="telephone" id="telephone" class="form-control" placeholder="Enter telephone number">
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Phone</label>
													<input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter phone number" required>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Sales Counselor</label>
													<input type="text" name="sales_counselor" id="sales_counselor" class="form-control" placeholder="Enter sales counselor" required>
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Agency Manager</label>
													<input type="text" name="agency_manager" id="agency_manager" class="form-control" placeholder="Enter agency manager" required>
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