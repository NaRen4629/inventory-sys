<div class="modal fade" id="editUser_<?php echo  $Users['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                </button>
            </div>
            <div class="modal-body">
            <form action="crud-operation.php" method="post" class="row g-3" id="">
            <input type="hidden" class="form-control form-control-sm" name="user_id" value="<?php echo $Users['user_id']; ?>">
                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Employee ID:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Employee_ID" value="<?php echo $Users['Employee_ID']; ?>"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Password:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Password" value="<?php echo $Users['Password']; ?>"
                                required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>User level:</div>
                        <div class="col-sm-7 pb-2 pt-3">
                            <select id="Userlevel" name="Userlevel" class="form-select form-select-sm"   onchange="showTextInput()" required>
                                <option ></option>
                                <option>Admin</option>
                                <option>Faculty</option>
                                <option>Staff</option>
                                >
                            </select>
                            
                        </div>
                    </div>

                   
                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Status:</div>
                        <div class="col-sm-7 pb-2 pt-3">
                            <select id="Status" name="Status" class="form-select form-select-sm" value="<?php echo $Users['Status']; ?>"  required>
                                <option value=""></option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <legend class="pt-3">
                            <h6><span class="required">* </span>Indicates required fields</h6>
                        </legend>

                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary" name="editUser">Edit User</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>