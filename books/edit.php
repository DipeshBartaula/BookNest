<?php
include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/book.php");


// Add book Functionality
if (isset($_POST['update'])) {
    $res = updateBook($conn, $_POST);
    if (isset($res['success']) && $res['success'] == true) {
        $_SESSION['success'] = "Book has been updated successfully";
        header("LOCATION:" . BASE_URL . "books");
        exit;
    } else {
        $_SESSION['error'] = $res['error'];
    }
}
// Reading get param to get book data
if (isset($_GET['id']) & $_GET['id'] > 0) {
    $data = getBookById($conn, $_GET['id']);
    $book = mysqli_fetch_assoc($data);
} else {
    header("LOCATION: " . BASE_URL . "books");
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
                <h4 class="fw-bold text-uppercase">Edit Book</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Fill the form</div>
                <div class="card-body">
                    <form method="post" action="<?php echo BASE_URL ?>books/edit.php">
                        <input hidden name="id" value="<?php echo $_GET['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Book Title</label>
                                    <input
                                        type="text"
                                        name="title"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="<?php echo $book['title'] ?>" required />
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
                                        value="<?php echo $book['isbn'] ?>"
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
                                        id="exampleInputPassword1"
                                        value="<?php echo $book['author'] ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Publisher Year</label>
                                    <input
                                        type="number"
                                        name="publication_year"
                                        class="form-control"
                                        id="exampleInputPassword1"
                                        value="<?php echo $book['publication_year'] ?>" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Category</label>
                                    <?php
                                    $cats = getCategories($conn);
                                    // print_r($cats);
                                    ?>
                                    <select name="category_id" class="form-control" value="<?php echo $book['category_id'] ?>" required>
                                        <option value="">Please select</option>
                                        <?php
                                        while ($row = $cats->fetch_assoc()) {
                                            $selected = ($row['id'] == $book['category_id']) ? "selected" : "";
                                        ?>
                                            <option value="<?php echo $row['id'] ?>" <?php echo $selected; ?>><?php echo $row['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="update" class="btn btn-success">
                                    Update
                                </button>
                                <a href="<?php echo BASE_URL ?>books" class="btn btn-secondary">
                                    Back
                                </a>
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