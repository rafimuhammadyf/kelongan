<!DOCTYPE html> 
<html lang="en">
  <head>
  	<title>Kelongan.id | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('Login/css/style.css') }}">
	
	<style type="text/css">
		body{
			background-color: #f4f4f4;
		}
		#biru-bg{
			background-color: #005d68 !important;
		}
		#biru-txt, .checkbox-primary input:checked ~ .checkmark:after {
			color: #005d68 !important;
		}
	</style>

	</head>
	<body>
		@if(Session::has('pesan'))
	<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('pesan') }}</p>
	@endif

	<section class="ftco-section">
	
	<!-- @if(Session::has('pesan'))
	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('pesan') }}</p>
	@endif -->
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center" id="biru-bg">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4" id="biru-txt">Sudah punya akun?</h3>
						<form action="{{url('log in/cek')}}" class="login-form" method="post">
						{{ csrf_field() }}
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" name="email" placeholder="Email" required autocomplete="off">
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label class="checkbox-wrap checkbox-primary" id="biru-txt">Ingat saya
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="{{url('/register')}}" id="biru-txt">Daftar</a>
								</div>
	            </div>
				<!-- <a href="" >Create an Account</a> -->
	            <div class="form-group">
	            	<button type="submit" id="biru-bg" class="btn btn-primary rounded submit p-3 px-5">Masuk</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ url('Login/js/jquery.min.js') }}"></script>
  	<script src="{{ url('Login/js/popper.js') }}"></script>
  	<script src="{{ url('Login/js/bootstrap.min.js') }}"></script>
  	<script src="{{ url('Login/js/main.js') }}"></script>

	</body>
</html>