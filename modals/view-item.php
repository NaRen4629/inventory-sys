<div class="modal" id="view_<?php echo $supp['suppid']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Supplier Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-3">Firstname:</div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="firstname" value="<?php echo $supp['firstname']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">M.I.:</div>
                    <div class="col-sm-9 pt-2">
                        <input type="text" class="form-control form-control-sm" name="middlename" value="<?php echo $supp['middlename']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Lastname:</div>
                    <div class="col-sm-9 pt-2">
                        <input type="text" class="form-control form-control-sm" name="lastname" value="<?php echo $supp['lastname']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Business Name:</div>
                    <div class="col-sm-9 pt-2">
                        <input type="text" class="form-control form-control-sm" name="businessname" value="<?php echo $supp['businessname']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Business Address:</div>
                    <div class="col-sm-9 pt-2">
                        <input type="text" class="form-control form-control-sm" name="businessaddress" value="<?php echo $supp['businessaddress']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Phone No.:</div>
                    <div class="col-sm-9 pt-2">
                        <input type="text" class="form-control form-control-sm" name="phonenumber" value="<?php echo $supp['phonenumber']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Telephone No.:</div>
                    <div class="col-sm-9 pt-2">

                   <input type="text" class="form-control form-control-sm" name="telephonenumber" value="<?php echo $supp['telephonenumber']; ?>">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Email:</div>
                    <div class="col-sm-9 pt-2">
                    <input type="text" class="form-control form-control-sm" name="email" value="<?php echo $supp['email']; ?>">

                </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 pt-2">Status:</div>
                    <div class="col-sm-9 pt-2">
                    <input type="text" class="form-control form-control-sm" name="status" value="<?php echo $supp['status']; ?>">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>