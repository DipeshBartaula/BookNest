<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/book.php");

// Add book Functionality
if (isset($_POST['publish'])) {
    $res = storeBook($conn, $_POST);
    // print_r($res);
    // exit;
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Book has been created successfully";
        header("LOCATION:" . BASE_URL . "books");
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
                <h4 class="fw-bold text-uppercase">Add Book</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>books/add.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Book Title</label>
                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        id="exampleInputPassword1" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">ISBN Number</label>
                                    <input
                                        type="text"
                                        name="isbn"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Author Name</label>
                                    <input
                                        type="text"
                                        name="author"
                                        class="form-control"
                                        id="exampleInputPassword1" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Publisher Year</label>
                                    <input
                                        type="number"
                                        name="publication_year"
                                        class="form-control"
                                        id="exampleInputPassword1" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category</label>
                                    <?php
                                    $cats = getCategories($conn);
                                    // print_r($cats);
                                    ?>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Please select</option>
                                        <?php while ($row = $cats->fetch_assoc()) { ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="publish" class="btn btn-success">
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

<?php include_once(DIR_URL . "/include/footer.php") ?>