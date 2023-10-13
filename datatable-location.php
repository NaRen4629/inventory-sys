<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['location-alert']) && $_SESSION['location-alert'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['location-alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['location-alert']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Location Information</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#locationModal">
                Add Location
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>room no.</th>
                        <th>room type</th>
                        <th>room description</th>
                        <th>status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try {
                            $sql = 'SELECT * FROM tb_location';
                            foreach ($db->query($sql) as $loc) {


                        ?>
                                <tr>
                                    <td><?php echo $loc['loc_id']; ?></td>
                                    <td><?php echo $loc['roomnumber']; ?></td>
                                    <td><?php echo $loc['roomtype']; ?></td>
                                    <td><?php echo $loc['roomdescription']; ?></td>
                                    <td><?php echo $loc['roomstatus']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Action Buttons">
                                            <a href="#view_<?php echo $loc['loc_id']; ?>" class="btn btn-primary btn-sm" data-toggle="modal"><i class="fa-solid fa-eye"></i> View</a>
                                            <a href="#edit_<?php echo $loc['loc_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <a href="#delete_<?php echo $loc['loc_id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                    <?php
                                    include('modals/view-location.php');
                                    include('modals/edit-location.php');
                                    include('modals/delete-location.php');
                                    ?>
                                </tr>
                        <?php
                            }
                        } catch (PDOException $e) {
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection
                        $database->close();

                        ?>

                </table>

            </div>

        </div>
    </div>

    <?php include 'modals/add-location.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>