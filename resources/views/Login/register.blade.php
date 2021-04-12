<!doctype html>
<html lang="en">
  <head>
  	<title>Kelongan.id | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ url('Login/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Create an Account</h3>
						<form action="{{url('/register_create')}}" class="login-form" method="post">
						{{ csrf_field() }}
                        <div class="form-group">
		      			    <input type="text" class="form-control rounded-left" name="email" placeholder="Email" required>
		      		    </div>
	                    <div class="form-group d-flex">
	                        <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
	                    </div>
						<div class="form-group d-flex">
	                        <input type="name" class="form-control rounded-left" name="name" placeholder="name" required>
	                    </div>
						<!-- <div class="form-group d-flex">
	                        <input type="text" class="form-control rounded-left" name="level" placeholder="Level" required>
	                    </div> -->
	                    <!-- <div class="form-group d-md-flex">
	            	        <div class="w-50">
	            		        <label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" checked>
									<span class="checkmark"></span>
								</label>
							</div>
						<div class="w-50 text-md-right">
						    <a href="#">Forgot Password</a>
						</div> -->
	            <!-- </div> -->
				<!-- <a href="" >Create an Account</a> -->
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Sign Up</button>
	            </div>
                <!-- <a href="{{url('/log in')}}" class="btn btn-success">Kembali</a> -->
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
