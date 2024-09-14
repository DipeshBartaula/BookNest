<!-- OffCanvas Starts here -->
<div
    class="offcanvas offcanvas-start bg-dark text-white sidebar-nav"
    tabindex="-1"
    id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body">
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">core</div>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>

            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">
                    Inventory
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link sidebar-link"
                    data-bs-toggle="collapse"
                    href="#booksmgmt"
                    role="button"
                    aria-expanded="false"
                    aria-controls="booksmgmt">
                    <i class="fas fa-address-book me-2"></i>Books Management
                    <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="booksmgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="<?php echo BASE_URL ?>books/add.php" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>books" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link sidebar-link"
                    data-bs-toggle="collapse"
                    href="#studentsmgmt"
                    role="button"
                    aria-expanded="false"
                    aria-controls="studentsmgmt">
                    <i class="fas fa-user me-2"></i>Students
                    <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="studentsmgmt">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="<?php echo BASE_URL ?>students/add.php" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>students" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>

            <li class="nav-item">
                <div class="text-secondary small text-uppercase fw-bold">
                    Business
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link sidebar-link"
                    data-bs-toggle="collapse"
                    href="#booksloan"
                    role="button"
                    aria-expanded="false"
                    aria-controls="booksloan">
                    <i class="fas fa-book-reader me-2"></i>Books Loan
                    <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="booksloan">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="<?php echo BASE_URL ?>loans/add.php" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL ?>loans" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a
                    class="nav-link sidebar-link"
                    data-bs-toggle="collapse"
                    href="#subscription"
                    role="button"
                    aria-expanded="false"
                    aria-controls="subscription">
                    <i class="fas fa-euro-sign me-2"></i>Subscription
                    <span class="right-icon float-end"><i class="fas fa-chevron-down"></i></span>
                </a>
                <div class="collapse" id="subscription">
                    <div>
                        <ul class="navbar-nav ps-3">
                            <li>
                                <a href="#" class="nav-link"><i class="fas fa-plus me-2"></i>Plans</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link"><i class="fas fa-bars me-2"></i>Purchase History</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item my-0">
                <hr />
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
            </li>
        </ul>
    </div>
</div>
<!-- OffCanvas ends here -->