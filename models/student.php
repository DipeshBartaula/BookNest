<?php

// Functionality to insert data into database
function createStudent($conn, $param)
{
    extract($param);

    //Validation start
    if (empty($name)) {
        $result = array("error" => "Name is required");
        return $result;
    } else if (empty($email)) {
        $result = array("error" => "Email is required");
        return $result;
    } else if (!isEmailUnique($conn, $email, $id)) {
        $result = array("error" => "Email is already registered");
        return $result;
    } else if (empty($phone_no)) {
        $result = array("error" => "Phone No is required");
        return $result;
    } else if (!isPhoneUnique($conn, $phone_no, $id)) {
        $result = array("error" => "Phone No is already registered");
        return $result;
    } else if (empty($address)) {
        $result = array("error" => "Address is required");
        return $result;
    }
    //Validation end
    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO students(name,email,phone_no,address,created_at) VALUES('$name','$email','$phone_no','$address','$datetime')";
    $result['success'] = $conn->query($sql);
    return $result;
}

//Function to retrieve students record
function getStudents($conn)
{
    $sql = "select * from students order by id desc";
    $result = $conn->query($sql);
    return $result;
}
//Function to get students by id
function getStudentById($conn, $id)
{
    $sql = "select * from students where id=$id";
    $result = $conn->query($sql);
    return $result;
}

//Function to delete student
function deleteStudent($conn, $id)
{
    $sql = "delete from students where id = $id";
    $result = $conn->query($sql);
    return $result;
}

//Function to update status of student
function updateStudentStatus($conn, $id, $status)
{
    $sql = "Update students set status=$status where id=$id";
    $result = $conn->query($sql);
    return $result;
}

//function to update student record
function updateStudent($conn, $param)
{
    extract($param);

    //Validation start
    if (empty($name)) {
        $result = array("error" => "Name is required");
        return $result;
    } else if (empty($email)) {
        $result = array("error" => "Email is required");
        return $result;
    } else if (empty($phone_no)) {
        $result = array("error" => "Phone No is required");
        return $result;
    } else if (empty($address)) {
        $result = array("error" => "Address is required");
        return $result;
    }
    //Validation end
    $datetime = date("Y-m-d H:i:s");

    $sql = "update students set
    name = '$name',
    email = '$email',
    phone_no = '$phone_no',
    address = '$address',
    updated_at = '$datetime'
    where id = $id;
    ";
    $result['success'] = $conn->query($sql);
    return $result;
}

//Function to check unique email.
function isEmailUnique($conn, $email, $id = NULL)
{
    $sql = "select id from students where email='$email'";
    if ($id) {
        $sql .= " and id!=$id";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return false;
    } else return true;
}
//Function to check unique phone no.
function isPhoneUnique($conn, $phone_no, $id = NULL)
{
    $sql = "select id from students where phone_no='$phone_no'";
    if ($id) {
        $sql .= " and id!=$id";
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return false;
    } else return true;
}
