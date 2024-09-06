<?php

include_once("config/config.php");
include_once("config/database.php");
include_once(DIR_URL . "/include/header.php");
include_once(DIR_URL . "/include/topbar.php");
include_once(DIR_URL . "/include/sidebar.php");
?>

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

<?php include_once(DIR_URL . "/include/footer.php") ?>