@extends('masterView')

@section('section1')
  
  <br>
  <div class="z-depth-5" style="padding:3%;background-color: white;">
    
    <a class="btn form-button" href="{{ url(URL::previous()) }}">
      <span class="mdi mdi-arrow-left"></span>
    </a>
    <h3>
    </h3>
    <hr>
    <h5>Full Name:: {{ $User->first_name }} {{ $User->last_name }}</h5>
    <h5>Language:: {{ $User->language }} </h5>
    <h5>Status:: {{ $User->status }} </h5>
    <h5>Created At:: {{ $User->created_at }} </h5>
    <h5>Updated At:: {{ $User->updated_at }} </h5>
    <hr>
    <a class="btn" href="{{ route('user.edit', ['id' => $User->id]) }}">
      <span class="mdi mdi-lead-pencil"></span> Edit
    </a>
    <div style="display:inline-block;">
      {{ Form::open([ 'method'  => 'delete', 'route' => [ 'user.destroy', $User->id ] ]) }}
        <button class="btn w3-red">
          <span class="mdi mdi-delete"></span> Delete
        </button>
      {{ Form::close() }}
    </div> 
  </div>  

  <div class="hide-on-med-and-down" style='margin-top:230px;'></div>
@stop 