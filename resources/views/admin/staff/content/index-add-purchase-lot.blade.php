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
													<input type="text" name="last_name" id="lastname" class="form-control @error('last_name') is-invalid @enderror" placeholder="Enter last name">
													@error('last_name')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">First Name</label>
													<input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Enter first name">
													@error('first_name')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-2">
												<div class="mb-3">
													<label class="form-label">Middle Initial</label>
													<input type="text" name="middle_initial" id="middle_initial" class="form-control @error('middle_initial') is-invalid @enderror" placeholder="Enter M.I">
													@error('middle_initial')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-2">
												<div class="mb-3">
													<label class="form-label">Extension</label>
													<select name="name_extension" id="name_extension" class="form-select mb-3">
														<option value="N/A">Select</option>
														<option value="Jr">Jr.</option>
														<option value="Sr">Sr.</option>
														<option value="I">I</option>
														<option value="II">II</option>
														<option value="III">III</option>
														<option value="II">IV</option>
														<option value="III">V</option>
														<option value="The">VI</option>
													</select>
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">																					
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Gender</label>
													<select name="gender" id="gender" class="form-select mb-3 @error('gender') is-invalid @enderror">
														<option selected="">Open this select menu</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
													@error('gender')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Religion</label>
													<input type="text" name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" placeholder="Enter religion">
													@error('religion')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Date of Birth</label>
													<input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="">
													@error('date_of_birth')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-8">
												<div class="mb-3">
													<label class="form-label">Current Address</label>
													<input type="text" name="current_address" id="current_address" class="form-control @error('current_address') is-invalid @enderror" placeholder="House No. / Street / Barangay / District / Municipality / Province">
													@error('current_address')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->										
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Zip</label>
													<input type="text" name="zip_code" id="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter zip code">
													@error('zip_code')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-4">
												<div class="mb-3">
													<label class="form-label">Marital Status</label>
													<select name="marital_status" id="marital_status" class="form-select mb-3 @error('marital_status') is-invalid @enderror">
														<option selected="">Open this select menu</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>
														<option value="Widow/Widower">Widow/Widower</option>
														<option value="Separa
														ted">Separated</option>
													</select>
													@error('marital_status')
														<span class="text-danger">{{ $message }}</span>
													@enderror
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
													<input type="text" name="email_address" id="email_address" class="form-control @error('email_address') is-invalid @enderror" placeholder="Enter email address">
													@error('email_address')
														<span class="text-danger">{{ $message }}</span>
													@enderror
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
													<input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter phone number">
													@error('phone_number')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
										</div><!-- Row -->
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Sales Counselor</label>
													<input type="text" name="sales_counselor" id="sales_counselor" class="form-control @error('sales_counselor') is-invalid @enderror" placeholder="Enter sales counselor">
													@error('sales_counselor')
														<span class="text-danger">{{ $message }}</span>
													@enderror
												</div>
											</div><!-- Col -->
											<div class="col-sm-6">
												<div class="mb-3">
													<label class="form-label">Agency Manager</label>
													<input type="text" name="agency_manager" id="agency_manager" class="form-control @error('agency_manager') is-invalid @enderror" placeholder="Enter agency manager">
													@error('agency_manager')
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