<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $loc['loc_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Location Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form method="POST" action="crud-operation.php?id=<?php echo $loc['loc_id']; ?>">
                <input type="hidden" class="form-control form-control-sm" name="loc_id" value="<?php echo $loc['loc_id']; ?>">
                    <div class="row">
                        <div class="col-sm-4"><span class="required">*</span>Room No.:</div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" name="roomnumber" value="<?php echo $loc['roomnumber']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Room Type:</div>
                        <div class="col-sm-7 pt-2">
                            <input type="text" class="form-control form-control-sm" name="roomtype" value="<?php echo $loc['roomtype']; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2">Room Description</div>
                        <div class="col-sm-7 pt-2">
                            <textarea type="text" class="form-control form-control-sm" name="roomdescription" value="<?php echo $loc['roomdescription']; ?>"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2"><span class="required">*</span>Status:</div>
                        <div class="col-sm-7 pb-3 pt-2">
                            <select id="status" name="roomstatus" class="form-select form-select-sm">
                                <option selected>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="editlocation">Update</button>

                    </div>
                </form>

            </div>


        </div>
    </div>
</div>