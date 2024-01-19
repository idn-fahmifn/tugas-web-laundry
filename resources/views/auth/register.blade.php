<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ config('app.name') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('auth_asset/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('auth_asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178"  method="POST" action="{{ route('register') }}">
                    @csrf
					<span class="login100-form-title">
						Laudry Web Based System
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your name">
						<input class="input100" type="text" name="name" placeholder="name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Please re-enter password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Password Verify">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn p-t-13 p-b-23">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-5">
							You have an account?
						</span>

						<a href="/login" class="txt3">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('auth_asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('auth_asset/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('auth_asset/js/main.js')}}"></script>

</body>
</html>