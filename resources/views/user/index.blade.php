@extends('masterView')

@section('section1')
  
  <br>
  <a class="btn form-header" href="{{ url(URL::previous()) }}">
    <span class="mdi mdi-arrow-left"></span>
  </a>
  <a class="btn w3-green" href="{{ url('/register') }}">+ Add New User</a>
  
  <div class="z-depth-5" style="padding:1%;background-color: white;">
    <table class="highlight bordered">
      <caption>
        <h3>Users</h3>
      </caption>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Language</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        @foreach($Users as $User)
          <tr>
            <td>{{ $User->first_name }}</td>
            <td>{{ $User->last_name }}</td>
            <td>{{ $User->language }}</td>
            <td>{{ $User->status }}</td>
            <td>
              <a class="btn" href="{{ route('user.show', ['id' => $User->id]) }}">
                <span class="mdi mdi-chevron-right"></span>
              </a>
              <a class="btn w3-blue" href="{{ route('user.edit', ['id' => $User->id]) }}">
                <span class="mdi mdi-pen"></span>
              </a>
              <a class="btn w3-amber" href="{{ route('permissions.index', ['user_id' => $User->id]) }}">
                <span class="mdi mdi-gate"></span>
              </a>
            </td>
          </tr>  
        @endforeach
      </tbody>
    </table>

    {{ $Users }}

  </div>  

@stop 