<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['item-alert']) && $_SESSION['item-alert'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['item-alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['item-alert']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Items Information</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemModal">
                Add Item
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Brand</th>
                        <th>Item Model</th>
                        <th>Category Type</th>
                        <th>Category Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try {
                            $sql = 'SELECT * FROM tb_item';
                            foreach ($db->query($sql) as $item) {


                        ?>
                                <tr>
                                    <td><?php echo $item['item_id']; ?></td>
                                    <td><?php echo $item['item_name']; ?></td>
                                    <td><?php echo $item['item_type']; ?></td>
                                    <td><?php echo $item['item_status']; ?></td>
                                    <td>
                                        <div class="btn-group" aria-label="Action Buttons">
                                            <a href="#view_<?php echo $item['suppid']; ?>" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa-solid fa-eye"></i> View</a>
                                            <a href="#edit_<?php echo $item['suppid']; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <a href="#delete_<?php echo $item['suppid']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                    <?php
                                    include('modals/view-item.php');
                                    include('modals/edit-item.php');
                                    include('modals/delete-item.php');
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

    <?php include 'modals/add-item.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>