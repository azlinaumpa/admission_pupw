

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
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Admission</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/morris.js/morris.css" rel="stylesheet">
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href={{ URL::asset("../css/azia.css")}}>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/css" src='print.css' media="print" /></script>
    <style>
     @media print {
    
     .no-print{
        display : none !important;
              }
                  }
    </style>
    
  </head>
  @yield('head')

  <body class="az-body az-body-sidebar">
    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.html" class="az-logo">Admission</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="../img/faces/face1.jpg" alt=""></div>
        <div class="media-body">
          <h6>{{ Auth::user()->name }}</h6>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          @if(auth()->user()->role =='student')
          <li class="nav-item show">
            <a href="{{url('/dashboard')}}" class="nav-link"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            </li><!-- nav-item -->
          <li class="nav-item active show">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Application</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/personal')}}" class="nav-sub-link">Personal Information</a></li>
            </ul>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/parent')}}" class="nav-sub-link">Parent Information</a></li>
            </ul>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/academic')}}" class="nav-sub-link">Academic Information</a></li>
            </ul>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/document')}}" class="nav-sub-link">Document Information</a></li>
            </ul>
          </li><!-- nav-item -->
          @elseif(auth()->user()->role =='admin1')
          <li class="nav-item active show">
            <a href="{{url('/dashboard')}}" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard Admin</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/application')}}" class="nav-sub-link">List of Application</a></li>
            </ul><ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/application/index2')}}" class="nav-sub-link">List of Processed</a></li>
            </ul>
          </li><!-- nav-item -->
          @else
          <li class="nav-item active show">
            <a href="{{url('/dashboard')}}" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard Admin</a>
            <ul class="nav-sub">
              <li class="nav-sub-item"><a href="{{url('/regist')}}" class="nav-sub-link">Users</a></li>
            </ul>
          </li><!-- nav-item -->
          @endif
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->
  
    <div class="az-content az-content-dashboard-two">
      <div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-right">
        
           
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <div class="az-img-user">
                    <img src="../img/faces/face1.jpg" alt="">
                  </div><!-- az-img-user -->
                  <h6>{{ Auth::user()->name }}</h6>
                </div><!-- az-header-profile -->
                
                <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i><form method="POST" action="{{ route('logout') }}">
                  @csrf
              <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();
              this.closest('form').submit();">
              {{ __('Log Out') }}</a>
              </form></a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->
    
  
      <main class="content">
          @yield('content')
      </main>
  
      
      <div class="az-footer ht-40">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span>&copy; 2022 UMP Advanced SDN BHD</span>
        </div><!-- container -->
      </div><!-- az-footer -->
    </div><!-- az-content -->
  
  
  


    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../lib/raphael/raphael.min.js"></script>
    <script src="../lib/morris.js/morris.min.js"></script>
    <script src="../lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="../lib/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      function printInvoice()
     {
         printDiv = ".print"; // id of the div you want to print
         $("*").addClass("no-print");
         $(printDiv+" *").removeClass("no-print");
         $(printDiv).removeClass("no-print");
    
         parent =  $(printDiv).parent();
         while($(parent).length)
         {
             $(parent).removeClass("no-print");
             parent =  $(parent).parent();
         }
         window.print();
    
     }
</script>    
    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
    <script>
       //to show & hide element
    $("#seeAnotherField").change(function() {
      if ($(this).val() == "A") {
      $('#otherFieldDiv').show();
      $('#otherFieldDiv1').hide();
      //$('#otherField').attr('required', '');
      //$('#otherField').attr('data-error', 'This field is required.');
      } 
      if ($(this).val() == "S") {
      $('#otherFieldDiv1').show();
      $('#otherFieldDiv').hide();
      //$('#otherField').attr('required', '');
      //$('#otherField').attr('data-error', 'This field is required.');
      } 
      
    });
    $("#seeAnotherFieldGroup").trigger("change");
    
    $(function() {
      $('#aliran').change(function() {
        $('.A').toggle($(this).val() === 'A');
      }).change();
      $('#aliran').change(function() {
        $('.B').toggle($(this).val() === 'S');
      }).change();
    });
    </script>
  
    @yield('script')
  </body>
</html>
