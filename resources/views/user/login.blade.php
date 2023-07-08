<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Katalog | {{ $title }}</title>
	<link rel="icon" type="image/png" href="{{ asset('image/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="particles-js"></div>
<body class="login">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo">
				<i class="fa fa-sign-in"></i>
			</div>
			@if (session('status') === 'success')
      <div class="success-box">
          <div class="alert alert-success">
              Congratulations. Anda telah berhasil melakukan pendaftaran akun
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
      @elseif (session('status') === 'error')
          <div class="error-box">
              <div class="alert alert-warning">
                  Error, please retry. Pendaftaran akun gagal
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
      @endif
			<div class="welcome"><strong>Welcome,</strong> JOGJA PART AC</div>
			<form action="/login" method="POST" class="form-horizontal login-form">
				@csrf
				<div class="form-group relative">
					<input name="username" id="username" class="form-control input-lg" type="text" placeholder="Username" required>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group relative password">
					<input name="password" id="password" class="form-control input-lg" type="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
				</div>
				@if(session('status'))
					<div class="alert alert-danger">{{ session('status') }}</div>
				@endif
			</form>			
		</div>
    

	</div>

	<script src='{{ asset('style/script.js') }}'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>

</body>
</html>