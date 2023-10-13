<?php
include 'session.php';
include 'includes/header.php';
include 'config/connection.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <?php
    if (isset($_SESSION['category-alert']) && $_SESSION['category-alert'] != '') {
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['category-alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['category-alert']);
    }
    ?>

    <div class="pagetitle">
        <h4 class="font-weight-bold text-primary">Category Information</h4>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                Add Category
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>Category ID</th>
                        <th>Category Name</th>
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
                            $sql = 'SELECT * FROM tb_category';
                            foreach ($db->query($sql) as $cat) {


                        ?>
                                <tr>
                                    <td><?php echo $cat['cat_id']; ?></td>
                                    <td><?php echo $cat['cat_name']; ?></td>
                                    <td><?php echo $cat['cat_type']; ?></td>
                                    <td><?php echo $cat['cat_status']; ?></td>
                                    <td>
                                        <div class="btn-group" aria-label="Action Buttons">
                                            <a href="#view_<?php echo $cat['cat_id']; ?>" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa-solid fa-eye"></i> View</a>
                                            <a href="#edit_<?php echo $cat['cat_id']; ?>" class="btn btn-warning btn-sm" data-toggle="modal"><i class="fa-solid fa-pen"></i> Edit</a>
                                            <a href="#delete_<?php echo $cat['cat_id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><i class="fa-solid fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
                                    <?php
                                    include('modals/view-category.php');
                                    include('modals/edit-category.php');
                                    include('modals/delete-category.php');
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

    <?php include 'modals/add-category.php' ?>

</div><!-- /.container-fluid -->
<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>