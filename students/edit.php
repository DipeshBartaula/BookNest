<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/student.php");

// Update student Functionality
if (isset($_POST['update'])) {
    $res = updateStudent($conn, $_POST);
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Student has been updated successfully";
        header("LOCATION:" . BASE_URL . "students");
        exit;
    } else {
        $_SESSION['error'] = $res['error'];
    }
}
// Reading get param to get student data
if (isset($_GET['id']) & $_GET['id'] > 0) {
    $data = getStudentById($conn, $_GET['id']);
    $student = mysqli_fetch_assoc($data);
    // echo "<pre>";
    // print_r($student);
    // exit;
} else {
    header("LOCATION: " . BASE_URL . "students");
    exit;
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
                <h4 class="fw-bold text-uppercase">Edit Student</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>students/edit.php">
                        <input hidden name="id" value="<?php echo $_GET['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="<?php echo $student['name'] ?>" required />
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
                                        value="<?php echo $student['email'] ?>"
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
                                        id="exampleInputPassword1"
                                        value="<?php echo $student['phone_no'] ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Address</label>
                                    <input
                                        type="text"
                                        name="address"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="<?php echo $student['address'] ?>" required />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="update" class="btn btn-success">
                                    Update
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