 <!-- Modal Add Supplier-->
 <div class="modal fade" id="rece" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Receiving Form</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Multi Columns Form -->
                 <form action="crud-operation.php" method="post" class="row g-3" id="">
                     <div class="col-md-6">
                         <label for="receivingid" class="form-label">Receiving ID: </label>
                         <input type="text" class="form-control form-control-sm" id="receivingid" name="receivingid">
                     </div>
                     <div class="col-md-6">
                         <label for="receivingid" class="form-label">Receiving No.: </label>
                         <input type="text" class="form-control form-control-sm" id="receivingid" name="receivingid">
                     </div>

                     <div class="col-md-6">
                         <label for="receivingid" class="form-label">P.O No.: </label>
                         <input type="text" class="form-control form-control-sm" id="receivingid" name="receivingid">

                     </div>
                     <div class="col-md-6">
                         <label for="receivingid" class="form-label">Date: </label>
                         <input type="date" class="form-control form-control-sm" id="receivingid" name="receivingid">

                     </div>


                     <div class="col-md-6">
                         <span class="required">*</span><label for="receiving" class="form-label">Received from:</label>
                         <select id="status" name="status" class="form-select form-select-sm">
                             <option selected>Suppliers</option>
                             <option>supp 1</option>
                             <option>supp 2</option>
                         </select>

                     </div>
                     <div class="col-md-6">
                         <label for="descriptionarticle" class="form-label">Description/Article</label>
                         <textarea type="text" class="form-control form-control-sm" id="descriptionarticle" name="descriptionarticle"></textarea>

                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="category" class="form-label">Category</label>
                         <select id="status" name="category" class="form-select form-select-sm">
                             <option selected>laptop</option>
                             <option>supp 1</option>
                             <option>supp 2</option>
                         </select>

                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="quantity" class="form-label">Quantity</label>
                         <input type="text" class="form-control form-control-sm" id="quantity" name="quantity">

                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="unit" class="form-label">Unit</label>
                         <input type="text" class="form-control form-control-sm" id="unit" name="unit">

                     </div>
                     <div class="col-md-6">
                         <label for="unitprice" class="form-label">Unit price</label>
                         <input type="text" class="form-control form-control-sm" id="unitprice" name="unitprice">

                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="totalamount" class="form-label">Total amount</label>
                         <input type="text" class="form-control form-control-sm" id="totalamount" name="totalamount">

                     </div>


                     <div class="col-md-6">
                         <span class="required">*</span><label for="status" class="form-label">Status</label>
                         <select id="status" name="status" class="form-select form-select-sm">
                             <option selected>Status</option>
                             <option>Active</option>
                             <option>Inactive</option>
                         </select>
                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="status" class="form-label">Received By</label>
                         <select id="status" name="status" class="form-select form-select-sm">
                             <option selected>Employee</option>
                             <option>emp 1</option>
                             <option>emp 2</option>
                         </select>
                     </div>
                     <div class="col-md-6">
                         <span class="required">*</span><label for="status" class="form-label">Second acound by</label>
                         <select id="status" name="status" class="form-select form-select-sm">
                             <option selected>Employee</option>
                             <option>emp 1</option>
                             <option>emp 2</option>
                         </select>
                     </div>
                     <div class="input-group mb-3">
                         <input class="form-control" type="file" id="formFile" onchange="preview()">
                         <img id="frame" src="#" class="mx-auto d-block text-center img-fluid img-fluid-sm rounded">

                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-primary" name="add">Save</button>
                     </div>
                 </form><!-- End Multi Columns Form -->
             </div>
             <script>
                 function preview() {
                     frame.src = URL.createObjectURL(event.target.files[0]);
                 }
             </script>
         </div>
     </div>
 </div><!-- Modal Add Supplier-->