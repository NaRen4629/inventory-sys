      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
              <div class="sidebar-brand-text mx-2">
                  <img style="margin-top: 140px;" class="rounded" src="./img/sti-ormoc-logo.png" width="auto" height="180">

              </div>

          </a>
          <!-- Divider -->
          <hr class="sidebar-divider" style="margin-top: 140px;">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="index.php">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Maintenance
          </div>



          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#maintenance-collapse" aria-expanded="true" aria-controls="maintenance-collapse">
                  <i class="fas fa-fw fa-cog"></i>
                  <span>File Maintenance</span>
              </a>
              <div id="maintenance-collapse" class="collapse" aria-labelledby="maintenance" data-parent="">
                  <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="items.php">Item</a>
                      <a class="collapse-item" href="category.php">Category</a>
                      <a class="collapse-item" href="datatable-location.php">Location</a>
                      <a class="collapse-item" href="datatable-roomtypes.php">Room Type</a>
                      <a class="collapse-item" href="supplier.php">Supplier</a>
                      <a class="collapse-item" href="#">Room Type</a>
                      <a class="collapse-item" href="employee.php">Employee</a>
                      <a class="collapse-item" href="user.php">Users</a>
                  </div>
              </div>
          </li>

          <!-- Heading -->
          <div class="sidebar-heading">
              Transaction
          </div>

          <!-- Nav Item - Transaction Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaction-collapse" aria-expanded="true" aria-controls="collapseTransaction">
                  <i class="fas fa-fw fa-wrench"></i>
                  <span>Transaction</span>
              </a>
              <div id="transaction-collapse" class="collapse" aria-labelledby="headingTransaction" data-parent="">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="requisition.php">Requisition Form</a>
                      <a class="collapse-item" href="request.php">Purchased Order</a>
                      <a class="collapse-item" href="#">Receiving</a>
                  </div>
              </div>
          </li>


          <!-- Heading -->
          <div class="sidebar-heading">
              Report
          </div>

          <!-- Nav Item - Report Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true" aria-controls="collapseReport">
                  <i class="fas fa-fw fa-wrench"></i>
                  <span>Report</span>
              </a>
              <div id="collapseReport" class="collapse" aria-labelledby="headingReport" data-parent="#">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <a class="collapse-item" href="#">.....</a>

                  </div>
              </div>
          </li>
          
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>
      </ul>
      <!-- End of Sidebar -->