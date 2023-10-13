 <!-- Modal Add Supplier-->
 <div class="modal fade" id="supplierModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLabel">Supplier Information</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Multi Columns Form -->
                 <form action="crud-operation.php" method="post" class="row g-3" id="myForm">
                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>First Name:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="firstname" value="" required>
                             <span class="validation-msg" id="firstname-validation"></span>

                         </div>
                     </div>
                     <!-- Validation script -->
                     <script>
                         document.addEventListener("DOMContentLoaded", function() {
                             const form = document.getElementById("myForm");
                             form.addEventListener("submit", function(event) {
                                 const inputFields = form.querySelectorAll("input[type='text']");
                                 let isFormValid = true;

                                 inputFields.forEach(function(input) {
                                     const fieldName = input.name;
                                     const fieldValue = input.value;
                                     const validationMsg = document.getElementById(fieldName + "-validation");
                                     if (fieldName !== "phonenumber" && fieldName !== "telephonenumber" && fieldName !== "businessaddress") {
                                         if (/\d/.test(fieldValue)) {
                                             validationMsg.textContent = "Field should not contain numbers.";
                                             isFormValid = false;
                                         } else {
                                             validationMsg.textContent = "";
                                         }
                                     }
                                 });

                                 if (!isFormValid) {
                                     event.preventDefault();
                                 }
                             });
                         });
                     </script>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark">M.I:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="middlename" value="">
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>Lastname:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="lastname" value="" required>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>Business Name:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="businessname" value="" required>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>Business Address:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="businessaddress" value="" required>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>Phone No:</div>
                         <div class="col-sm-7 pt-3">
                             <div class="input-group input-group-sm">
                                 <div class="input-group-prepend">
                                     <span class="input-group-text">+63</span>
                                 </div>
                                 <input type="text" class="form-control form-control-sm" pattern="^9\d{9}$" placeholder="9876543210" maxlength="10" name="phonenumber" value="" required>
                             </div>
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark">Telephone No:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" placeholder="000-00-000" name="telephonenumber" id="telephonenumber">
                         </div>
                     </div>

                     // telephone validation
                     <script>
                         const inputElement = document.getElementById("telephonenumber");

                         inputElement.addEventListener("input", function() {

                             const sanitizedValue = this.value.replace(/\D/g, "");

                             const formattedValue = `${sanitizedValue.slice(0, 3)}-${sanitizedValue.slice(3, 5)}-${sanitizedValue.slice(5, 8)}`;

                             this.value = formattedValue;
                         });
                     </script>



                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark">Email:</div>
                         <div class="col-sm-7 pt-3">
                             <input type="text" class="form-control form-control-sm" name="email" value="">
                         </div>
                     </div>

                     <div class="row">
                         <div class="col-sm-5 pt-3 text-dark"><span class="required">*</span>Status:</div>
                         <div class="col-sm-7 pb-2 pt-3">
                             <select id="categoryStatus" name="status" class="form-select form-select-sm" required>
                                 <option value=""></option>
                                 <option>Active</option>
                                 <option>Inactive</option>
                             </select>
                         </div>
                     </div>

                     <div class="modal-footer">
                         <legend class="pt-3">
                             <h6 text-dark><span class="required">* </span>Indicates required fields</h6>
                         </legend>

                         <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-sm btn-primary" name="addSupplier">Save</button>
                     </div>
                 </form><!-- End Multi Columns Form -->
             </div>

         </div>
     </div>
 </div><!-- Modal Add Supplier-->