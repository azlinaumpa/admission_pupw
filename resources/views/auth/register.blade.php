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

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="{{url('lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{url('lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <style>
body {
  background-image: url('img/header6.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
}
.az-column-signup {
  background-color: #fff;
  padding: 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  opacity: 80%;
 }
</style>
    <!-- azia CSS -->
    <link rel="stylesheet" href="{{url('css/azia.css')}}">

  </head>
    <body class="az-body">

    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <i class=""></i>
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <h1 class="az-logo"></h1><div align="center" ><img style="width:40%;" src="img/logo.png" ></div>
        <div class="az-signup-header">
          <h2>Sign Up</h2>
          <h4>Please sign up to create account</h4>

          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
              <label>Full Name (as per IC/Passport)</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
            </div><!-- form-group -->
            <div class="form-group">
              <label>IC Number (Example:12345678900)</label>
              <input type="number" class="form-control" name="password" placeholder="Enter IC number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" >
              
            </div><!-- form-group -->
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div><!-- form-group -->
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <button type="submit" class="btn btn-az-primary btn-block">{{ __('Register') }}</button>
           
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="{{ route('login') }}">Sign In</a></p>&nbsp;
          <p>For further assistance, please <a href="http://umpadvanced.ump.edu.my/contact" target="_blank"><b><u>contact us</u></b></a>, <strong>+6012 652 3001</strong></p>
          <p>For technical issue, please contact us <strong>+6014 654 9295</strong></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

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