<!-- Modal Add Request -->
<div class="modal fade" id="addRequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Request Form</h5>
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

                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="requestNumber" class="form-label">Request Number</label>
                            <input type="text" class="form-control" id="requestNumber" placeholder="Enter Request Number">
                        </div>

                        <div class="mb-3">
                            <label for="requestItem" class="form-label">Request Item</label>
                            <select class="form-select" id="requestItem" name="">
                                <?php
                                    // Output the options in the select dropdown
                                    foreach ($catName as $catName) {
                                        echo "<option value=''>$catName</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="requestQuantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="requestQuantity" placeholder="Enter Quantity">
                            <span id="quantityError" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for "requestPrice" class="form-label">Price</label>
                            <input type="text" class="form-control" id="requestPrice" placeholder="Enter Price">
                            <span id="priceError" class="text-danger"></span>
                        </div>
                        <div class="d-grid">
                            <button type="button" id="addButton" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>

                <div class="column" id="requestColumn">
                    <h2 class="mb-5">Requests</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Request Number</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="requestTable">
                                <!-- Requests will be dynamically added here -->
                            </tbody>
                        </table>
                        <div class="col-12" id="submitButtonDiv" style="display: none;">
                            <button type="button" id="submitButton" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // JavaScript code to manage the form

                // Get references to form elements
                var requestNumber = document.getElementById("requestNumber");
                var requestItem = document.getElementById("requestItem");
                var requestQuantity = document.getElementById("requestQuantity");
                var requestPrice = document.getElementById("requestPrice");
                var addButton = document.getElementById("addButton");
                var quantityError = document.getElementById("quantityError");
                var priceError = document.getElementById("priceError");
                var submitButton = document.getElementById("submitButton");
                var submitButtonDiv = document.getElementById("submitButtonDiv");

                // Get references to the display column and table
                var requestColumn = document.getElementById("requestColumn");
                var table = requestColumn.querySelector("table");

                // Store selected items with their quantities and prices
                var selectedItems = new Map();

                // Function to calculate the total price for a row
                function calculateTotal(quantity, price) {
                    return (quantity * price).toFixed(2);
                }

                // Function to update the total price for a row
                function updateTotal(row) {
                    var quantity = parseInt(row.cells[2].textContent);
                    var price = parseFloat(row.cells[3].textContent);
                    var total = calculateTotal(quantity, price);
                    row.cells[4].textContent = total;
                }

                // Add an event listener to the "Add" button
                addButton.addEventListener("click", function () {
                    // Reset error messages
                    quantityError.textContent = "";
                    priceError.textContent = "";

                    // Get values from the form
                    var number = requestNumber.value;
                    var item = requestItem.value;
                    var itemText = requestItem.options[requestItem.selectedIndex].text;
                    var quantity = parseInt(requestQuantity.value, 10);
                    var price = parseFloat(requestPrice.value);

                    // Validate Quantity (must be a positive integer)
                    if (isNaN(quantity) || quantity <= 0) {
                        quantityError.textContent = "Please enter a valid quantity.";
                        return;
                    }

                    // Validate Price (must be a positive number)
                    if (isNaN(price) || price <= 0) {
                        priceError.textContent = "Please enter a valid price.";
                        return;
                    }

                    // Check if the item already exists in the table
                    var rows = table.querySelectorAll("tbody tr");
                    var itemExists = false;

                    for (var i = 0; i < rows.length; i++) {
                        var cells = rows[i].querySelectorAll("td");
                        if (cells[1].textContent === itemText) {
                            itemExists = true;
                            var currentQuantity = parseInt(cells[2].textContent, 10);
                            var currentPrice = parseFloat(cells[3].textContent);
                            cells[2].textContent = currentQuantity + quantity;
                            cells[3].textContent = (currentPrice + price).toFixed(2);
                            updateTotal(rows[i]);
                            break;
                        }
                    }

                    // If the item doesn't exist, create a new row
                    if (!itemExists) {
                        var newRow = table.insertRow(table.rows.length);
                        var cell1 = newRow.insertCell(0);
                        var cell2 = newRow.insertCell(1);
                        var cell3 = newRow.insertCell(2);
                        var cell4 = newRow.insertCell(3);
                        var cell5 = newRow.insertCell(4);

                        cell1.textContent = number;
                        cell2.textContent = itemText;
                        cell3.textContent = quantity;
                        cell4.textContent = price.toFixed(2);

                        var total = calculateTotal(quantity, price);
                        cell5.textContent = total;

                        // Store the item in the selectedItems map
                        selectedItems.set(itemText, { quantity: quantity, price: price, row: newRow });
                    }

                    // Update the selected item and its price
                    selectedItemElement.textContent = itemText;
                    selectedPriceElement.textContent = price.toFixed(2);

                    // Clear the form fields
                    requestNumber.value = "";
                    requestQuantity.value = "";
                    requestPrice.value = "";

                    showSubmitButton();
                });

                // Function to show the submit button
                function showSubmitButton() {
                    submitButtonDiv.style.display = "block";
                }

                // Add an event listener to the "Submit" button
                submitButton.addEventListener("click", function () {
                    // Add your submission logic here
                    alert("Submitting the form. You can replace this with your own code.");
                });
            </script>
        </div>
    </div>
</div>
