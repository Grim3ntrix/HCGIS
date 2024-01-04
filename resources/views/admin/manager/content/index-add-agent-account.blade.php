@extends('admin.manager.body.agent-account')
@section('agent-account-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title"><span style="padding-right:8px;"><i data-bs-toggle="tooltip" data-bs-placement="right" title="Create login credentials and use them for later login" data-feather="help-circle" class=""></i></span>Login Credentials</h4>
                    <form action="{{ route('store.agent.account') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                    <input type="hidden" name="user_code" id="user_code" value="{{ $userCode }}">
                                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Username" autocomplete="off">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" autocomplete="off">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" autocomplete="off">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
										<div class="mb-3">
                                            <label class="form-label">Role<span style="font-size:12px; color: #d9534f;"> <i>Required</i></span></label>
                                            <select name="role"class="form-select mb-3 @error('role') is-invalid @enderror">
                                                <option selected="">Open this select menu</option>
                                                <option value="manager">Manager</option>
                                                <option value="staff">Staff</option>
                                            </select>
                                            @error('role')
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