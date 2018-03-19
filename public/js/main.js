$('.contact_page').on('click', function(){
    $("#contact_modal").addClass("wow fadeIn animated");
    $("#contact_modal").attr("style","visibility: visible; animation-name: fadeIn;");
    $('#contact_modal').modal();
})

$('.about_page').on('click', function(){
    $("#about_modal").addClass("wow fadeIn animated");
    $("#about_modal").attr("style","visibility: visible; animation-name: fadeIn;");
    $('#about_modal').modal();
})

/*
  ADD QUICK LOOK BUTTON
*/
$('.card.mb-3.box-shadow').on('mouseenter', function()
{
  $(this).append('<span id="gw-quick-look-btn" class="a-button"> <span class="a-button-inner"> <input aria-hidden="true" class="a-button-input" type="submit" aria-labelledby="gw-quick-look-btn-announce"><span id="gw-quick-look-btn-announce" class="a-button-text" aria-hidden="true">Quick look</span></span></span>');
})

/*
  REMOVE QUICK LOOK BUTTON
*/
$('.card.mb-3.box-shadow').on('mouseleave', function()
{
  $('#gw-quick-look-btn').remove();
})

/*
  ANIMATE PANEL PAGES CLOSING AND SETUP FOR NEXT ANIMATION REQUEST
*/
$('.close').on('click', function(){
  //$('#contact_modal').removeClass('wow');
  $(this).parent().parent().parent().parent().removeClass("wow fadeIn animated");
  //$("#contact_modal")
  $(this).parent().parent().parent().parent().attr("style","visibility: visible; animation-name: fadeIn;");
})

//TRIGGER QUICK LOOK MODAL
$(function() {
    $(document).on('click', '#gw-quick-look-btn', function() {
      //POPULATE QUICK LOOK MODAL
      console.log('hi');
      $('#quicklookmodalct').find('.card-img-top.shadowed').attr('src',$(this).parent().find('.card-img-top.shadowed').attr('src'));  // take the image source
      $('#quicklookmodalct').find('.card-img-top.shadowed').attr('title',$(this).parent().find('.card-img-top.shadowed').attr('title'));
      $('#quicklookmodalct').modal('show');
    });
});


//$('')
