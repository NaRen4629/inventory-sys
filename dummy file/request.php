<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
$db = new Connection();
$connection = $db->open();
$query = "SELECT MAX(Request_No) AS max_request_number FROM tbl_request";
$result = $connection->query($query);
if ($result) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $latestRequestNumber = $row['max_request_number'];
    // Increment the request number
    // Example: If the latest request number is 'REQ0005', increment it to 'REQ0006'
    // You may need to customize the formatting based on your requirements.
    $newRequestNumber = 'REQ' . str_pad((intval(substr($latestRequestNumber, 3)) + 1), 4, '0', STR_PAD_LEFT);
} else {
    // Handle the case where the query fails
    $newRequestNumber = 'REQ0001'; // Set a default value
}
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
                    <div id="show_item">
    <div class="mb-3">
        <label for="requestNumber" class="form-label">Request Number</label>
        <input type="text" class="form-control" id="requestNumber" name="Request_No" value="<?php echo $newRequestNumber; ?>" disabled>
    </div>
</div>

                        <!-- <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Item" required>
                            </div> -->
                            <div class="col-md-3 mb-3">
                                <input type="text" name="Price" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <input type="number" name="Quality" class="form-control" placeholder="Quality" required>
                            </div>
                            <div class="col-md-2 mb-3 d-grid">
                                <button class="btn btn-success add-item-btn">Add more</button>
                            </div>
                        </div>
                        <input type="submit" value="submit" name="add-request" class="btn btn-primary w-25" id="add-request">
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
            $("#show_item").append(`<div class="row append_item">
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Item" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="text" name="Price" class="form-control" placeholder="Price" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="number" name="Quality" class="form-control" placeholder="Quality" required>
                                </div>
                                <div class="col-md-2 mb-3 d-grid">
                                    <button class="btn btn-danger remove-item-btn">Remove</button>
                                </div>
                            </div>`);
        });

        $(document).on('click', '.remove-item-btn', function(e){
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });

        //ajax request to insert all form data
        $("#request_form").submit(function(e){
            e.preventDefault();
            $("#add-request").val('Adding...');
            $.ajax({
                url:'crud-operation.php',
                method: 'post',
                data: $(this).serialize(),
                success: function (response) {
                   $("#add-request").val('Add');
                   $("#request_form")[0].reset();
                   $(".append_item").remove();
                   $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`)
                }
            });
        });
    });
</script>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
