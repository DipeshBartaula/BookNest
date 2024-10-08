<?php

include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/book.php");

// Equip books from database
$books = getBooks($conn);

if (!isset($books->num_rows)) {
    $_SESSION['error'] = "Error: " . $conn->error;
}

// Delete book
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $del = deleteBook($conn, $_GET['id']);
    if ($del) {
        $_SESSION['success'] = "Book has been deleted successfully";
    } else {
        $_SESSION['error'] = "Deletion operation went wrong";
    }
    header("LOCATION: " . BASE_URL . "books");
    exit;
}

// Updating status
if (isset($_GET['action']) && $_GET['action'] == 'status') {
    $update = updateStudentStatus($conn, $_GET['id'], $_GET['status']);
    if ($update) {
        $_SESSION['success'] = "Status has been changed successfully";
    } else {
        $_SESSION['error'] = "Problem with status updateation";
    }
    header("LOCATION: " . BASE_URL . "books");
    exit;
}

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
                <h4 class="fw-bold text-uppercase">Manage Books</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All books</div>
                <div class="card-body">
                    <table id="example" class="table table-sm" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">Publisher Name</th>
                                <th scope="col">Aurthor Name</th>
                                <th scope="col">ISBN No.</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($books->num_rows > 0) {
                                $i = 1;
                                while ($row = $books->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><?php echo $row['publication_year'] ?></td>
                                        <td><?php echo $row['author'] ?></td>
                                        <td><?php echo $row['isbn'] ?></td>
                                        <td><?php echo $row['category'] ?></td>
                                        <td><?php
                                            if ($row['status'] == 1) {
                                                echo '<span class="badge text-bg-success">Active</span>';
                                            } else {
                                                echo '<span class="badge text-bg-danger">Inactive</span>';
                                            }
                                            ?></td>
                                        <td><?php echo date("d-m-y h:i A", strtotime($row['created_at'])) ?></td>
                                        <td>
                                            <a href="<?php echo BASE_URL ?>books/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?php echo BASE_URL ?>books?action=delete&id=<?php echo $row['id'] ?> " class="btn btn-danger btn-sm">Delete</a>
                                            <?php if ($row['status'] == 1) { ?><a href="<?php echo BASE_URL ?>books?action=status&id=<?php echo $row['id'] ?>&status=0 " class="btn btn-warning btn-sm">Inactive</a> <?php } ?>
                                            <?php if ($row['status'] == 0) { ?><a href="<?php echo BASE_URL ?>books?action=status&id=<?php echo $row['id'] ?>&status=1 " class="btn btn-success btn-sm">Active</a><?php } ?>
                                        </td>
                                    </tr>
                            <?php }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Main Content End -->

<?php include_once(DIR_URL . "/include/footer.php") ?>