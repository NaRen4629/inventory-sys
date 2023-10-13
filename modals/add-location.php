 <!-- Modal Add Supplier-->
 <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Location Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Multi Columns Form -->
                    <form action="crud-operation.php" method="post" class="row g-3" id="locationForm">
                        <div class="col-md-8">
                            <span class="required">*</span><label for="roomnumber" class="form-label">Room No.:</label>
                            <input type="text" class="form-control form-control-sm" id="roomnumber" name="roomnumber" required>

                        </div>
                        <div class="col-md-8">
                            <span class="required">*</span><label for="roomtype" class="form-label">Room Type</label>
                            <input type="text" class="form-control form-control-sm" id="roomtype" name="roomtype" required>

                        </div>
                        
                        <div class="col-md-8">
                            <label for="roomdescription" class="form-label">Room Description</label>
                            <textarea type="text" class="form-control form-control-sm" id="roomdescription" name="roomdescription"></textarea>

                        </div>

                        <div class="col-md-6">
                            <span class="required">*</span><label for="roomstatus" class="form-label">Status</label>
                            <select id="roomstatus" name="roomstatus" class="form-select form-select-sm" required>
                                <option selected>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="addlocation">Save</button>
                        </div>
                    </form><!-- End Multi Columns Form -->
                </div>

            </div>
        </div>
    </div><!-- Modal Add Supplier-->