@extends('layouts.master')

@section('title')
  Rojan:Account Management
@endsection

@section('content')
<div class="container">
  <div class="row latest">
    <div class="col">

    </div>
    <div class="col-6 prod-list">
      <form>
      <div class="cnt-prod">
        <div class="a-spacing-small">
          <!-- <div class="row account">
              <div class="col-sm list-header">
                One of three columns
              </div>
              <div class="col-sm list-header">
                One of three columns
              </div>
              <div class="col-sm list-header">
                One of three columns
              </div>
              <div class="col-sm list-header">
                One of three columns
              </div>
          </div> -->
          <table class="table table-hover table-dark account">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <span>
                    <input class="a-button a-button-primary a-button-inner" type="submit"/>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </form>
    </div>
    <div class="col">

    </div>
  </div>
</div>

@endsection