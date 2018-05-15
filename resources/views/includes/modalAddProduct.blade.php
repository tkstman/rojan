<!--Modal Quick Look -->
<div class="modal fade bd-example-modal-lg" id="quicklookmodalAddProd" tabindex="-1" role="dialog" aria-labelledby="quicklookmodalAddProd" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header tks">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close tks" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="noSelect">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form> -->
        <div class="row">
          <form method="post" action="{{ route('product.create') }}" style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px; margin-right: 50px;">
            <div>
              <h4>Add New Product</h4>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputProductName">Product Name</label>
                <input type="text" class="form-control" id="inputProductName" name="inputProductName"  value="{{Request::old('inputProductName')}}">
              </div>

              <div class="form-group col-md-6">
                <label for="inputQuantity">Quantity</label>
                <input type="text" class="form-control" id="inputQuantity" name="inputQuantity"  value="{{Request::old('inputQuantity')}}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDetails">Product Details </label>
              <textarea rows="4" class="form-control" id="inputDetails" name="inputDetails" placeholder=""  value="{{Request::old('inputDetails')}}"></textarea>
            </div>
            <div class="form-group">
              <label for="inputDept">Departments</label>
              <div class="form-group col-md-4 deptInpt" >
                <select class="form-control" name="inputDept" id="inputDept" >
                  <option value="1">
                    Plumbing
                  </option>
                  <option value="2">
                    Electrical
                  </option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="inputDescription">Product Description</label>
              <textarea rows="4" name="inputDescription" class="form-control" id="inputDescription" value="{{Request::old('inputDescription')}}"></textarea>
            </div>
            <div class="form-group addingImages">
                <label for="app_file">Product Image</label>
                <label class="right-error"></label>
                <div class="input-group mb-3 adding">
                   <input class="form-control" type="file" name="app_file" id="app_file">
                    <div class="input-group-append height-inherit minus imgactive">|
                        <div class="input-group-text">
                          <button  type="button" class="minusPic" >
                            <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" id="svg2" sodipodi:version="0.32" inkscape:version="0.46" width="100%" height="10" version="1.0" sodipodi:docname="New minus.svg" inkscape:output_extension="org.inkscape.output.svg.inkscape">
                              <metadata id="metadata7">
                                <rdf:rdf>
                                  <cc:work rdf:about="">
                                    <dc:format>image/svg+xml</dc:format>
                                    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type>
                                  </cc:work>
                                </rdf:rdf>
                              </metadata>
                              <defs id="defs5">
                                <inkscape:perspective sodipodi:type="inkscape:persp3d" inkscape:vp_x="0 : 526.18109 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_z="744.09448 : 526.18109 : 1" inkscape:persp3d-origin="372.04724 : 350.78739 : 1" id="perspective9"></inkscape:perspective>
                                <inkscape:perspective id="perspective2436" inkscape:persp3d-origin="372.04724 : 350.78739 : 1" inkscape:vp_z="744.09448 : 526.18109 : 1" inkscape:vp_y="0 : 1000 : 0" inkscape:vp_x="0 : 526.18109 : 1" sodipodi:type="inkscape:persp3d"></inkscape:perspective>
                              </defs>
                              <sodipodi:namedview inkscape:window-height="712" inkscape:window-width="1024" inkscape:pageshadow="2" inkscape:pageopacity="0.0" guidetolerance="10.0" gridtolerance="10.0" objecttolerance="10.0" borderopacity="1.0" bordercolor="#666666" pagecolor="#ffffff" id="base" showgrid="false" inkscape:zoom="0.924" inkscape:cx="250" inkscape:cy="250" inkscape:window-x="-4" inkscape:window-y="-4" inkscape:current-layer="svg2"></sodipodi:namedview>
                              <rect y="2" x="0" height="50%" width="100%" id="rect2384" style="opacity:1;fill:grey;fill-opacity:1;stroke:none;stroke-width:1;stroke-miterlimit:2;stroke-dasharray:none;stroke-opacity:1;"></rect>
                            </svg>
                          </button>
                        </div>
                    </div>
                    <div class="input-group-append height-inherit add imgactive">|
                        <div class="input-group-text">
                          <button type="button" class="addPic" id=addPic><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 -256 1792 1792" id="svg3013" version="1.1" inkscape:version="0.48.3.1 r9886" width="100%" height="100%" sodipodi:docname="plus_font_awesome.svg">
                            <metadata id="metadata3023">
                              <rdf:RDF>
                                <cc:Work rdf:about="">
                                  <dc:format>image/svg+xml</dc:format>
                                  <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                </cc:Work>
                              </rdf:RDF>
                            </metadata>
                            <defs id="defs3021"/>
                            <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview3019" showgrid="false" inkscape:zoom="0.13169643" inkscape:cx="896" inkscape:cy="896" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="0" inkscape:current-layer="svg3013"/>
                            <g transform="matrix(1,0,0,-1,205.01695,1368.9492)" id="g3015">
                              <path d="M 1408,800 V 608 q 0,-40 -28,-68 -28,-28 -68,-28 H 896 V 96 Q 896,56 868,28 840,0 800,0 H 608 Q 568,0 540,28 512,56 512,96 V 512 H 96 Q 56,512 28,540 0,568 0,608 v 192 q 0,40 28,68 28,28 68,28 h 416 v 416 q 0,40 28,68 28,28 68,28 h 192 q 40,0 68,-28 28,-28 28,-68 V 896 h 416 q 40,0 68,-28 28,-28 28,-68 z" id="path3017" inkscape:connector-curvature="0" style="fill:grey"/>
                            </g>
                          </svg>
                          </button>
                        </div>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="sendContactBtn">Add</button>
            {{Form::token()}}
           </form>
          {{-- <div class="col">
            <a>
              <img class="card-img-top shadowed" data-src="" style="height: 100%; width:100%; display:block;" src="img/tools/10.jpg" data-holder-rendered="true">
            </a>
          </div>
          <div class="col">
            <div class="quickDetails">
              <div class="manufacturerName">
                Testing Manufacturer
              </div>
              <a class="productName" href="gooogle">
                Testing Name Of Product
              </a>
              <div class="description">

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div>
                <button class="a-button a-button-primary a-button-inner">See All Product Details</button>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
      <div class="modal-footer tks">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>
