<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>@yield('title') | Kuisoner</title>
		<!-- plugins:css -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}" />
		<!-- endinject -->
		<!-- Plugin css for this page -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
		{{-- <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" /> --}}
		<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}" />
		{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}" /> --}}
		<!-- End plugin css for this page -->
		<!-- inject:css -->
		<link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}" />
		<!-- endinject -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" />
		<style>
			.sidebar{
				width: auto !important;
			}
			.sidebar .nav .nav-item:active, .sidebar .nav .nav-item:hover{
				color: white !important;
			}
		</style>
		<x-head.tinymce-config/>
        @yield('additional')
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
            @include('partials.navbar')
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_settings-panel.html -->
                @include('partials.settings-panel')
				<!-- partial -->
				<!-- partial:partials/_sidebar.html -->
                @include('partials.sidebar')
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">
                        @yield('content')
					</div>
					<!-- content-wrapper ends -->
					<!-- partial:partials/_footer.html -->
                    @include('partials.footer')
					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->

		<!-- plugins:js -->
		<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<!-- endinject -->
		<!-- Plugin js for this page -->
		<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
		<script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>

		<!-- End plugin js for this page -->
		<!-- inject:js -->
		<script src="{{ asset('assets/js/off-canvas.js')}}"></script>
		<script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>
		<script src="{{ asset('assets/js/template.js')}}"></script>
		<script src="{{ asset('assets/js/settings.js')}}"></script>
		<script src="{{ asset('assets/js/todolist.js')}}"></script>
		<!-- endinject -->
		<!-- Custom js for this page-->
		<script src="{{ asset('assets/js/dashboard.js')}}"></script>
		<script src="{{ asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
		<!-- End custom js for this page-->
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
        @yield('script')
	</body>
</html>
