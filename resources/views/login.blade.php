@extends('layouts.master')

@section('title')
  Login
@endsection

@section('content')
    <div class="row login">
      <div class="col login">
          <!-- @section('messages')
            @include('includes.messages')
          @endsection -->
          <div class="spacing-row">

          </div>
          <div class="spacing-row">
            @if(count($errors) > 0)
            <div class="row">
              <div class="col">
                <ul>
                    @foreach($errors->all() as $error)
                      <li>
                        {{$error}}
                      </li>
                    @endforeach
                </ul>
              </div>
            </div>
            @endif
          </div>
          <div class="login-container">
            <form action="{{route('loginAttempt')}}" method="post">
              <div class="form-group">
                <label for="username">User Name:</label>
                <input class="form-control {{$errors->has('username') ? 'has-error' :  ''}}" type="text" name="username" id="username" value="{{Request::old('email')}}"/>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control {{$errors->has('password') ? 'has-error' :  ''}}" type="password" name="password" id="password" />
              </div>
              <button type="submit" class="btn a-button-primary" id="login_submit">Submit</button>
              {{Form::token()}}
            </form>
          </div>
      </div>
    </div>
@endsection
