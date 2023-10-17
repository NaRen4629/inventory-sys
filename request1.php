
<?php

include 'session.php';
include 'includes/header.php';

include 'config/connection.php';

?>



<!-- Begin Page Content -->

<div class="container-fluid">

    <?php if (isset($_SESSION['request-alert']) && $_SESSION['request-alert'] != '') { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <?php echo $_SESSION['request-alert']; ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

        <?php unset($_SESSION['request-alert']);

    } ?>



    <div class="page-title">

        <h4 class="font-weight-bold text-primary">request Information</h4>

    </div>



    <!-- DataTables Example -->

    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <!-- Button trigger modal -->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRequest">Add request</button>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="dataTable" class="table table-striped table-bordered nowrap" style="width: 100%">

                    <thead>

                        <th> Request Id</th>

                        <th>Request No</th>

                        <th>Quality</th>

                        <th>Price</th>

                        <th>Status</th>

                    </thead>

                    <tbody>

                        <?php

                        // Include our connection

                        $database = new Connection();

                        $db = $database->open();



                        try {

                            $sql = 'SELECT * FROM tbl_request';

                            foreach ($db->query($sql) as $request) {

                                ?>

                                <tr>

                                    <td><?php echo $request['request_id ']; ?></td>

                                    <td><?php echo $request['Request_No']; ?></td>

                                    <td><?php echo $request['Quality ']; ?></td>

                                    <td><?php echo $request['Price ']; ?></td>

                                    <td><?php echo $request['Type']; ?></td>


                                    <td><?php echo $request['Status']; ?></td>

                                    <td>

                                        <div class="btn-group" role="group" aria-label="Action Buttons">

                                            <a href="#edit_<?php echo $request['emp_ID']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>

                                            <a href="#delete_<?php echo $request['emp_ID']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>

                                        </div>

                                    </td>

                                </tr>

                                <?php

                                // Include the delete-request.php modal inside the loop

                                include('modals/request/delete-request.php');

                                include('modals/request/edit-request.php');



                            }

                        } catch (PDOException $e) {

                            echo "There is some problem in connection: " . $e->getMessage();

                        }



                        // Close connection

                        $database->close();

                        ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>



    <?php include 'modals/Request_Order/add-request_order.php'; ?>

</div>

<!-- /.container-fluid -->



<?php

include 'includes/footer.php';

include 'includes/scripts.php';

?>

Previous