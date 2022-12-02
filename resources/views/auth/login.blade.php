
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>
    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <!-- <meta name="description" content="Responsive Bootstrap 4 Dashboard Template"> -->
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="{{url('lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <style>
    body {
      background-image: url('img/header4.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      
    }
    .az-card-signin {
      height: 560px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      opacity: 85%;
      justify-content: space-between;
      background-color: rgba(255, 255, 255, 0.98); }
      @media (min-width: 480px) {
        .az-card-signin {
          border: 1px solid #cdd4e0;
          width: 360px;
          padding: 30px 35px; } }
    </style>

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{url('css/azia.css')}}">

  </head>

  <body class="az-body">
    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <div align="center" ><img style="width:40%;" src="img/logo.png" ></div>
          <div class="az-signin-header">
          <h3>Masuk UMP Secara Terus <br><center>(MUST)</center></h3><br>
          <h4>Please sign in to continue</h4>
          <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter email" >
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" maxlength="12" name="password" placeholder="Enter IC number" >
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block" type="submit" name="submit">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
       
        <div class="az-signin-footer">
            @if (Route::has('register'))
                <p>Don't have an account yet? <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Sign Up</a></p>
            @endif
            {{-- @if (Route::has('register'))
          <p>Don't have an account yet? <a href="{{ route('register') }}">Sign Up</a></p>
          @endif --}}
        </div><!-- az-signin-footer -->
       
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="{{url('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('lib/ionicons/ionicons.js')}}"></script>


    <script src="js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
