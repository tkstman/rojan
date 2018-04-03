@extends('layouts.master')

@section('title')
  Login
@endsection

@section('content')
    <div class="row login">
      <div class="col login">
          <div class="login-container">
            <form action="#" method="post">
              <div class="form-group">
                <label for="username">User Name:</label>
                <input class="form-control" type="text" name="username" id="username" />
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" />
              </div>
              {{Form::token()}}
            </form>
          </div>
      </div>
    </div>
@endsection
