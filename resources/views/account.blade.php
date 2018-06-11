@extends('layouts.master')

@section('title')
  Rojan:Account Management
@endsection

@section('content')
<div class="container">
  <div class="row latest">
    {{-- <div class="col">

    </div> --}}
    <div class="col prod-list accounting">
      <form>
      <div class="cnt-prod">
        <div class="a-spacing-small">
          <div class="addProdCnt">
            <div class="addProdBox">
              <div class="addProdInner">
                <div class="icon">
                </div>
                <h7 class="addProdText">Add Product </h7>
                {{-- {{Auth::user()->roles()->orderBy('role_name')->get()}} --}}
              </div>

            </div>
          </div>
          @section('messages')
            @include('includes.messages')
          @endsection
          @if(count($errors) > 0 || \Session::has('msg'))
          <div class="row errors-rojan">
            <div class="col">
              <ul>
                  @foreach($errors->all() as $error)
                      <li class='alert-danger'>
                        {{$error}}
                      </li>
                  @endforeach
                  @if(\Session::has('msg'))
                    <li class="{{session('errorstatus')==0 ? 'alert-success' : 'alert-danger'}}" >
                      {{session('msg')}}
                    </li>
                  @endif
              </ul>
            </div>
          </div>
          @endif
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
                <td class="changeEle">
                  <span>
                    <input  value="Edit" type="button" class="btn btn-outline-dark edit"/>
                    <input  value="Delete" type="button" class="btn btn-outline-dark delete"/>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td class="changeEle">
                  <span>
                    <input  value="Edit" type="button" class="btn btn-outline-dark edit"/>
                    <input  value="Delete" type="button" class="btn btn-outline-dark delete"/>
                  </span>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td class="changeEle">
                  <span>
                    <input  value="Edit" type="button" class="btn btn-outline-dark edit"/>
                    <input  value="Delete" type="button" class="btn btn-outline-dark delete"/>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </form>
    </div>
    {{-- <div class="col">

    </div> --}}
  </div>
</div>

@endsection

@section('modalQuickLook')
<div>
  @include('includes.modalAddProduct')
  @include('includes.modalEditProduct')
</div>
@endsection
