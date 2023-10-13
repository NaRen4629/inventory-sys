<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $employee['emp_ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">
                <h5 class="modal-title" id="myModalLabel">Delete Supplier</h5>
             
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to delete?</p>
                <h2 class="text-center"><?php echo $employee['First_Name'].' '.$employee['Last_Name']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                <form method="POST" action="crud-operation.php">
                    <input type="hidden" name="emp_ID" value="<?php echo $employee['emp_ID']; ?>">
                    <button type="submit" name="deleteEmployee" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
