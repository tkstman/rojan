<!Doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}"/>
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}"/>
    <script src="{{URL::to('js/wow.js')}}"></script>

        <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->
  </head>
  <body>
    @include('includes.header')
    <div class="container">
        @yield('content')
        @include('includes.modalContact')
        @include('includes.modalAbout')
        @yield('modalQuickLook')
    </div>
    @include('includes.footer')
    <script src="{{URL::to('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::to('js/jquery-3.3.1.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    --><script>window.jQuery || document.write('<script src="../../assets/js/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>

    <script src="{{URL::to('js/holder.min.js')}}"></script>
    <script src="{{URL::to('js/ie10-viewport-bug-workaround.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    --><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- scrollSpy plugin see https://github.com/thesmart/jquery-scrollspy -->
    <script src="{{URL::to('js/scrollspy.js')}}"></script>

    <script src="{{URL::to('js/wow.min.js')}}"></script>
    <script src="{{URL::to('js/main.js')}}"></script>

    <script>
    // Helper function for add element box list in WOW
WOW.prototype.addBox = function(element) {
  this.boxes.push(element);
};

    // Init WOW.js and get instance
var wow = new WOW();
wow.init();

// Attach scrollSpy to .wow elements for detect view exit events,
// then reset elements and add again for animation
$('.wow').on('scrollSpy:exit', function() {
  $(this).css({
    'visibility': 'hidden',
    'animation-name': 'none'
  }).removeClass('animated');
  wow.addBox(this);
}).scrollSpy();
    </script>
  </body>
</html>
