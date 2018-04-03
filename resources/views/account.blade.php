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
                <h7 class="addProdText">Add Product</h7>
              </div>

            </div>
          </div>

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
