<?php

use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
	<meta charset="utf-8">
	<title>eguester | {{ $title ? $title : ''}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{ asset('public/default/logo/logo-only-withbg.png')}}">
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('public/theme/assets/css/vendor.min.css')}}" rel="stylesheet">
	<link href="{{ asset('public/theme/assets/css/app.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/default/izi/css/iziToast.css')}}">
	<!-- ================== END core-css ================== -->

	<!-- ================== BEGIN page-css ================== -->
	<link href="{{ asset('public/theme/assets/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet">
	<!-- ================== END page-css ================== -->
	@if(isset($css_local))
	@foreach($css_local as $csslocal)
	<link rel="stylesheet" href="{{ asset($csslocal)}}">
	@endforeach
	@endif

</head>

<body>
	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">

			<!-- BEGIN desktop-toggler -->
			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- BEGIN desktop-toggler -->

			<!-- BEGIN mobile-toggler -->
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<!-- END mobile-toggler -->



			<!-- BEGIN brand -->
			<div class="brand">
				<a href="{{ route('admin.dash')}}" class="brand-logo">
					<span class="brand-img">
						<img src="{{ asset('public/default/logo/logo-only-withbg.png')}}" style="width:60%; margin:auto">
					</span>
					<span class="brand-text">EGUESTER</span>
				</a>
			</div>
			<!-- END brand -->

			<!-- BEGIN menu -->
			<div class="menu">
				<div class="menu-item dropdown">
					<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
						<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
					</a>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-grid-3x3-gap nav-icon"></i></div>
					</a>
					<div class="dropdown-menu fade dropdown-menu-end w-300px text-center p-0 mt-1">
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-envelope h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-inverse">INBOX</div>
								</a>
							</div>
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-hdd-network h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-inverse">POS SYSTEM</div>
								</a>
							</div>
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-calendar4 h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-inverse">CALENDAR</div>
								</a>
							</div>
						</div>
						<div class="row row-grid gx-0">
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-terminal h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-inverse">HELPER</div>
								</a>
							</div>
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div class="position-relative">
										<i class="bi bi-circle-fill position-absolute text-theme top-0 mt-n2 me-n2 fs-6px d-block text-center w-100"></i>
										<i class="bi bi-sliders h2 opacity-5 d-block my-1"></i>
									</div>
									<div class="fw-500 fs-10px text-inverse">SETTINGS</div>
								</a>
							</div>
							<div class="col-4">
								<a href="javascript:void(0)" class="dropdown-item text-decoration-none p-3 bg-none">
									<div><i class="bi bi-collection-play h2 opacity-5 d-block my-1"></i></div>
									<div class="fw-500 fs-10px text-inverse">WIDGETS</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
						<div class="menu-badge bg-theme"></div>
					</a>
					<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
						<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
						<div class="dropdown-divider mt-1"></div>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
							<div class="fs-20px">
								<i class="bi bi-bag text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-inverse">NEW ORDER RECEIVED ($1,299)</div>
								<div class="small text-inverse text-opacity-50">JUST NOW</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
							<div class="fs-20px w-20px">
								<i class="bi bi-person-circle text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-inverse">3 NEW ACCOUNT CREATED</div>
								<div class="small text-inverse text-opacity-50">2 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
							<div class="fs-20px w-20px">
								<i class="bi bi-gear text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-inverse">SETUP COMPLETED</div>
								<div class="small text-inverse text-opacity-50">3 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
							<div class="fs-20px w-20px">
								<i class="bi bi-grid text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-inverse">WIDGET INSTALLATION DONE</div>
								<div class="small text-inverse text-opacity-50">5 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
							<div class="fs-20px w-20px">
								<i class="bi bi-credit-card text-theme"></i>
							</div>
							<div class="flex-1 flex-wrap ps-3">
								<div class="mb-1 text-inverse">PAYMENT METHOD ENABLED</div>
								<div class="small text-inverse text-opacity-50">10 MINUTES AGO</div>
							</div>
							<div class="ps-2 fs-16px">
								<i class="bi bi-chevron-right"></i>
							</div>
						</a>
						<hr class="my-0">
						<div class="py-10px mb-n2 text-center">
							<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
						</div>
					</div>
				</div>
				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="{{ asset('public/theme/assets/img/user/profile.jpg')}}" alt="Profile" height="60">
						</div>
					
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
						<a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
						<a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="javascript:void(0)">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
					</div>
				</div>
			</div>
			<!-- END menu -->

			<!-- BEGIN menu-search -->
			<form class="menu-search" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control form-control-lg" placeholder="Search menu...">
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>
			<!-- END menu-search -->
		</div>
		<!-- END #header -->

		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-header">Navigation</div>
					<div class="menu-item">
						<a href="{{ route('admin.dash')}}" class="menu-link">
							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
							<span class="menu-text">Dashboard</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="{{ route('admin.contents')}}" class="menu-link">
							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
							<span class="menu-text">Edit Labels</span>
						</a>
					</div>
					<div class="menu-item">
						<a href="{{ route('admin.images')}}" class="menu-link">
							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
							<span class="menu-text">Change Images</span>
						</a>
					</div>
					<div class="menu-divider"></div>
					<div class="menu-item">
						<a href="{{ route('logout')}}" class="menu-link">
							<span class="menu-icon"><i class="fas fa-power-off"></i></span>
							<span class="menu-text">Logout</span>
						</a>
					</div>
				</div>
			</div>
			<!-- END scrollbar -->
		</div>
		<!-- END #sidebar -->

		<!-- BEGIN mobile-sidebar-backdrop -->
		<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
		<!-- END mobile-sidebar-backdrop -->

		@yield('content')
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('public/theme/assets/js/vendor.min.js')}}"></script>
	<script src="{{ asset('public/theme/assets/js/app.min.js')}}"></script>
	<!-- ================== END core-js ================== -->

	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('public/theme/assets/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
	{{-- <script src="{{ asset('public/theme/assets/plugins/jvectormap-content/world-mill.js')}}"></script> --}}
	<script src="{{ asset('public/theme/assets/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
	

	<!-- ================== END page-js ================== -->

	{{-- Master Refers  --}}
	<script src="{{ asset('public/default/angular.min.js')}}"></script>
	<script src="{{ asset('public/default/angular-sanitize.min.js')}}"></script>
	<script>
		Base_url = '<?php echo url('/') ?>';
	</script>
	<script src="{{ asset('public/default/custom.js')}}"></script>
	<script src="{{asset('public/default/izi/js/iziToast.js')}}"></script>
	<script src="{{asset('public/default/double-scroll.js')}}"></script>
	@if(isset($script_local))
	@foreach($script_local as $scriptlocal)
	<script src="{{ asset($scriptlocal)}}"></script>
	@endforeach
	@endif
	<script>

	</script>

	<style>
		.select2-container {
			max-width: 100px !important;
			padding: .375rem .75rem;
			position: relative;
		}

		.select2-selection.select2-selection--single {
			background: rgba(0, 0, 0, 0) !important;
			width: 100%;
		}

		.select2-selection__rendered {
			color: rgba(255, 255, 255, 0.75) !important;
		}

		.select2-selection__arrow {
			position: absolute;
			top: 7px !important;
			right: 10px !important;
		}

		.select2-results__options {
			color: #fff !important;
		}

		.select2-dropdown {
			width: 200px;
			background: #1d2835
		}

		.sortable {
			position: relative;
		}

		.sortable .fa-angle-double-down {
			position: absolute;
			bottom: 2px;
			right: 5px;
			font-size: 12px;
			font-weight: bold
		}

		.sortable .fa-angle-double-up {
			position: absolute;
			top: 2px;
			right: 5px;
			font-size: 12px;
			font-weight: bold
		}

		.imagetd {
			width: 200px;
		}

		.imagetd img {
			width: 100%;
			height: auto;
		}

		.mainTable thead th,
		.mainTable tbody td {
			width: 200px;
		}

		.sortable i.activeiclass {
			color: #0FFF50
		}

		.iziToast-wrapper-center {
			z-index: 9999 !important;
		}
	</style>
</body>

</html>