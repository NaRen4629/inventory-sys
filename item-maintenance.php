<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['message']) && $_SESSION['message'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['message']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Item Maintenance</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rece">
                Add Item
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>fullname</th>
                        <th>businessname</th>
                        <th>businessaddress</th>
                        <th>phone no.</th>
                        <th>telephon no.</th>
                        <th>status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try {
                            $sql = 'SELECT * FROM tb_supplier';
                            foreach ($db->query($sql) as $row) {
                
                                
                        ?>
                                <tr>
                                    <td><?php echo $row['suppid']; ?></td>
                                    <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname']; ?></td>
                                    <td><?php echo $row['businessname']; ?></td>
                                    <td><?php echo $row['businessaddress']; ?></td>
                                    <td><?php echo $row['phonenumber']; ?></td>
                                    <td><?php echo $row['telephonenumber']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td>
                                        <a href="#view_<?php echo $row['suppid']; ?>" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> View</a>
                                        <a href="#edit_<?php echo $row['suppid']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <a href="#delete_<?php echo $row['suppid']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                    </td>
                                    <?php
                                    include('modals/view-supplier.php');
                                    include('modals/edit-supplier.php');
                                    include('modals/delete-supplier.php');
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

    <?php include 'modals/receiving.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>