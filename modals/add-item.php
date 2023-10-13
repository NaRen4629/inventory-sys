<!-- add category -->
<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">Add item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_capstone";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $category_query = "SELECT cat_id, cat_name, cat_type FROM tb_category";
                $category_result = $conn->query($category_query);

                $catName = array();
                $catType = array();

                while ($row = $category_result->fetch_assoc()) {
                    $catName[] = $row['cat_name'];
                    $catType[] = $row['cat_type'];
                }

                $conn->close();
                ?>
                <form method="POST" action="crud-operation.php">

                    <input type="hidden" class="form-control form-control-sm" name="suppid" value="">

                    <div class="row">
                        <div class="col-sm-4 pt-3 text-dark"><span class="required">*</span>Category Name:</div>
                        <div class="col-sm-7 pt-3">
                            <select id="categoryName" name="categoryName" class="form-select form-select-sm" required>
                                <?php
                                // Output the options in the select dropdown
                                foreach ($catName as $catName) {
                                    echo "<option value=''>$catName</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3 text-dark"><span class="required">*</span>Brand:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="brand" value="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3 text-dark"><span class="required">*</span>Model:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="model" value="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3 text-dark"><span class="required">*</span>Category Type:</div>
                        <div class="col-sm-7 pt-3">
                            <select id="categoryType" name="categoryType" class="form-select form-select-sm" required>
                            <?php
                                // Output the options in the select dropdown
                                foreach ($catType as $catType) {
                                    echo "<option value=''>$catType</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 pt-3 text-dark"><span class="required">*</span>Status:</div>
                        <div class="col-sm-7 pb-3 pt-3">
                            <select id="itemStatus" name="categoryStatus" class="form-select form-select-sm" required>
                                <option value=""></option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <legend class="pt-3">
                            <h6 class="text-dark"><span class="required">* </span>Indicates required fields</h6>
                        </legend>
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary" name="addItems">Save</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>