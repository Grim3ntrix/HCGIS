@extends('admin.staff.body.customer-account')
@section('customer-account-content')
<div class="page-content">
    <div class="row mb-3">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Create login credentials and use them for later login" data-feather="help-circle" class=""></i></span>Login Credentials</h4>
    <form action="{{ route('store.customer.account') }}" method="POST">
                        @csrf
                            <div class="row">
                                <input type="hidden" name="user_code" id="user_code" value="{{ $userCode }}">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="example@gmail.com" autocomplete="off">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" value="{{ old('password_confirmation') }}" autocomplete="off">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirm Password<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" autocomplete="off">
                                    </div>
                                </div>
                                <input type="hidden" name="role" id="role" value="customer">
                            </div><!-- Row -->
                        </div>
                    </div>
                </div>
            </div>
        <div class="row mb-3">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Create ledger personal information to ensure legitimate buyers" data-feather="help-circle" class=""></i></span>Ledger's Personal Information</h4>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Last Name<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="last_name" id="lastname" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Enter last name" autocomplete="off">
                                        @error('last_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">First Name<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="Enter first name" autocomplete="off">
                                        @error('first_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label for="middle_initial" class="form-label">M.I</label>
                                        <input type="text" name="middle_initial" id="middle_initial" class="form-control @error('middle_initial') is-invalid @enderror" value="{{ old('middle_initial') }}" placeholder="Enter M.I" autocomplete="off">
                                        @error('middle_initial')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label for="name_extension" class="form-label">Extension</label>
                                        <select name="name_extension" id="name_extension" value="{{ old('name_extension') }}" class="form-select mb-3">
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
                                        <label for="gender" class="form-label">Gender<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <select name="gender" id="gender" value="{{ old('gender') }}" class="form-select mb-3 @error('gender') is-invalid @enderror">
                                            <option value="N/A" selected="" disabled>Open this select menu</option>
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
                                        <label for="religion" class="form-label">Religion<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="religion" id="religion" class="form-control @error('religion') is-invalid @enderror" value="{{ old('religion') }}" placeholder="Enter religion" autocomplete="off">
                                        @error('religion')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="date_of_birth" class="form-label">Date of Birth<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{ old('date_of_birth') }}" placeholder="" autocomplete="off">
                                        @error('date_of_birth')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="mb-3">
                                        <label for="current_address" class="form-label">Current Address<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="current_address" id="current_address" value="{{ old('current_address') }}" class="form-control @error('current_address') is-invalid @enderror" placeholder="House No. / Street / Barangay / District / Municipality / Province" autocomplete="off">
                                        @error('current_address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->										
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="zip_code" class="form-label">Zip Code<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="zip_code" id="zip_code" class="form-control @error('zip_code') is-invalid @enderror" value="{{ old('zip_code') }}" placeholder="Enter zip code" autocomplete="off">
                                        @error('zip_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label for="marital_status" class="form-label">Marital Status<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <select name="marital_status" id="marital_status" class="form-select mb-3 @error('marital_status') is-invalid @enderror">
                                            <option value="N/A" selected="" disabled>Open this select menu</option>
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
                                        <input type="text" name="spouse" id="spouse" class="form-control" value="{{ old('spouse') }}" placeholder="If married, enter name of spouse" autocomplete="off">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="telephone" class="form-label">Telephone Number</label>
                                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{ old('telephone') }}" placeholder="Enter telephone number" autocomplete="off">
                                    </div>
                                </div><!-- Col -->										
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="phone_number" class="form-label">Phone Number<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter phone number" autocomplete="off">
                                        @error('phone_number')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </div>
                    </div>
                </div>
            </div>
        <button type="submit" class="btn btn-primary submit">Submit</button>
    </form>
</div>
@endsection