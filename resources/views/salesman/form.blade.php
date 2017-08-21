@extends('template')

@section('section1')

    <div class="col s12 m12 l12" style="height:20px;"></div>

    <div class="col s12 m6 l6 offset-m3 offset-l3 form z-depth-5" style="padding:0px;">
      
      <div class='form-header pad-2'>
        <h2 class='thin font-light' align='center'>
          <span class="mdi mdi-account-plus"></span>
          <span class="main-heading">C</span><span class="sub-heading-2">lient</span>
        </h2>
      </div>  
      
      <div class="col s12 m12 l12">
        <form role="form" method="POST" action="{{ url('/register') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">  

          @include('partials/_errors')
            
          <div class="input-field col s6 m6 l6">
            <input id="name" type="text" class="validate" value="{{ old('first_name') }}" name="first_name">
            <label for="first_name" data-error="wrong" data-success="right">First Name</label>
          </div>
          
          <div class="input-field col s6 m6 l6">
            <input id="name" type="text" class="validate" value="{{ old('last_name') }}" name="last_name">
            <label for="last_name" data-error="wrong" data-success="right">Last Name</label>
          </div>

          <div class="input-field col s6 m6 l6">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">Phone #</label>
          </div>

          <div class="input-field col s3 m3 l3">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">House #</label>
          </div>

          <div class="input-field col s3 m3 l3">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">Street #</label>
          </div>

          <div class="input-field col s5 m5 l5">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">City</label>
          </div>

          <div class="input-field col s3 m3 l3">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">Postal Code</label>
          </div>

          <div class="input-field col s4 m4 l4">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">State</label>
          </div>

          <div class="input-field col s4 m4 l4">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">Country</label>
          </div>

          <div class="input-field col s4 m4 l4">
            <input id="email" type="text" class="validate" value="{{ old('username') }}" name="username">
            <label for="username" data-error="wrong" data-success="right">Email</label>
          </div>

          <div class="input-field col s4 m4 l4">
            <select name="language" required>
              <option value="" disabled selected>Select Language</option>
              <option value="English">English</option>
              <option value="German">German</option>
            </select>
          </div>

          <input type="hidden" name="status" value="Active">

          <div class="input-field col s6 m12 l6">
            <input id="icon_telephone" type="password" class="validate" name="password">
            <label for="icon_telephone">Password</label>
          </div>
          
          <div class="input-field col s6 m12 l6">
            <input id="icon_telephone" type="password" class="validate" name="password_confirmation">
            <label for="icon_telephone">Confirm Password</label>
          </div>

          <div class="input-field col s12 m12 l12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1">Comment</label>
          </div>
          
          <div class="col s12 m12 l12">
            <button type="submit" class="btn form-btn">
              <span class="mdi mdi-send"></span>&nbsp;Register
            </button>
          </div>
          
          <div class="col s12 m12 l12" style="height:15px;"></div>
        </form>
      </div> <!-- End container div -->      
    </div>
  

  <div class="hide-on-med-and-down" style='margin-top:230px;'></div>
@stop 