<?php
session_start();
include 'includes/header.php';
include 'config/connection.php';
?>

<div class="container">
    <div class="row my-4">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                <div class="pagetitle">
                    <h4 class="font-weight-bold text-primary">Request Form</h4>
                </div>
                <div class="card-body p-4">
                    <div id="show_alert"></div>
                    <form action="#" method="POST" id="request_form">
                        <div id="request_fields">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="request_number" class="form-control" placeholder="Request Number" required>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <button class="btn btn-success add-item-btn">Add Item</button>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Add Request" class="btn btn-primary w-25" id="add-request">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
    $(document).ready(function() {
        $(".add-item-btn").click(function(e){
            e.preventDefault();
            $("#request_fields").append(`
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" name="item[]" class="form-control" placeholder="Item" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <input type="number" name="quantity[]" class="form-control" placeholder="Quantity" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <button class="btn btn-danger remove-item-btn">Remove</button>
                    </div>
                </div>
            `);
        });

        $(document).on('click', '.remove-item-btn', function(e){
            e.preventDefault();
            $(this).parent().parent().remove();
        });

        // ajax request to insert all form data
        $("#request_form").submit(function(e){
            e.preventDefault();
            $("#add-request").val('Adding...');
            $.ajax({
                url: 'crud-operation.php',
                method: 'post',
                data: $(this).serialize(),
                success: function (response) {
                    $("#add-request").val('Add Request');
                    $("#request_form")[0].reset();
                    $("#request_fields .row:gt(0)").remove(); // Remove additional item fields
                    $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                }
            });
        });
    });
</script>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
