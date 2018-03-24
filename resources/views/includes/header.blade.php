<header>
  <nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand wow rollIn" href="{{route('home')}}">
    <div class="logo"></div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0 univ-search">
      <div class="input-group input-group-sm">
        <div class="input-group-prepend">
          <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Departments</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Plumbing</a>
            <a class="dropdown-item" href="#">Garage</a>
            <a class="dropdown-item" href="#">Furniture</a>
            <a class="dropdown-item" href="#">Appliance</a>
          </div>
        </div>
        <input type="text" class="form-control" aria-label="Text input with dropdown button">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary search-btn" type="button"></button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link main" href="/account">Account<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Inventory</a>
      </li>
      <li class="nav-item active contact_page">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <!-- <li class="nav-item dropdown  active">
        <a class="nav-link dropdown-toggle" href="{{route('contact')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item active about_page">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>

  </div>
</nav>
<!-- <span class="sr-only">(current)</span> -->
</header>
