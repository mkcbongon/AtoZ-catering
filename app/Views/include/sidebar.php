<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion shawdow" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">A TO Z <sup>Catering</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('profile');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Bookings -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooking"
                    aria-expanded="true" aria-controls="collapseBooking">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Bookings</span>
                </a>
                <div id="collapseBooking" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=base_url('BookingsData');?>">All Bookings</a>
                        <a class="collapse-item" href="<?=base_url('addBookings');?>">Add Bookings</a>
                        <a class="collapse-item" href="<?=base_url('expenses_page');?>">Edit Bookings</a>
                    </div>
                </div>
            </li>

            <!-- package -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePackage"
                    aria-expanded="true" aria-controls="collapsePackage">
                    <i class="fa-sharp fa-solid fa-box"></i>
                    <span>Package</span>
                </a>
                <div id="collapsePackage" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=base_url('transaction_event');?>">View Package</a>
                        <a class="collapse-item" href="<?=base_url('packageDisplay');?>">Add Package</a>
                        <a class="collapse-item" href="<?=base_url('expenses_page');?>">Edit Package</a>
                    </div>
                </div>
            </li>

            <!-- Reports -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReports"
                    aria-expanded="true" aria-controls="collapseReports">
                    <i class="fa-solid fa-chart-line"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?=base_url('transaction_event');?>">Stocks</a>
                        <a class="collapse-item" href="<?=base_url('expenses_page');?>">Expenses</a>
                        <a class="collapse-item" href="<?=base_url('expenses_page');?>">Booking</a>
                    </div>
                </div>
            </li>
            

            <!-- Divider -->
           
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Transaction</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="<?=base_url('transaction_event');?>">Event Listing</a>
                        <a class="collapse-item" href="<?=base_url('expenses_page');?>">Add Expenses</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Summary</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Summary of:</h6>
                        <a class="collapse-item" href="utilities-color.html">Monthly Earning</a>
                        <a class="collapse-item" href="utilities-border.html">Monthly Expenses</a>
                        <a class="collapse-item" href="utilities-animation.html">Number of Transaction</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Table</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select Table:</h6>
                        <a class="collapse-item" href="login.html">Transaction Table</a>
                        <a class="collapse-item" href="register.html">User Table</a>
                    </div>
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?=base_url('logout');?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
