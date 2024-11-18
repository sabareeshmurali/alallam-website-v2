<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="utf-8">
	<title>Agent-App | {{ $title ? $title : ''}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{ asset('public/default/favicon.png')}}">
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="{{ asset('public/theme/assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/theme/assets/css/app.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('public/default/izi/css/iziToast.css')}}">
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login" ng-controller="MyCntrlr" ng-app="MyApp" ng-init="reset()">
			<!-- BEGIN login-content -->
			<div class="login-content">
				<form ng-submit="loginAction()">
					<div class="text-center">
					<img src="{{ asset('public/default/logo.png')}}" class="text-center" width="50%;">
					</div>
					<div class="mb-3">
						<label class="form-label">Username <span class="text-danger">*</span></label>
						<input type="text" class="form-control form-control-lg bg-inverse bg-opacity-5" ng-model="Log.username" required oninvalid="this.setCustomValidity('Please Enter Username')" oninput="setCustomValidity('')">
					</div>
					<div class="mb-3">
						<div class="d-flex">
							<label class="form-label">Password <span class="text-danger">*</span></label>
						</div>
						<input type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" ng-model="Log.password" required oninvalid="this.setCustomValidity('Please Enter valid Password')" oninput="setCustomValidity('')">
					</div>
					<div class="mb-3">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="customCheck1">
							<label class="form-check-label" for="customCheck1">Remember me</label>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
	</div>
	<!-- END #app -->
	<script src="{{ asset('public/default/angular.min.js')}}"></script>
	<script src="{{ asset('public/default/angular-sanitize.min.js')}}"></script>
	<script src="{{ asset('public/default/custom.js')}}"></script>
	<script src="{{ asset('public/js/login/login.js')}}"></script>
	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('public/theme/assets/js/vendor.min.js')}}"></script>
	<script src="{{ asset('public/theme/assets/js/app.min.js')}}"></script>
	
	<script src="{{ asset('public/default/custom.js')}}"></script>
	<!-- ================== END core-js ================== -->
	<script src="{{asset('public/default/izi/js/iziToast.js')}}"></script>
	<script>Base_url='<?php echo url('/')?>';</script>
	<script src="{{asset('public/default/double-scroll.js')}}"></script>
</body>
</html>