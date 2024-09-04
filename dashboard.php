<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="./assests/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Dashboard | BookNest</title>
</head>

<body>
  <!-- Top navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <!-- offcanvas trigger start -->

      <button
        class="navbar-toggler me-2"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasExample"
        aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- offcanvas trigger end -->
      <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">BookNest</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex ms-auto" role="search">
          <div class="input-group">
            <input
              type="text"
              class="form-control"
              placeholder="Search"
              aria-label="Recipient's username"
              aria-describedby="button-addon2" />
            <button
              class="btn btn-outline-secondary btn-info text-white"
              type="button"
              id="button-addon2">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              <img
                src="./assests/images/profile.jpeg"
                alt="Profile pic"
                class="user-icon" />
              Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Change Password</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Top navbar end -->

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
          <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
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
                  <a href="./add-book.php" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                </li>
                <li>
                  <a href="./manage-books.php" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
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
                  <a href="#" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                </li>
                <li>
                  <a href="#" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
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
                  <a href="#" class="nav-link"><i class="fas fa-plus me-2"></i>Add New</a>
                </li>
                <li>
                  <a href="#" class="nav-link"><i class="fas fa-bars me-2"></i>Manage All</a>
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

  <!-- Main Content Start -->
  <main class="mt-1 pt3">
    <div class="container-fluid">
      <!-- Cards -->
      <div class="row dashboard-counts">
        <div class="col-md-12">
          <h4 class="fw-bold text-uppercase">Dashboard</h4>
          <p>Statistics of the system!</p>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem">
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase text-muted">
                Total Books
              </h5>
              <h1>130</h1>
              <a href="#" class="card-link link-underline-light">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem">
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase text-muted">
                Total Students
              </h5>
              <h1>84</h1>
              <a href="#" class="card-link link-underline-light">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem">
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase text-muted">
                Total Revenue
              </h5>
              <h1>130</h1>
              <a href="#" class="card-link link-underline-light">View more</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card" style="width: 18rem">
            <div class="card-body text-center">
              <h5 class="card-title text-uppercase text-muted">
                Total Books Loan
              </h5>
              <h1>34</h1>
              <a href="#" class="card-link link-underline-light">View more</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Tabs -->
      <div class="row mt-5 dashboard-tabs">
        <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active text-uppercase"
                id="recent-students-tab"
                data-bs-toggle="tab"
                data-bs-target="#recent-students-tab-pane"
                type="button"
                role="tab"
                aria-controls="recent-students-tab-pane"
                aria-selected="true">
                New Students
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link text-uppercase"
                id="recent-loans-tab"
                data-bs-toggle="tab"
                data-bs-target="#recent-loans-tab-pane"
                type="button"
                role="tab"
                aria-controls="recent-loans-tab-pane"
                aria-selected="false">
                Recent Loans
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link text-uppercase"
                id="recent-subs-tab"
                data-bs-toggle="tab"
                data-bs-target="#recent-subs-tab-pane"
                type="button"
                role="tab"
                aria-controls="recent-subs-tab-pane"
                aria-selected="false">
                Recent Subscriptions
              </button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div
              class="tab-pane fade show active"
              id="recent-students-tab-pane"
              role="tabpanel"
              aria-labelledby="recent-students-tab"
              tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Preparing For</th>
                    <th scope="col">Registered On</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                      <span class="badge rounded-pill text-bg-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>
                      <span class="badge rounded-pill text-bg-danger">Inactive</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="tab-pane fade"
              id="recent-loans-tab-pane"
              role="tabpanel"
              aria-labelledby="recent-loans-tab"
              tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Loan Date</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                      <span class="badge rounded-pill text-bg-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>
                      <span class="badge rounded-pill text-bg-danger">Returned</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="tab-pane fade"
              id="recent-subs-tab-pane"
              role="tabpanel"
              aria-labelledby="recent-subs-tab"
              tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                      <span class="badge rounded-pill text-bg-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@fat</td>
                    <td>
                      <span class="badge rounded-pill text-bg-danger">Expired</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Main Content End -->
  <script
    src="./assests/js/bootstrap.bundle.min.js"></script>
  <script
    src="./assests/js/259c19a122.js"></script>
</body>

</html>