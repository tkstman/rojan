<!-- MODAL STRUCTURE -->
<div class="modal wow fadeIn" id="contact_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Contact Us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container contact">
          <div class="row">
            <div class="col-sm">

              <form style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px; margin-right: 50px;">
                <div>
                  <h4>Online Inquiry</h4>
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
                <button type="submit" class="btn btn-primary" id="sendContactBtn">Send</button>
               </form>
           </div>
           <div class="col-sm">
             <div class="cnt_info">
               <div class="card contact" style="width: auto;">
                <div class="card-body">
                  <h5 class="card-title">Address</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Main Office</h6>
                  <p class="card-text">23 Molynes Road Kingston 10</p>
                </div>
               </div>
               <div class="card contact" style="width: auto;">
                <div class="card-body">
                 <h5 class="card-title">Phone</h5>
                 <h6 class="card-subtitle mb-2 text-muted">Sales</h6>
                 <p class="card-text">876-987-6543</p>
                 <h6 class="card-subtitle mb-2 text-muted">Receptionist</h6>
                 <p class="card-text">876-987-6543</p>
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
