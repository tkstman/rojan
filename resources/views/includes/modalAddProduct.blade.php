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
          <form style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px; margin-right: 50px;">
            <div>
              <h4>Add New Product</h4>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputFirstName">First Name</label>
                <input type="text" class="form-control" id="inputFirstName" name="inputFirstName">
              </div>
              <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="inputLastName">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmailAddr">Email </label>
              <input type="email" class="form-control" id="inputEmailAddr" name="inputEmailAddr" placeholder="">
            </div>
            <div class="form-group">
              <label for="inputMess">Message</label>
              <textarea rows="4" name="inputMess" class="form-control" id="inputMess"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" id="sendContactBtn">Save</button>
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
