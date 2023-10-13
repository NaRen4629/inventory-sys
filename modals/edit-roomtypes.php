<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $rmtp['rmtypes_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Room Type Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form method="POST" action="crud-operation.php?id=<?php echo $rmtp['rmtypes_id']; ?>">
                <input type="hidden" class="form-control form-control-sm" name="rmtypes_id" value="<?php echo $rmtp['rmtypes_id']; ?>">
                    <div class="row">
                        <div class="col-sm-4"><span class="required">*</span>Room Type:</div>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" name="roomtypes" value="<?php echo $rmtp['roomtypes']; ?>">
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-4 pt-2">Room Type Description</div>
                        <div class="col-sm-7 pt-2">
                            <textarea type="text" class="form-control form-control-sm" name="roomtypedescription" value="<?php echo $rmtp['roomtypedescription']; ?>"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" name="editroomtypes">Update</button>

                    </div>
                </form>

            </div>


        </div>
    </div>
</div>