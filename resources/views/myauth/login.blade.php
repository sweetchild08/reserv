<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{$title}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{url('login/css/core.min.css')}}" rel="stylesheet">
    <link href="{{url('login/css/app.min.css')}}" rel="stylesheet">
    <link href="{{url('login/css/style.min.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/images/favicon.ico">
    <link rel="icon" href="../assets/images/favicon.ico">
  </head>

  <body>


    <div class="row no-gutters min-h-fullscreen bg-white">
      <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-block bg-img" style="background-image: url(../assets/images/gallery/regs.png)" data-overlay="3">

      </div>



      <div class="col-md-6 col-lg-5 col-xl-4 align-self-center">
        <div class="px-80 py-30">
          <h2>Login</h2>
          <p><small>Sign into your account</small></p>
          <br>

          <form class="form-type-material" method="post" action="{{route('trylogin')}}">
		  	@csrf
            <x-auth-session-status class="mb-4" :status="session('status')" />
			
            <div class="form-group">
              <input type="email" class="form-control" name="email"  required>
              <label for="username">Email</label>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="form-group">
              <input type="password" class="form-control" name="password"  required>
              <label for="password">Password</label>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="form-group flexbox">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked>
                <label class="custom-control-label">Remember me</label>
              </div>
              
              <a class="text-muted hover-primary fs-13" href="{{url('forgot-password')}}">Forgot password?</a>
            </div>

            <div class="form-group">
              <button class="btn btn-bold btn-block btn-primary" type="submit">Login</button>
            </div>
            
          </form>

          <!-- <div class="divider">Or Sign In With</div>
          <div class="text-center">
            <a class="btn btn-square btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
            <a class="btn btn-square btn-google" href="#"><i class="fa fa-google"></i></a>
            <a class="btn btn-square btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
          </div> -->

          <hr class="w-30px">

          <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a class="text-primary fw-500" href="{{url('register')}}">Sign up</a><br/><a class="text-primary fw-500" href="{{url('/')}}">Back to Home</a></p>
		  
        </div>
      </div>
    </div>




    <!-- Scripts -->
	<script src="{{url('login/js/core.min.js')}}"></script>
    <script src="{{url('login/js/app.min.js')}}"></script>
    <script src="{{url('login/js/script.min.js')}}"></script>

	

  </body>
</html>

