<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Holy Cross Garden Information System">
	<meta name="author" content="Capstone Project 2023@SLSU">
	<meta name="keywords" content="Holy Cross Garden Information System">

	<title>Create New Account | Holy Cross Garden </title>

  <!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  	<!-- End fonts -->
  	<script src="https://kit.fontawesome.com/07672f603e.js" crossorigin="anonymous"></script>

  
  	<!-- jQuery and Datatable Css-->
  	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">	
	<!-- End jQuery and Datatable Css-->

	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/vendors/core/core.css')}}">
	<!-- endinject -->
	
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('frontend/assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{asset('frontend/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" />

  <!-- Toaster -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

</head>
<body>
	<div class="main-wrapper">

			<!-- partial:partials/_sidebar.html -->
			@include('admin.manager.sidebar_manager')
		
			<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
      		@include('admin.body.header')
			<!-- partial -->

      		@yield('create-account-content')

			<!-- partial:partials/_footer.html -->
      		@include('admin.body.footer')
			<!-- partial -->
		
		</div>
	</div>
	
	<!-- core:js Conflict if core.js is not loaded first-->
	<script src="{{asset('frontend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!--Datatable js-->
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<!--Datatable js-->

	<!--Perfect Scrollbar js CDN-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
	<!--End Perfect Scrollbar js CDN-->

	<!--Start diffForHumans js CDN ex. 1 minute ago-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
	<!--End diffForHumans js CDN ex. 1 minute ago-->

	<!-- Toaster JS -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		@if(Session::has('message'))
		var type = "{{ Session::get('alert-type','info') }}"
		switch(type){
			case 'info':
			toastr.info(" {{ Session::get('message') }} ");
			break;

			case 'success':
			toastr.success(" {{ Session::get('message') }} ");
			break;

			case 'warning':
			toastr.warning(" {{ Session::get('message') }} ");
			break;

			case 'error':
			toastr.error(" {{ Session::get('message') }} ");
			break; 
		}
		@endif 
	</script>	
	<!-- endtoaster -->

	<!-- SweetAlert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="{{asset('frontend/assets/js/code/sweetalert.js')}}"></script>
	<!-- SweetAlert -->

	<!-- Installment Interest JS -->
	<script src="{{asset('frontend/assets/js/code/installment-interest.js')}}"></script>
	<!-- Installment Interest JS -->

	<!-- DownPayment-Rate-Calculation -->
	<script src="{{asset('frontend/assets/js/code/downpayment-rate.js')}}"></script>
	<!-- DownPayment-Rate-Calculation -->

	<!-- Plugin js for this page -->
  	<script src="{{asset('frontend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  	<script src="{{asset('frontend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('frontend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('frontend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{asset('frontend/assets/js/dashboard-dark.js')}}"></script>
	<!-- End custom js for this page -->

</body>
</html>