@extends('masterView')

@section('section2')
  <div class='row' style='margin-top:20px;'>
    <div class="col s12 m6 l6 offset-m3 offset-l3" style='border:1px solid grey;'>
      
      <div class='' style='padding:2%;'>
        <h1 class='thin' align='center'>Reset Password</h1>
      </div>  
      
      <div style="padding:20px;">
        <form role="form" method="POST" action="{{ url('/password/email') }}">
            
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="row">
            @if (session('status'))
              <div class="w3-green" style='padding:2%;color:white;'>
                {{ session('status') }}
              </div>
            @endif
          </div>

          <div class="row">
            @if (count($errors) > 0)
              <div class="w3-red" style='padding:2%;color:white;'>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
              <label for="email" data-error="wrong" data-success="right" value="{{ old('email') }}">Email Address</label>
            </div>
          </div>

          <div class="row">   <!-- Gender Selection -->

            <div class="col s12 m12 l12">
              <button type="submit" class="btn w3-amber">Send Password Reset Link</button>
            </div>
          </div>
        </form>
      </div> <!-- End container div -->      
    </div>
  </div>

  <div class="hide-on-med-and-down" style='margin-top:230px;'></div>
@stop