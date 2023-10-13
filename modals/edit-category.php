<!-- add category -->
<div class="modal fade" id="edit_<?php echo $cat['cat_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="crud-operation.php?id=<?php echo $cat['cat_id']; ?>">

                    <input type="hidden" class="form-control form-control-sm" name="categoryId" value="<?php echo $cat['cat_id']; ?>">

                    <div class="row">
                        <div class="col-sm-4 pt-3">Category Name:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="categoryName" value="<?php echo $cat['cat_name']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3">Category Type:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="categoryType" value="<?php echo $cat['cat_type']; ?> ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3">Status:</div>
                        <div class="col-sm-7 pb-3 pt-3">
                            <select id="categoryStatus" name="categoryStatus" class="form-select form-select-sm" value="<?php echo $cat['cat_status'] ?>" required>
                                <option salected><?php echo $cat['cat_status']; ?></option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary" name="editCategory">Save</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>