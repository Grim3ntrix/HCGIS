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
							<input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
							<div class="row">
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="lastname" class="form-label">Last Name</label>
										<input type="text" name="last_name" id="lastname" value="{{ optional($user->personalInformation)->last_name }}" class="form-control @error('last_name') is-invalid @enderror" placeholder="Enter last name" autocomplete="on">
										@error('last_name')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="first_name" class="form-label">First Name</label>
										<input type="text" name="first_name" id="first_name" value="{{ optional($user->personalInformation)->first_name }}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Enter first name" autocomplete="on">
										@error('first_name')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-2">
									<div class="mb-3">
										<label for="middle_initial" class="form-label">Middle Initial</label>
										<input type="text" name="middle_initial" id="middle_initial" value="{{ optional($user->personalInformation)->middle_initial }}" class="form-control @error('middle_initial') is-invalid @enderror" placeholder="Enter M.I" autocomplete="on">
										@error('middle_initial')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-2">
									<div class="mb-3">
										<label for="name_extension" class="form-label">Extension</label>
										<select name="name_extension" id="name_extension" class="form-select mb-3">
											<option value="N/A" selected="">None</option>
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
										<label for="gender" class="form-label">Gender</label>
										<select name="gender" id="gender" class="form-select mb-3 @error('gender') is-invalid @enderror">
											<option value="N/A" selected="">Open this select menu</option>
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
										<label for="religion" class="form-label">Religion</label>
										<input type="text" name="religion" id="religion" value="{{ optional($user->personalInformation)->religion }}" class="form-control @error('religion') is-invalid @enderror" placeholder="Enter religion" autocomplete="on">
										@error('religion')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="date_of_birth" class="form-label">Date of Birth</label>
										<input type="date" name="date_of_birth" id="date_of_birth" value="{{ optional($user->personalInformation)->date_of_birth }}" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="" autocomplete="on">
										@error('date_of_birth')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
							</div><!-- Row -->
							<div class="row">
								<div class="col-sm-8">
									<div class="mb-3">
										<label for="current_address" class="form-label">Current Address</label>
										<input type="text" name="current_address" id="current_address" value="{{ optional($user->personalInformation)->current_address }}" class="form-control @error('current_address') is-invalid @enderror" placeholder="House No. / Street / Barangay / District / Municipality / Province" autocomplete="on">
										@error('current_address')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->										
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="zip_code" class="form-label">Zip Code</label>
										<input type="text" name="zip_code" id="zip_code" value="{{ optional($user->personalInformation)->zip_code }}" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter zip code" autocomplete="on">
										@error('zip_code')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
							</div><!-- Row -->
							<div class="row">
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="marital_status" class="form-label">Marital Status</label>
										<select name="marital_status" id="marital_status" class="form-select mb-3 @error('marital_status') is-invalid @enderror">
											<option value="N/A" selected="">Open this select menu</option>
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
										<label for="current_address" class="form-label">Spouse</label>
										<input type="text" name="spouse" id="spouse" value="{{ optional($user->personalInformation)->spouse }}" class="form-control" placeholder="If married, enter name of spouse" autocomplete="on">
									</div>
								</div><!-- Col -->
							</div><!-- Row -->
							<div class="row">
							<div class="col-sm-4">
									<div class="mb-3">
										<label for="email_address" class="form-label">Email</label>
										<input type="text" name="email_address" id="email_address" value="{{ optional($user->personalInformation)->email_address }}" class="form-control @error('email_address') is-invalid @enderror" placeholder="Enter email address" autocomplete="on">
										@error('email_address')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="telephone" class="form-label">Telephone Number</label>
										<input type="text" name="telephone" id="telephone" value="{{ optional($user->personalInformation)->telephone }}" class="form-control" placeholder="Enter telephone number" autocomplete="on">
									</div>
								</div><!-- Col -->										
								<div class="col-sm-4">
									<div class="mb-3">
										<label for="phone_number" class="form-label">Phone Number</label>
										<input type="text" name="phone_number" id="phone_number" value="{{ optional($user->personalInformation)->phone_number }}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter phone number" autocomplete="on">
										@error('phone_number')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
							</div><!-- Row -->
							<div class="row">
								<div class="col-sm-6">
									<div class="mb-3">
										<label for="sales_counselor" class="form-label">Sales Counselor</label>
										<input type="text" name="sales_counselor" id="sales_counselor" value="{{ optional($user->personalInformation)->sales_counselor }}" class="form-control @error('sales_counselor') is-invalid @enderror" placeholder="Enter sales counselor" autocomplete="on">
										@error('sales_counselor')
											<span class="text-danger">{{ $message }}</span>
										@enderror
									</div>
								</div><!-- Col -->
								<div class="col-sm-6">
									<div class="mb-3">
										<label for="agency_manager" class="form-label">Agency Manager</label>
										<input type="text" name="agency_manager" id="agency_manager" value="{{ optional($user->personalInformation)->agency_manager }}" class="form-control @error('agency_manager') is-invalid @enderror" placeholder="Enter agency manager" autocomplete="on">
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
	<script>
		$(document).ready(function() {
    // Your code here
});
	</script>
@endsection