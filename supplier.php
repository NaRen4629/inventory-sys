<?php
session_start();
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['supplier-alert']) && $_SESSION['supplier-alert'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['supplier-alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['supplier-alert']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Supplier Information</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#supplierModal">
                Add Supplier
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
                            foreach ($db->query($sql) as $supp) {


                        ?>
                                <tr>
                                    <td><?php echo $supp['suppid']; ?></td>
                                    <td><?php echo $supp['firstname'] . ' ' . $supp['middlename'] . ' ' . $supp['lastname']; ?></td>
                                    <td><?php echo $supp['businessname']; ?></td>
                                    <td><?php echo $supp['businessaddress']; ?></td>
                                    <td><?php echo $supp['phonenumber']; ?></td>
                                    <td><?php echo $supp['telephonenumber']; ?></td>
                                    <td><?php echo $supp['status']; ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Action Buttons">
                                            <a href="#view_<?php echo $supp['suppid']; ?>" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa-solid fa-eye"></i> View</a>
                                            <a href="#edit_<?php echo $supp['suppid']; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <a href="#delete_<?php echo $supp['suppid']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </div>
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

    <?php include 'modals/add-supplier.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>