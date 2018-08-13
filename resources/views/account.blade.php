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
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Department</th>
                <th scope="col">Manufacturer</th>
                <th scope="col">Images</th>

              </tr>
            </thead>
            <tbody>
              @foreach($products as $prod)
                <tr>
                  <th scope="row">{{$prod->prod_id}}</th>
                  <td>{{$prod->prod_name}}</td>
                  <td>{{$prod->quantity}}</td>
                  <td>{{$prod->department->dept_name}}</td>
                  <td>{{$prod->manufacturer}}</td>
                  <td>
                    @if ($prod->Image_Photo->count() >0)
                      @foreach ($prod->Image_Photo as $photo)
                        <img class="img-qwk" src="{{url('photos/' . $photo->img_path)}}" alt="img" style="width:32px;height:32px;border:1px solid cyan;"/>
                      @endforeach
                    @endif

                  </td>
                  <td class="changeEle">
                    <span>
                      <input  value="Edit" type="button" class="btn btn-outline-dark edit"/>
                      <input  value="Delete" type="button" class="btn btn-outline-dark delete"/>
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center" style="margin:0 auto;position: relative;width: 300px;">{!!$products->links();!!}</div>
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
  @include('includes.quicklookimgsmodal')
</div>
@endsection
