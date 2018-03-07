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

$('.card.mb-3.box-shadow').on('mouseenter', function()
{
  console.log("hi");
})


$('.close').on('click', function(){
  //$('#contact_modal').removeClass('wow');
  $(this).parent().parent().parent().parent().removeClass("wow fadeIn animated");
  //$("#contact_modal")
  $(this).parent().parent().parent().parent().attr("style","visibility: visible; animation-name: fadeIn;");
})
