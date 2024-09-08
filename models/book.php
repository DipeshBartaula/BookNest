<?php

// Functionality to insert into database
function storeBook($conn, $param)
{
    extract($param);

    //Validation start
    if (empty($title)) {
        $result = array("error" => "Title is required");
        return $result;
    } else if (empty($isbn)) {
        $result = array("error" => "ISBN is required");
        return $result;
    } else if (!isIsbnUnique($conn, $isbn)) {
        $result = array("error" => "Repeated ISBN no.");
        return $result;
    } else if (empty($author)) {
        $result = array("error" => "Author is required");
        return $result;
    } else if (empty($publication_year)) {
        $result = array("error" => "Publication year is required");
        return $result;
    } else if (empty($category_id)) {
        $result = array("error" => "Category is required");
        return $result;
    }
    //Validation end
    $datetime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO books(title,author,publication_year,isbn,category_id,created_at) VALUES('$title','$author','$publication_year','$isbn',$category_id,'$datetime')";
    $result['success'] = $conn->query($sql);
    return $result;
}

// Function to get categories
function getCategories($conn)
{
    $sql = "select id, name from categories";
    $result = $conn->query($sql);
    return $result;
}

//Function to check unique isbn no.
function isIsbnUnique($conn, $isbn)
{
    $sql = "select id from books where isbn='$isbn'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return false;
    } else return true;
}
