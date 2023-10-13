<?php 
include 'session.php';
include 'includes/header.php'; ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow h-100 py-2">
        <div class="card-body">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold ">Supplier Contact Information</h6>
            </div>
            <form class="row g-3">

                <div class="col-md-2">
                    <label for="businessname" class="form-label">Item no.</label>
                    <input type="text" class="form-control" name="businessname">
                </div>

                <div class="col-md-2">
                    <label for="businessadd" class="form-label">Serial no.</label>
                    <input type="text" class="form-control" name="businessadd">
                </div>

                <div class="col-md-2">
                    <label for="contactnum" class="form-label">P.O no.</label>
                    <input type="text" class="form-control" name="contactnum">
                </div>

                <div class="col-md-6">
                    <label for="firstname" class="form-label">Category</label>
                    <select name="firstname" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>

                <div class="col-md-6" style="margin-left: auto;">
                    <label for="itemdescription" class="form-label">Item Description</label>
                    <textarea type="email" class="form-control" name="itemdescription"></textarea>
                </div>

                <div class="col-md-6">
                    <label for="unit" class="form-label">Unit</label>
                    <select name="unit" class="form-select">
                        <option></option>
                        <option></option>

                    </select>
                </div>

                <div class="col-md-6">
                    <label for="contactnum" class="form-label">P.O no.</label>
                    <input type="text" class="form-control" name="contactnum">
                </div>

                <div class="col-md-6" style="margin-right: auto;">
                    <label for="supplier" class="form-label">Supplier</label>
                    <select name="supplier" class="form-select">
                        <option></option>
                        <option></option>
                    </select>
                </div>

                <div class="col" style="margin-left: auto;">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>