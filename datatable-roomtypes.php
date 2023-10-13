<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['roomtypes-alert']) && $_SESSION['roomtypes-alert'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['roomtypes-alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['roomtypes-alert']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Roomtypes Information</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RoomtypesModal">
                Add Room Type
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>room type</th>
                        <th>room type description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try {
                            $sql = 'SELECT * FROM tb_roomtypes';
                            foreach ($db->query($sql) as $rmtp) {


                        ?>
                                <tr>
                                    <td><?php echo $rmtp['rmtypes_id']; ?></td>
                                    <td><?php echo $rmtp['roomtypes']; ?></td>
                                    <td><?php echo $rmtp['roomtypedescription']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Action Buttons">
                                            
                                            <a href="#edit_<?php echo $rmtp['rmtypes_id']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <a href="#delete_roomtypes<?php echo $rmtp['rmtypes_id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                    <?php
                                   
                                    include('modals/edit-roomtypes.php');
                                    include('modals/delete-roomtypes.php');
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

    <?php include 'modals/add-roomtypes.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>