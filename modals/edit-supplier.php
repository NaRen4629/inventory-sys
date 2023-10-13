<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $supp['suppid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Supplier Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form method="POST" action="crud-operation.php?id=<?php echo $supp['suppid']; ?>">
                <input type="hidden" class="form-control form-control-sm" name="suppid" value="<?php echo $supp['suppid']; ?>">
                    <div class="row">
                        <div class="col-sm-4"><span class="required">*</span>Firstname:</div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" name="firstname" value="<?php echo $supp['firstname']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2">M.I.:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="middlename" value="<?php echo $supp['middlename']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Lastname:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="lastname" value="<?php echo $supp['lastname']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Business Name:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="businessname" value="<?php echo $supp['businessname']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Business Address:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="businessaddress" value="<?php echo $supp['businessaddress']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Phone No.:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="phonenumber" value="<?php echo $supp['phonenumber']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2">Telephone No.:</div>
                        <div class="col-sm-7 pt-2">

                            <input type="text" class="form-control form-control-sm" name="telephonenumber" value="<?php echo $supp['telephonenumber']; ?>">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2">Email:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="email" value="<?php echo $supp['email']; ?>">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Status:</div>
                        <div class="col-sm-7 pb-3 pt-2">
                            <select id="status" name="status" class="form-select form-select-sm">
                                <option selected>Status</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm" name="editSupplier">Update</button>

                    </div>
                </form>

            </div>


        </div>
    </div>
</div>