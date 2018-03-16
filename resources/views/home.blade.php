@extends('layouts.master')

@section('title')
  Welcome!
@endsection

@section('content')
<div>
  @include('includes.carousel')
</div>
<div class="container">
  <div class="row latest">
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow ">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/1.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/2.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/3.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/4.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>

    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/5.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/6.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/7.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/8.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/9.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="img/tools/10.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="https://image.freepik.com/free-photo/cute-cat-picture_1122-449.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>
    <div class="col-md-3 wow fadeIn">
        <div class="card mb-3 box-shadow">
          <a>
            <img class="card-img-top shadowed" data-src="" style="height: 225px; width:100%; display:block;"
            src="https://image.freepik.com/free-photo/cute-cat-picture_1122-449.jpg" data-holder-rendered="true">
          </a>
        </div>
    </div>

  </div>
</div>

@endsection

@section('modalQuickLook')
<div>
  @include('includes.quicklookmodal')
</div>
@endsection
