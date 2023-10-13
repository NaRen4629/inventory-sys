<div class="modal" id="view_<?php echo $loc['loc_id']; ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Location Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">Room No.:</div>
                    <div class="col-sm-7">
                        <?php echo $loc['roomnumber']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 pt-2">Room Type:</div>
                    <div class="col-sm-7 pt-2">
                        <?php echo $loc['roomtype']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 pt-2">Room Description:</div>
                    <div class="col-sm-7 pt-2">
                        <?php echo $loc['roomdescription']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 pt-2">Status:</div>
                    <div class="col-sm-7 pt-2">
                        <?php echo $loc['roomstatus']; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>