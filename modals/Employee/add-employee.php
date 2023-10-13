 <!-- Modal Add Supplier-->
 <div class="modal fade" id="addEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Employee Information</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Multi Columns Form -->
                 <form action="crud-operation.php" method="post" class="row g-3" id="">
                 <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Employee ID:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Employee_ID" value="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Last Name:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Last_Name" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>First Name:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="First_Name" value="" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Middle Name:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Middle_Name" value="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Password:</div>
                        <div class="col-sm-7 pt-3">
                            <input type="text" class="form-control form-control-sm" name="Password" value="" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Position:</div>
                        <div class="col-sm-7 pb-2 pt-3">
                            <select id="Position" name="Position" class="form-select form-select-sm" required>
                                
                                <option></option>
                                <option>Admin</option>
                                <option>Faculty</option>
                                <option>Staff</option>
                            </select>
                        </div>
                    </div>

                   
                  

                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Contact Number</div>
                        <div class="col-sm-7 pt-3">
                        <input type="tel" id="phone" name="Contact_Number"pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required><br><br>
                        </div>
                    </div>

                  
                    <div class="row">
                        <div class="col-sm-5 pt-3"><span class="required">*</span>Status:</div>
                        <div class="col-sm-7 pb-2 pt-3">
                            <select id="Status" name="Status" class="form-select form-select-sm" required>
                                <option value=""></option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                    

                     <div class="modal-footer">
                         <legend class="pt-3">
                             <h6><span class="required">* </span>Indicates required fields</h6>
                         </legend>

                         <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-sm btn-primary" name="addEmployee">Add Employee</button>
                     </div>
                 </form><!-- End Multi Columns Form -->
             </div>

         </div>
     </div>
 </div>
       
 <!-- Modal Add Supplier-->