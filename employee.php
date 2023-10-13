
<?php

include 'session.php';
include 'includes/header.php';

include 'config/connection.php';

?>



<!-- Begin Page Content -->

<div class="container-fluid">

    <?php if (isset($_SESSION['Employee-alert']) && $_SESSION['Employee-alert'] != '') { ?>

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <?php echo $_SESSION['Employee-alert']; ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>

        <?php unset($_SESSION['Employee-alert']);

    } ?>



    <div class="page-title">

        <h4 class="font-weight-bold text-primary">Employee Information</h4>

    </div>



    <!-- DataTables Example -->

    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <!-- Button trigger modal -->

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">Add Employee</button>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="dataTable" class="table table-striped table-bordered nowrap" style="width: 100%">

                    <thead>

                        <th>ID</th>

                        <th>Employee ID</th>

                        <th>Full Name</th>

                        <th>Password</th>

                        <th>Position</th>

                        <th>Type</th>

                        <th>Contact Number</th>

                        <th>Status</th>

                        <th>Action</th>

                    </thead>

                    <tbody>

                        <?php

                        // Include our connection

                        $database = new Connection();

                        $db = $database->open();



                        try {

                            $sql = 'SELECT * FROM tbl_employee_information';

                            foreach ($db->query($sql) as $employee) {

                                ?>

                                <tr>

                                    <td><?php echo $employee['emp_ID']; ?></td>

                                    <td><?php echo $employee['Employee_ID']; ?></td>

                                    <td><?php echo $employee['First_Name'] . ' ' . $employee['Middle_Name'] . ' ' . $employee['Last_Name']; ?></td>

                                    <td><?php echo $employee['Password']; ?></td>

                                    <td><?php echo $employee['Position']; ?></td>

                                    <td><?php echo $employee['Type']; ?></td>

                                    <td><?php echo $employee['Contact_Number']; ?></td>

                                    <td><?php echo $employee['Status']; ?></td>

                                    <td>

                                        <div class="btn-group" role="group" aria-label="Action Buttons">

                                            <a href="#edit_<?php echo $employee['emp_ID']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>

                                            <a href="#delete_<?php echo $employee['emp_ID']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>

                                        </div>

                                    </td>

                                </tr>

                                <?php

                                // Include the delete-employee.php modal inside the loop

                                include('modals/Employee/delete-employee.php');

                                include('modals/Employee/edit-employee.php');



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



    <?php include 'modals/Employee/add-employee.php'; ?>

</div>

<!-- /.container-fluid -->



<?php

include 'includes/footer.php';

include 'includes/scripts.php';

?>

Previous
