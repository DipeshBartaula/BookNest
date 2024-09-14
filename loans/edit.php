<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/loan.php");

// Update loan Functionality
if (isset($_POST['submit'])) {
    $res = updateLoan($conn, $_POST);
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Loan has been updated successfully";
        header("LOCATION:" . BASE_URL . "loans");
        exit;
    } else {
        $_SESSION['error'] = $res['error'];
    }
}
// Reading get param to get loan data
if (isset($_GET['id']) & $_GET['id'] > 0) {
    $data = getLoanById($conn, $_GET['id']);
    $loan = mysqli_fetch_assoc($data);
    // echo "<pre>";
    // print_r($loan);
    // exit;
} else {
    header("LOCATION: " . BASE_URL . "loans");
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
                <h4 class="fw-bold text-uppercase">Edit Loan</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>loans/edit.php">
                        <input hidden name="id" value="<?php echo $_GET['id'] ?>">
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
                                        <?php
                                        while ($row = $books->fetch_assoc()) {
                                            $selected = ($row['id'] == $loan['book_id']) ? "selected" : "";
                                        ?>
                                            <option value="<?php echo $row['id'] ?>" <?php echo $selected; ?>><?php echo $row['title'] ?></option>
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
                                        <?php
                                        while ($row = $stds->fetch_assoc()) {
                                            $selected = ($row['id'] == $loan['student_id']) ? "selected" : "";
                                        ?>
                                            <option value="<?php echo $row['id'] ?>" <?php echo $selected; ?>><?php echo $row['name'] ?></option>
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
                                        id="exampleInputPassword1"
                                        value="<?php echo $loan['loan_date'] ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Return Date</label>
                                    <input
                                        type="date"
                                        name="return_date"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="<?php echo $loan['return_date'] ?>" required />
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