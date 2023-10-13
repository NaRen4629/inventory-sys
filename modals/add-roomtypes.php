 <!-- Modal Add Supplier-->
 <div class="modal fade" id="RoomtypesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Room Type Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Multi Columns Form -->
                    <form action="crud-operation.php" method="post" class="row g-3" id="roomtypesForm">
                        <div class="col-md-8">
                            <span class="required">*</span><label for="roomtypes" class="form-label">Room Type:</label>
                            <input type="text" class="form-control form-control-sm" id="roomtypes" name="roomtypes" required>

                        </div>
                        <div class="col-md-8">
                            <label for="roomtypedescription" class="form-label">Room Type Description</label>
                            <textarea type="text" class="form-control form-control-sm" id="roomtypedescription" name="roomtypedescription"></textarea>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="addroomtypes">Save</button>
                        </div>
                    </form><!-- End Multi Columns Form -->
                </div>

            </div>
        </div>
    </div><!-- Modal Add Supplier-->