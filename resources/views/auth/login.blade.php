@extends('template')

@section('section1')
    <div class="col s12 m12 l12" style="height:20px;"></div>

    <div class="col s12 m4 l4 offset-m3 offset-l3 form z-depth-5" style="padding:0px;">
      
      <div class='form-header pad-2'>
        <h2 class='thin font-light' align='center'>
          <span class="mdi mdi-account-key"></span>
          <span class="main-heading">S</span><span class="sub-heading-2">ign_in</span>
        </h2>
      </div>  
      
      <div class="col s12 m12 l12">
        <form role="form" method="POST" action="{{ url('/login') }}">
            
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
          @include('partials/_errors')

          <div class="input-field col s12">
            <input id="email" type="text" class="validate" name="username" value="{{ old('username') }}">
            <label for="email" data-error="wrong" data-success="right">Username</label>
          </div>

          <div class="input-field col s12">
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
 
          <div class="col s6">
            <br>
            <button type="submit" class="btn form-btn">
              <span class="mdi mdi-send"></span>&nbsp;Login
            </button>
          </div>

          <div class="col s6">
            <p>
              <input type="checkbox" id="remember" name="remember" class="checkbox-custom" />
              <label for="remember">Remember Me</label>
            </p>
          </div>

          <!-- <div class="col s12 m12 l12">
            <br>
            <a class="" href="{{ url('/password/email') }}">Forgot Your Password ?</a>
          </div> -->
          <div class="col s12 m12 l12" style="height:15px;"></div>
        </form>
      </div> <!-- End container div -->      
    </div>
  

@stop