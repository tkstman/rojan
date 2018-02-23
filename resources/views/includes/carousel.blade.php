<div id="carouselExampleIndicators" class="carousel slide wow slideInRight" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="http://www.facebook.com">
      <img class="d-block w-100" src="{{URL::to('img/1.jpg')}}" width="100%" height="350" alt="First slide">
    </a></div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::to('img/2.jpg')}}" width="100%" height="350" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL::to('img/3.jpg')}}" width="100%" height="350" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
