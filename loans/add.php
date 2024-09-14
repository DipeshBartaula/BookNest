<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/loan.php");

// Function to create student
if (isset($_POST['submit'])) {
    $res = createLoans($conn, $_POST);
    // print_r($res);
    // exit;
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Loan has been recorded successfully";
        header("LOCATION:" . BASE_URL . "loans");
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
                <h4 class="fw-bold text-uppercase">Add Loan</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>loans/add.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Select Book</label>
                                    <?php
                                    $books = getBooks($conn);
                                    // print_r($books);
                                    ?>
                                    <select name="book_id" class="form-control" required>
                                        <option value="">Please select</option>
                                        <?php while ($row = $books->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['title'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Select student</label>
                                    <?php
                                    $stds = getStudents($conn);
                                    // print_r($stds);
                                    ?>
                                    <select name="student_id" class="form-control" required>
                                        <option value="">Please select</option>
                                        <?php while ($row = $stds->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Loan Date</label>
                                    <input
                                        type="date"
                                        name="loan_date"
                                        class="form-control"
                                        id="exampleInputPassword1" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Return Date</label>
                                    <input
                                        type="date"
                                        name="return_date"
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