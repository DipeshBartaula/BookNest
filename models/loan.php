<?php

//Function to store loans
function createLoans($conn, $param)
{
    extract($param);

    //Validation start
    if (empty($book_id)) {
        $result = array("error" => "Book is required");
        return $result;
    } else if (empty($student_id)) {
        $result = array("error" => "Student is required");
        return $result;
    } else if (empty($loan_date)) {
        $result = array("error" => "Loan date is required");
        return $result;
    } else if (empty($return_date)) {
        $result = array("error" => "Return Date is required");
        return $result;
    }
    //Validation end
    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO book_loans(book_id,student_id,loan_date,return_date,created_at) VALUES('$book_id','$student_id','$loan_date','$return_date','$datetime')";
    $result['success'] = $conn->query($sql);
    return $result;
}

//Function to get loans
function getLoans($conn)
{
    $sql = "select l.*,b.title as book_title,s.name as student_name
    from book_loans as l
    left join books as b on l.book_id = b.id 
    left join students as s on l.student_id = s.id
    order by id desc
    ";
    $result = $conn->query($sql);
    return $result;
}

//function to delete loans
function deleteLoan($conn, $id)
{
    $sql = "delete from book_loans where id = $id";
    $result = $conn->query($sql);
    return $result;
}
//function to update loan's status
function updateLoanStatus($conn, $id, $is_return)
{
    $sql = "Update book_loans set is_return=$is_return where id=$id";
    $result = $conn->query($sql);
    return $result;
}
//function to update loans
function updateLoan($conn, $param)
{
    extract($param);

    //Validation start
    if (empty($book_id)) {
        $result = array("error" => "Book is required");
        return $result;
    } else if (empty($student_id)) {
        $result = array("error" => "Student is required");
        return $result;
    } else if (empty($loan_date)) {
        $result = array("error" => "Loan date is required");
        return $result;
    } else if (empty($return_date)) {
        $result = array("error" => "Return Date is required");
        return $result;
    }
    //Validation end
    $datetime = date("Y-m-d H:i:s");

    $sql = "update book_loans set
    book_id = '$book_id',
    student_id = '$student_id',
    loan_date = '$loan_date',
    return_date = '$return_date',
    updated_at = '$datetime'
    where id = $id;
    ";
    $result['success'] = $conn->query($sql);
    return $result;
}

//Function to get loan by id
function getLoanById($conn, $id)
{
    $sql = "select * from book_loans where id=$id";
    $result = $conn->query($sql);
    return $result;
}
// Function to get books
function getBooks($conn)
{
    $sql = "select id, title from books";
    $result = $conn->query($sql);
    return $result;
}

// Function to get categories
function getStudents($conn)
{
    $sql = "select id, name from students";
    $result = $conn->query($sql);
    return $result;
}
