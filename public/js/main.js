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

//TRIGGER QUICK LOOK ADD PRODUCT MODAL
$(function() {
    $(document).on('click', '.addProdBox', function() {
      //POPULATE QUICK LOOK MODAL
      console.log('hi');
    //  $('#quicklookmodalAddProd').find('.card-img-top.shadowed').attr('src',$(this).parent().find('.card-img-top.shadowed').attr('src'));  // take the image source
      //$('#quicklookmodalAddProd').find('.card-img-top.shadowed').attr('title',$(this).parent().find('.card-img-top.shadowed').attr('title'));
      $('#quicklookmodalAddProd').modal('show');
    });
});

//TRIGGER QUICK LOOK EDIT PRODUCT MODAL
$(function() {
    $(document).on('click', '.btn.btn-outline-dark.edit', function() {
      //POPULATE QUICK LOOK MODAL
    //  $('#quicklookmodalAddProd').find('.card-img-top.shadowed').attr('src',$(this).parent().find('.card-img-top.shadowed').attr('src'));  // take the image source
      //$('#quicklookmodalAddProd').find('.card-img-top.shadowed').attr('title',$(this).parent().find('.card-img-top.shadowed').attr('title'));
      $('#quicklookmodalEditProd').modal('show');
    });
});


//REMOVE TOGGLE FOR DROPDOWN
$('.btn.btn-outline-secondary.dropdown-toggle').on('focusout', function(){
  $('.dropdown-menu').removeClass('show');
  //alert("hi");
});


//PRODUCT ADDING SECTION

/*

*/
function clearError()
{
  $(".right-error").text("");
}

/*
  ADD IMAGE BUTTON CLICK
*/
$(function() {
  $(document).on('click','#addPic', function() {
    var countOfAddProds = $('.input-group.mb-3.adding').length;

    if(countOfAddProds <5)
    {
      $('.addingImages').append('<div class="input-group mb-3 adding"><input class="form-control" type="file" name="app_file" id="app_file"><div class="input-group-append height-inherit minus imgactive">|<div class="input-group-text"><button type="button" class="minusPic"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" id="svg2" sodipodi:version="0.32" inkscape:version="0.46" width="100%" height="10" version="1.0" sodipodi:docname="New minus.svg" inkscape:output_extension="org.inkscape.output.svg.inkscape"><metadata id="metadata7"><rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf></metadata><defs id="defs5"><inkscape:perspective sodipodi:type="inkscape:persp3d" inkscape:vp_x="0 : 526.18109 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_z="744.09448 : 526.18109 : 1" inkscape:persp3d-origin="372.04724 : 350.78739 : 1" id="perspective9"></inkscape:perspective><inkscape:perspective id="perspective2436" inkscape:persp3d-origin="372.04724 : 350.78739 : 1" inkscape:vp_z="744.09448 : 526.18109 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_x="0 : 526.18109 : 1" sodipodi:type="inkscape:persp3d"></inkscape:perspective></defs><sodipodi:namedview inkscape:window-height="712" inkscape:window-width="1024" inkscape:pageshadow="2" inkscape:pageopacity="0.0" guidetolerance="10.0" gridtolerance="10.0" objecttolerance="10.0" borderopacity="1.0" bordercolor="#666666" pagecolor="#ffffff" id="base" showgrid="false" inkscape:zoom="0.924" inkscape:cx="250" inkscape:cy="250" inkscape:window-x="-4" inkscape:window-y="-4" inkscape:current-layer="svg2"></sodipodi:namedview><rect y="2" x="0" height="50%" width="100%" id="rect2384" style="opacity:1;fill:grey;fill-opacity:1;stroke:none;stroke-width:1;stroke-miterlimit:2;stroke-dasharray:none;stroke-opacity:1;"></rect></svg></button></div></div><div class="input-group-append height-inherit add imgactive">|<div class="input-group-text"><button type="button" class="addPic" id="addPic"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 -256 1792 1792" id="svg3013" version="1.1" inkscape:version="0.48.3.1 r9886" width="100%" height="100%" sodipodi:docname="plus_font_awesome.svg"><metadata id="metadata3023"><rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf></metadata><defs id="defs3021"></defs><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview3019" showgrid="false" inkscape:zoom="0.13169643" inkscape:cx="896" inkscape:cy="896" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="0" inkscape:current-layer="svg3013"></sodipodi:namedview><g transform="matrix(1,0,0,-1,205.01695,1368.9492)" id="g3015"><path d="M 1408,800 V 608 q 0,-40 -28,-68 -28,-28 -68,-28 H 896 V 96 Q 896,56 868,28 840,0 800,0 H 608 Q 568,0 540,28 512,56 512,96 V 512 H 96 Q 56,512 28,540 0,568 0,608 v 192 q 0,40 28,68 28,28 68,28 h 416 v 416 q 0,40 28,68 28,28 68,28 h 192 q 40,0 68,-28 28,-28 28,-68 V 896 h 416 q 40,0 68,-28 28,-28 28,-68 z" id="path3017" inkscape:connector-curvature="0" style="fill:grey"></path></g></svg></button></div></div></div>'
      );

      $(this).parent().parent().remove(); //remove the add sign
  }
  else {
    //report max number reached error
    $(".right-error").text("Maximum Of 5 Images May Be Added For A Product");

    setTimeout(clearError,5000);
  }
});
});



// $(function(){
//   $(document).on('active',".row", function(){
//     console.log('focus out');
//
//   });
// });


/*
  REMOVE IMAGE BUTTON CLICK
*/

$(function() {
  $(document).on('click','.minusPic', function() {
    var countOfMinProds = $('.input-group.mb-3.adding').length;
    if(countOfMinProds >1)
    {
      $(this).parent().parent().parent().remove(); //remove the current row

      //ADD BACK PLUS TO LAST ROW IF PLUS ALREADY EXISTS
      var countOfAdds = $('#addPic').length;
      if(countOfAdds<1)
      {
        $($('.input-group.mb-3.adding').get($('.input-group.mb-3.adding').length-1)).append('<div class="input-group-append height-inherit add imgactive">|<div class="input-group-text"><button type="button" class="addPic" id="addPic"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 -256 1792 1792" id="svg3013" version="1.1" inkscape:version="0.48.3.1 r9886" width="100%" height="100%" sodipodi:docname="plus_font_awesome.svg"><metadata id="metadata3023"><rdf:rdf><cc:work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type></cc:work></rdf:rdf></metadata><defs id="defs3021"></defs><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview3019" showgrid="false" inkscape:zoom="0.13169643" inkscape:cx="896" inkscape:cy="896" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="0" inkscape:current-layer="svg3013"></sodipodi:namedview><g transform="matrix(1,0,0,-1,205.01695,1368.9492)" id="g3015"><path d="M 1408,800 V 608 q 0,-40 -28,-68 -28,-28 -68,-28 H 896 V 96 Q 896,56 868,28 840,0 800,0 H 608 Q 568,0 540,28 512,56 512,96 V 512 H 96 Q 56,512 28,540 0,568 0,608 v 192 q 0,40 28,68 28,28 68,28 h 416 v 416 q 0,40 28,68 28,28 68,28 h 192 q 40,0 68,-28 28,-28 28,-68 V 896 h 416 q 40,0 68,-28 28,-28 28,-68 z" id="path3017" inkscape:connector-curvature="0" style="fill:grey"></path></g></svg></button></div></div>');
      }
    }
  });
});
