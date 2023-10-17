<!-- Modal Add Request -->
<!-- This is an HTML comment that provides a description for the following code block. -->
<div class="modal fade" id="addRequest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- Create a modal dialog for adding requests with certain attributes. -->
    <div class="modal-dialog modal-dialog-centered">
        <!-- Center the modal dialog on the screen. -->
        <div class="modal-content">
            <!-- Define the content of the modal dialog. -->
            <div class="modal-header">
                <!-- Create a header for the modal dialog. -->
                <h5 class="modal-title" id="exampleModalLabel">Add Request Form</h5>
                <!-- Set the title for the modal. -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <!-- Add a close button for the modal. -->
            </div>
            <div class="modal-body">
                <!-- Define the body of the modal. -->
                <form action="" method="post">
                    <!-- Create a form for user input with the "post" method. -->
                    <div class="mb-3">
                        <label for="requestNumber" class="form-label">Request Number</label>
                        <!-- Add a label for the input field. -->
                        <input type="text" class="form-control" id="requestNumber" placeholder="Enter Request Number">
                        <!-- Create an input field for the request number. -->
                    </div>
                    <div class="mb-3">
                        <label for="requestItem" class="form-label">Request Item</label>
                        <!-- Add a label for the selection field. -->
                        <select class="form-select" id="requestItem">
                            <!-- Create a dropdown selection for request items. -->
                            <option value="keyboard">Keyboard</option>
                            <option value="mouse">Mouse</option>
                            <option value="headset">Headset</option>
                            <!-- Define the available options. -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="requestQuantity" class="form-label">Quantity</label>
                        <!-- Add a label for the quantity input field. -->
                        <input type="text" class="form-control" id="requestQuantity" placeholder="Enter Quantity">
                        <!-- Create an input field for the quantity. -->
                        <span id="quantityError" class="text-danger"></span>
                        <!-- Display potential quantity-related errors. -->
                    </div>
                    <div class="mb-3">
                        <label for "requestPrice" class="form-label">Price</label>
                        <!-- Add a label for the price input field. -->
                        <input type="text" class="form-control" id="requestPrice" placeholder="Enter Price">
                        <!-- Create an input field for the price. -->
                        <span id="priceError" class="text-danger"></span>
                        <!-- Display potential price-related errors. -->
                    </div>
                    <div class="d-grid">
                        <!-- Create a grid layout for the following button. -->
                        <button type="button" id="addButton" class="btn btn-primary">Add</button>
                        <!-- Create a button for adding requests. -->
                    </div>
                    <div class="text-end mt-3" id="submitButtonDiv" style="display: none;">
                        <!-- Align the content to the right. -->
                        <button type="button" id="submitButton" class="btn btn-success">Submit</button>
                        <!-- Create a button for submitting requests (initially hidden). -->
                    </div>
                </form>
            </div>

            <div class="column" id="requestColumn">
                <!-- Create a column for displaying requests. -->
                <h2 class="mb-4">Requests</h2>
                <!-- Add a heading for the requests section. -->
                <div class="table-responsive">
                    <!-- Make the table responsive to various screen sizes. -->
                    <table class="table table-bordered">
                        <!-- Create a bordered table. -->
                        <thead>
                            <!-- Define the table header. -->
                            <tr>
                                <!-- Create a table row for the header. -->
                                <th>Request Number</th>
                                <!-- Add a column for request numbers. -->
                                <th>Item</th>
                                <!-- Add a column for items. -->
                                <th>Quantity</th>
                                <!-- Add a column for quantities. -->
                                <th>Price</th>
                                <!-- Add a column for prices. -->
                            </tr>
                        </thead>
                        <tbody id="requestTable">
                            <!-- Populate the table body with requests (initially empty). -->
                        </tbody>
                    </table>
                    <div class="col-12" id="submitButtonDiv" style="display: none;">
                        <!-- Create a column with a submit button (initially hidden). -->
                        <button type="button" id="submitButton" class="btn btn-success">Submit</button>
                        <!-- Add a submit button for requests (initially hidden). -->
                    </div>
                </div>
            </div>

            <script>
                // JavaScript script section begins here.

                // Get references to form elements
                var requestNumber = document.getElementById("requestNumber");
                // Reference to the "Request Number" input field.
                var requestItem = document.getElementById("requestItem");
                // Reference to the "Request Item" dropdown.
                var requestQuantity = document.getElementById("requestQuantity");
                // Reference to the "Quantity" input field.
                var requestPrice = document.getElementById("requestPrice");
                // Reference to the "Price" input field.
                var addButton = document.getElementById("addButton");
                // Reference to the "Add" button.
                var quantityError = document.getElementById("quantityError");
                // Reference to the quantity error message.
                var priceError = document.getElementById("priceError");
                // Reference to the price error message.
                var submitButton = document.getElementById("submitButton");
                // Reference to the "Submit" button.
                var submitButtonDiv = document.getElementById("submitButtonDiv");
                // Reference to the div containing the "Submit" button.

                // Get references to the display column and table
                var requestColumn = document.getElementById("requestColumn");
                // Reference to the column for displaying requests.
                var table = requestColumn.querySelector("table");
                // Reference to the table within the request column.

                // Add an event listener to the "Add" button
                addButton.addEventListener("click", function() {
                    // This function is executed when the "Add" button is clicked.

                    // Reset error messages
                    quantityError.textContent = "";
                    // Clear the quantity error message.
                    priceError.textContent = "";
                    // Clear the price error message.

                    // Get values from the form
                    var number = requestNumber.value;
                    // Retrieve the request number from the input field.
                    var item = requestItem.value;
                    // Retrieve the selected request item from the dropdown.
                    var quantity = parseInt(requestQuantity.value, 10);
                    // Parse the quantity input as an integer.
                    var price = parseFloat(requestPrice.value);
                    // Parse the price input as a floating-point number.

                    // Validate Quantity (must be a positive integer)
                    if (isNaN(quantity) || quantity <= 0) {
                        // Check if the quantity is not a valid number or is less than or equal to zero.
                        quantityError.textContent = "Please enter a valid quantity.";
                        // Display a quantity-related error message.
                        return false;
                        // Exit the function.
                    }

                    // Validate Price (must be a positive number)
                    if (isNaN(price) || price <= 0) {
                        // Check if the price is not a valid number or is less than or equal to zero.
                        priceError.textContent = "Please enter a valid price.";
                        // Display a price-related error message.
                        return false;
                        // Exit the function.
                    }

                    // Check if the item already exists in the table
                    var rows = table.querySelectorAll("tbody tr");
                    // Get all rows in the table body.

                    for (var i = 0; i < rows.length; i++) {
                        // Loop through each row in the table.
                        var cells = rows[i].querySelectorAll("td");
                        // Get all cells in the current row.

                        if (cells[1].innerHTML === item) {
                            // If the item already exists in the table (found by comparing item names):
                            var currentQuantity = parseInt(cells[2].innerHTML, 10);
                            // Get the current quantity as an integer.
                            var currentPrice = parseFloat(cells[3].innerHTML);
                            // Get the current price as a floating-point number.
                            cells[2].innerHTML = currentQuantity + quantity;
                            // Update the quantity in the table.
                            cells[3].innerHTML = (currentPrice + price).toFixed(2);
                            // Update the price in the table, formatting it with two decimal places.
                            requestNumber.value = "";
                            // Clear the request number input.
                            requestQuantity.value = "";
                            // Clear the quantity input.
                            requestPrice.value = "";
                            // Clear the price input.
                            showSubmitButton();
                            // Show the submit button.
                            return false;
                            // Exit the function.
                        }
                    }

                    // If the item doesn't exist, create a new row
                    var newRow = table.insertRow(table.rows.length);
                    // Insert a new row at the end of the table.
                    var cell1 = newRow.insertCell(0);
                    // Create a cell for the request number in the new row.
                    var cell2 = newRow.insertCell(1);
                    // Create a cell for the request item in the new row.
                    var cell3 = newRow.insertCell(2);
                    // Create a cell for the quantity in the new row.
                    var cell4 = newRow.insertCell(3);
                    // Create a cell for the price in the new row.
                    cell1.innerHTML = number;
                    // Set the content of the request number cell.
                    cell2.innerHTML = item;
                    // Set the content of the request item cell.
                    cell3.innerHTML = quantity;
                    // Set the content of the quantity cell.
                    cell4.innerHTML = price.toFixed(2);
                    // Set the content of the price cell, formatting it with two decimal places.
                    requestNumber.value = "";
                    // Clear the request number input.
                    requestQuantity.value = "";
                    // Clear the quantity input.
                    requestPrice.value = "";
                    // Clear the price input.
                    showSubmitButton();
                    // Show the submit button.
                    return false;
                });

                // Function to show the submit button
                function showSubmitButton() {
                    // This function shows the submit button.
                    submitButtonDiv.style.display = "block";
                    // Display the submit button by changing its display property.
                }

                // Add an event listener to the "Submit" button (you can add your submission logic here)
                submitButton.addEventListener("click", function() {
                    // This function is executed when the "Submit" button is clicked.

                    // Add your submission logic here
                    alert("Submitting the form. You can replace this with your own code.");
                    // Display an alert message for demonstration purposes.
                });
            </script>
        </div>
    </div>
</div>
