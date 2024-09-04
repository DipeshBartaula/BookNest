<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="./assests/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Add Book | BookNest</title>
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
          <h4 class="fw-bold text-uppercase">Add Book</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Fill the form</div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Book Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Author Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Publisher Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputPassword1" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Category / Course</label>
                    <select class="form-control">
                      <option>Please select</option>
                      <option>IOE</option>
                      <option>IELTS</option>
                      <option>GRE</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-success">
                    Publish
                  </button>
                  <button type="reset" class="btn btn-secondary">
                    Cancel
                  </button>
                </div>
              </div>
            </form>
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