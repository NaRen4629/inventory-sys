<div class="modal fade" id="edit_<?php echo $employee['emp_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="crud-operation.php">
                    <input type="hidden" class="form-control form-control-sm" name="emp_ID" value="<?php echo $employee['emp_ID']; ?>">
                    <div class="row">
                        <div class="col-sm-4"><span class="required">*</span>Employee ID:</div>
                        <div class="col-sm-7"><input type="text" class="form-control form-control-sm" name="Employee_ID" value="<?php echo $employee['Employee_ID']; ?>"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-2">Last Name:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="Last_Name" value="<?php echo $employee['Last_Name']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>First Name:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="First_Name" value="<?php echo $employee['First_Name']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Middle Name:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="Middle_Name" value="<?php echo $employee['Middle_Name']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Password:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="Password" value="<?php echo $employee['Password']; ?>">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Position:</div>
                        <div class="col-sm-7 pb-3 pt-2">
                            <select id="Position" name="Position" class="form-select form-select-sm">
                                <option>Status</option>
                                <option>Admin</option>
                                <option>Faculty</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-2">Contact_Number:</div>
                        <div class="col-sm-7 pt-2">

                            <input type="text" class="form-control form-control-sm" name="Contact_Number" value="<?php echo $employee['Contact_Number']; ?>">

                        </div>

                        <div class="row">
                            <div class="col-sm-4 pt-2"><span class="required">*</span>Status:</div>
                            <div class="col-sm-7 pb-3 pt-2">
                                <select id="Status" name="Status" class="form-select form-select-sm">
                                    <option selected>Status</option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="editEmployee">Update</button>
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>