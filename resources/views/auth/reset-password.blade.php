<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('authen/css/style.css') }}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('authen/images/bg.jpg)')}};">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Reset Password</h2>	
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"></h3>

		    <form class="signin-form" method="POST" action="{{ route('password.store') }}">
        		@csrf
				<input type="hidden" name="token" value="{{ $request->route('token') }}">

		      		

					<div class="form-group">
		      			<input type="text" name="email" class="form-control" placeholder="Email" value="{{$request->email}}">
		      		</div>

	            <div class="form-group">
	              <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" toggle-password></span>
	            </div>

				<div class="form-group">
	              <input id="password" type="password" name="password_confirmation" class="form-control" placeholder="Comfirm Password" required>
	              <span toggle="#password-field" toggle-password></span>
	            </div>
				<x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Reset your Password</button>
	            </div>

	            <div class="form-group d-md-flex">
	            
	            </div>
	        </form>
	          
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('authen/js/jquery.min.js') }}"></script>
  <script src="{{ asset('authen/js/popper.js') }}"></script>
  <script src="{{ asset('authen/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('authen/js/main.js') }}"></script>

	</body>
</html>