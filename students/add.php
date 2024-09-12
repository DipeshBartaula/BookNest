<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/student.php");

// Function to create student
if (isset($_POST['submit'])) {
    $res = createStudent($conn, $_POST);
    // print_r($res);
    // exit;
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Student has been recorded successfully";
        header("LOCATION:" . BASE_URL . "students");
        exit;
    } else {
        $_SESSION['error'] = $res['error'];
    }
}
?>

<?php
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
                <?php include_once(DIR_URL . "/include/alerts.php"); ?>
                <h4 class="fw-bold text-uppercase">Add Student</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>students/add.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        id="exampleInputPassword1" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Phone No</label>
                                    <input
                                        type="number"
                                        name="phone_no"
                                        class="form-control"
                                        id="exampleInputPassword1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        class="form-control"
                                        id="exampleInputPassword1" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="submit" class="btn btn-success">
                                    Save
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

<?php include_once(DIR_URL . "/include/footer.php") ?>