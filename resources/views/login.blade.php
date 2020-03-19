<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test Programming Prasastia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('assets/images/icons/favicon.ico"/')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-90 p-b-30">
				<form class="login100-form " method="POST" action="{{ route('login')}}">
                    {{ csrf_field() }}

					<span class="login100-form-title p-b-40">
						Halaman Masuk Akun
					</span>

					<div class="wrap-input100  m-b-16" >
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100  m-b-20" data-validate = "Please enter password">
						<span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
                    </div>
                    
                    <div class="flex-col-c p-t-40">
						<span class="txt2 p-b-10">
							Belum Punya Akun ?
						</span>

						<a href="{{ route('register')}}" class="txt3 bo1 hov1">
							Daftar Sekarang!
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{url('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{url('assets/js/main.js')}}"></script>

</body>
</html>