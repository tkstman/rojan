@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')
@include('includes.lowerheader')
<div class="container contact">
  <div class="row">
    <div class="col-sm">

      <form style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px; margin-right: 50px;">
        <div>
          <h4>Send Us A Message</h4>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputFirstName">First Name</label>
            <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <label for="inputLastName">Last Name</label>
            <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmailAddr">Email </label>
          <input type="email" class="form-control" id="inputEmailAddr" name="inputEmailAddr" placeholder="">
        </div>
        <div class="form-group">
          <label for="inputMess">City</label>
          <textarea name="inputMess" class="form-control" id="inputMess"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
       </form>
   </div>
   <div class="col-sm">

   </div>
  </div>
  <div class="row">
    <div class="col-md-3 mx-auto">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-3 mx-auto">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection
