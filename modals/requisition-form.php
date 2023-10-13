<!-- Large Modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requisitionModal">
    Large Modal
</button>

<div class="modal fade" id="requisitionModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Requisition Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Multi Columns Form -->
                <form action="crud-operation.php" method="post" class="row g-3" id="supplierForm">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="required">*</span><label for="requestnumber" class="form-label">Request No.</label>
                            <input type="text" class="form-control form-control-sm" id="requestnumber" name="requestnumber">

                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="itemcategory" class="form-label">Item Category</label>
                            <select id="status" name="itemcategory" class="form-select form-select-sm">
                                <option selected>Category</option>
                                <option>printer</option>
                                <option>projector</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control form-control-sm" id="model" name="model">

                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="quantityrequested" class="form-label">Quantity requested</label>
                            <input type="text" class="form-control form-control-sm" id="quantityrequested" name="quantityrequested">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <span class="required">*</span><label for="quantityapproved" class="form-label">Quantity approved</label>
                            <input type="text" class="form-control form-control-sm" id="quantityapproved" name="quantityapproved">

                        </div>
                        <div class="col-md-4">
                            <label for="unitcost" class="form-label">Unit cost</label>
                            <input type="text" class="form-control form-control-sm" id="unitcost" name="unitcost">

                        </div>
                        <div class="col-md-4">
                            <span class="required">*</span><label for="totalamount" class="form-label">Total amount</label>
                            <input type="text" class="form-control form-control-sm" id="totalamount" name="totalamount">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="required">*</span><label for="requestedby" class="form-label">Requested by</label>
                            <select id="requestedby" name="requestedby" class="form-select form-select-sm">
                                <option selected>employee</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="approvedby" class="form-label">Approved by</label>
                            <select id="approvedby" name="approvedby" class="form-select form-select-sm">
                                <option selected>employee</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="issuedby" class="form-label">Issued by</label>
                            <select id="issuedby" name="issuedby" class="form-select form-select-sm">
                                <option selected>employee</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="receivedby" class="form-label">Received by</label>
                            <select id="receivedby" name="receivedby" class="form-select form-select-sm">
                                <option selected>employee</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 pt-4">
                            <span class="required">*</span><label for="purpose" class="form-label">Purpose</label>
                            <textarea type="text" class="form-control form-control-sm" id="purpose" name="purpose"></textarea>
                        </div>
                        <div class="col-md-3">
                            <span class="required">*</span><label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select form-select-sm">
                                <option selected>Status</option>
                                <option>Active</option>
                                <option>Approved</option>
                            </select>
                        </div>
                    </div>


                </form><!-- End Multi Columns Form -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" name="addrequisition" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div><!-- End Large Modal-->