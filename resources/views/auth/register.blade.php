<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Register a new account | Holy Cross Garden</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" />
  <style type="text/css">
    .authsignup-side-wrapper{
      width: 100%;
      height: 100%;
      background-image: url( {{ asset('upload/login.png')}} );
    }
  </style>
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">
				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="authsignup-side-wrapper">
                    </div>
                      </div>
                        <div class="col-md-8 ps-md-0">
                          <div class="auth-form-wrapper px-4 py-5">
                            <a href="#" class="noble-ui-logo logo-light d-block mb-2">HolyCross<span>Garden</span></a>
                            <h5 class="text-muted fw-normal mb-4">Create a new account.</h5>
                            <form method="POST" action="{{ route('register') }}" class="forms-sample">
                              @csrf
                                <div class="row">
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="email" class="form-label">Name</label>
                                          <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autocomplete="name" placeholder="Enter Name">
                                          <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                      </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="email" class="form-label">Email address</label>
                                          <input type="email" class="form-control" id="email" name="email" :value="old('email')" placeholder="Enter Email" required autocomplete="email">
                                          <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                      </div>
                                  </div><!-- Col -->                               
                                </div><!-- Row -->
                                <div class="row">
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="password" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password-password" placeholder="Enter Password">
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="password_confirmation" class="form-label">Confirm Password</label>
                                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                                          <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                                      </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->
                                <div class="row">                               
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="address" class="form-label">Address</label>
                                          <input type="address" class="form-control" id="address" name="address" required autocomplete="address" placeholder="Enter Address">
                                          <x-input-error :messages="$errors->get('address')" class="mt-2" />
                                      </div>
                                  </div><!-- Col -->
                                  <div class="col-sm-6">
                                      <div class="mb-3">
                                          <label for="phone" class="form-label">Phone</label>
                                          <input type="phone" class="form-control" id="phone" name="phone" required autocomplete="new-password" placeholder="Enter Phone Number">
                                          <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                                      </div>
                                  </div><!-- Col -->
                                </div><!-- Row -->

                                <div class="form-check mb-3">
                                  <input type="checkbox" class="form-check-input" id="authCheck">
                                  <label class="form-check-label" for="authCheck">
                                  Remember me
                                  </label>
                                </div>
                                <div>
                                  <button type="submit" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                                  {{ __('Register') }}
                                  </button>
                                </div>
                                <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>                         
                            </form>
                        </div>
                    </div>
                </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </div>
	</div>
	<!-- core:js -->
	<script src="{{ asset('frontend/assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('frontend/assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>