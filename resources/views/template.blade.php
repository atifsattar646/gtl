<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name') }}</title>
    
      <link rel="icon" type="image/png" href="{{ URL::asset('materialize/img/favicon/fav.png') }}">
      <link rel="stylesheet" href="{{ URL::asset('css/materialize.min.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/materialdesignicons.min.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}" />
    </head>

    <body>
      
      <div id="pre_splash" class="center-align">
        <div style="margin-top:30%;">  
          <!-- <img src="{{ URL::asset('img/spinner.gif') }}"> -->
          <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-green-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
          <span class="thin" style="font-size:60px;">&nbsp;&nbsp;L</span>
          <span style="font-size:20px;">oading</span>
          <span class="thin" style="font-size:40px;">&nbsp;V</span>
          <span  style="font-size:20px;">iew</span>
        </div>  
      </div>

      <div id="post_splash" style="display:none;">
      <!-- Navbar section -->
      <nav class="navbar z-depth-5">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo center">
            <span class="thin">
              G<span style="font-size:11px;">lobe</span>
              T<span style="font-size:11px;">ele</span>
              L<span style="font-size:11px;">ink</span>
            </span>
          </a>

          <ul id="nav-mobile" class="left">
            <a href="#" data-activates="slide-out" class="button-collapse show-on-large">
              <span class="mdi mdi-menu"></span>
            </a>
            @include('partials/_side_nav')
          </ul>
          
          <ul class="right hide-on-med-and-down">
            @if (Auth::guest())
              <li>
                <a href="{{ route('login') }}"><span class="mdi mdi-account-key" style="font-size:25px;"></span></a>
              </li>
              <li>
                <a href="{{ route('register') }}"><span class="mdi mdi-account-plus" style="font-size:25px;"></span></a>
              </li>
            @else
              <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    <span class="mdi mdi-logout" style="font-size:25px;"></span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
              <li style="background-color:#3F728C;">
                <a href="">
                  <span class="mdi mdi-account" style="font-size:18px;">
                    {{ Auth::user()->first_name }}
                  </span>
                </a>
              </li>
              <li>
                <a href="{{ route('dashboard') }}">
                  <span class="mdi mdi-view-dashboard"></span>
                </a>
              </li>
            @endif 
          </ul>
        </div>
      </nav>

        @if(session()->has('message.level'))
          @if(session('message.level')=='success') 
            <div class="w3-green" style="padding:1%;" id="flash_message">
              <span class="mdi mdi-close-box" onclick="close_me('flash_message')" style="float:right;color:black;font-size:30px;"></span>
              <p>{!! session('message.content') !!}</p>
            </div>
          @elseif(session('message.level')=='warning')
            <div class="w3-orange" style="padding:1%;" id="flash_message">
              <span class="mdi mdi-close-box" onclick="close_me('flash_message')" style="float:right;color:black;font-size:30px;"></span>
              <p>{!! session('message.content') !!}</p>
            </div>
          @elseif(session('message.level')=='error')
            <div class="w3-red" style="padding:1%;" id="flash_message">
              <span class="mdi mdi-close-box" onclick="close_me('flash_message')" style="float:right;color:black;font-size:30px;"></span>
              <p>{!! session('message.content') !!}</p>
            </div>
          @endif
        @endif

        
          <div class="row">
            <div class="col s12 m12 l12">
              @yield('section1')
            </div>
          </div>
        </div> <!-- End Container -->
        
        <!-- Scripts Section -->    
        <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/materialize.min.js') }}"></script>
        <script src="{{ URL::asset('js/custom.js') }}"></script>

        <script type="text/javascript">
          $(window).on('load',function(){
  
            $('#pre_splash').css('display','none');
            $('#post_splash').slideDown('slow');

            $(".button-collapse").sideNav();
  
            $(".message").delay(2000).slideUp(1000);

            $(".materialboxed").materialbox();

            $('select').material_select();

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd' // set the format of date-picker
            });

            $('.modal').modal();
          });
        </script>

        <!-- For page wise scripts -->
        @yield('page_scripts')
    </body>
</html>


