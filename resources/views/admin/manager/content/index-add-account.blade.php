@extends('admin.manager.body.create-account')
@section('create-account-content')
<div class="page-content">
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Account</h4>
                    <form action="{{ route('store.admin.account') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Username">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-3">
										<div class="mb-3">
                                            <label class="form-label">Role</label>
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