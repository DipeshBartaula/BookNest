<?php

include_once("../config/config.php");
include_once("../config/database.php");
include_once(DIR_URL . "/models/student.php");

// Obtain students from database
$students = getStudents($conn);

if (!isset($students->num_rows)) {
    $_SESSION['error'] = "Error: " . $conn->error;
}

// Delete book
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $del = deleteStudent($conn, $_GET['id']);
    if ($del) {
        $_SESSION['success'] = "Student has been deleted successfully";
    } else {
        $_SESSION['error'] = "Deletion operation went wrong";
    }
    header("LOCATION: " . BASE_URL . "students");
    exit;
}

// Updating status
if (isset($_GET['action']) && $_GET['action'] == 'status') {
    $update = updateStudentStatus($conn, $_GET['id'], $_GET['status']);
    if ($update) {
        $_SESSION['success'] = "Status has been changed successfully";
    } else {
        $_SESSION['error'] = "Problem with status updation";
    }
    header("LOCATION: " . BASE_URL . "students");
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
                <h4 class="fw-bold text-uppercase">Manage Students</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All students</div>
                <div class="card-body">
                    <table id="example" class="table table-sm" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Address</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($students->num_rows > 0) {
                                $i = 1;
                                while ($row = $students->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['phone_no'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php
                                            if ($row['status'] == 1) {
                                                echo '<span class="badge text-bg-success">Active</span>';
                                            } else {
                                                echo '<span class="badge text-bg-danger">Inactive</span>';
                                            }
                                            ?></td>
                                        <td><?php echo date("d-m-y h:i A", strtotime($row['created_at'])) ?></td>
                                        <td>
                                            <a href="<?php echo BASE_URL ?>students/edit.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a onclick="return confirm('Are you sure?')" href="<?php echo BASE_URL ?>students?action=delete&id=<?php echo $row['id'] ?> " class="btn btn-danger btn-sm">Delete</a>
                                            <?php if ($row['status'] == 1) { ?><a href="<?php echo BASE_URL ?>students?action=status&id=<?php echo $row['id'] ?>&status=0 " class="btn btn-warning btn-sm">Inactive</a> <?php } ?>
                                            <?php if ($row['status'] == 0) { ?><a href="<?php echo BASE_URL ?>students?action=status&id=<?php echo $row['id'] ?>&status=1 " class="btn btn-success btn-sm">Active</a><?php } ?>
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