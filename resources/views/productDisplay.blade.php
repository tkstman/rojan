@extends('layouts.master')

@section('title')
  Rojan.com:
@endsection

@section('content')
<div class="container">
  <div class="row latest">
    <div class="col left">
      <div class="leftImgPnContainer">
        <ul class="leftImgPn">
          @foreach ($prodimgs as $img)
            <li class="imgCnt">
              <img class="panelImg mycard" src="{{url('photos/' . $img->img_path)}}" alt="text-image"/>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="rightImgPnContainer">
        <img class="mainImg mycard" src="{{url('photos/' . $prodimgs[0]->img_path)}}" alt="text-image"/>
      </div>
    </div>
    <div class="col middle">
      <div class="manufacturer-prod-page">
        <a class="manufacturer-name">{{$product->manufacturer}}</a>
      </div>
      <div class="productName">
        {{$product->prod_name}}
      </div>
    <!--  <div class="reviews-section">
        <span class="manufacturer-name">21 customer reviews</span>
      </div>
       <hr class="spacer" />
      <div class="pricing">
        <span class="priceHeader">Price:</span><span class="priceValue">$20.99</span>
      </div>
      <hr class="spacer" /> -->
      <div class="productDetails">
          <ul>
            <li>
                <span>36 FULL WATERCOLOR PAINT SETS 36 High Quality Individual Sets with 8 Vibrant Classic Colors Including Red, Green, Blue, Yellow, Orange, Violet, Black, Brown</span>
            </li>
            <li>
                <span>KID SAFE & WASHABLE All Color Swell Water Colors for kids are Washable paint and ASTM Non-Toxic, perfect for any kids age 3+, classroom, students, parties, or adults painting</span>
            </li>
            <li>
                <span>BONUS WOOD BRUSHES 36 High Quality Wood Brushes Included in each set for Easy & Controlled Paint Application, mixing and blending paint colors for all creative art projects at home, school, crafting or in the classroom. EASY TO CLEAN Paint brushes washes out quickly the washable kids paint, maintaining their shape with repeated use</span>
            </li>
            <li>
                <span>BEST BULK VALUE Painting Supplies Set Perfect Bulk Buy Watercolor Paint Pack for your art and craft projects, classroom needs, school projects, and party favors or gift bags</span>
            </li>
          </ul>
      </div>

    </div>
    <div class="col right">
      <div>
        <div class="a-box">
          <div class="a-box-inner">
            <div>
              <div class="quantityContainer">
                <div class="formrow">
                  <label>Qty:</label>
                  <input class="righty" type="text" name="qtyProdReq" />
                </div>
                <div class="formrow">
                  <label>Email:</label>
                  <input class="righty" type="text" name="emailProdReq" />
                </div>
                <div class="formrow">
                  <label>Message:</label>
                  <textarea class="righty" name="msgProdReq"></textarea>
                </div>

                <div  class="formrow button">
                    <hr class="spacer" />
                  <div class="quickDetails">
                    <button class="a-button a-button-primary a-button-inner">Submit</button>
                  </div>
                </div>


              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

</div>

@endsection
