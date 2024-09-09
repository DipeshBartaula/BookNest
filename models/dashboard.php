<?php

//Function to get system counts
function getCounts($conn)
{
    $counts = array(
        "total_books" => 0,
        "total_students" => 0,
        "total_loans" => 0,
        "total_revenue" => 0,
    );

    //Total books count
    $sql = "select count(id) as total_books from books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $books = mysqli_fetch_assoc($result);
        $counts['total_books'] = $books['total_books'];
    }

    //Total students record
    $sql = "select count(id) as total_students from students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $books = mysqli_fetch_assoc($result);
        $counts['total_students'] = $books['total_students'];
    }

    //Total loans count
    $sql = "select count(id) as total_loans from book_loans";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $books = mysqli_fetch_assoc($result);
        $counts['total_loans'] = $books['total_loans'];
    }
    //Total revenue
    $sql = "select sum(amount) as total_revenue from subscription_plans";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $books = mysqli_fetch_assoc($result);
        $counts['total_revenue'] = $books['total_revenue'];
    }

    return $counts;
}

// Function to get table data
function getTabData($conn)
{
    $tabs = array(
        "students" => array(),
        "loans" => array(),
        "subscriptions" => array(),
    );

    //Fetching latest 5 students record
    $sql = "select * from students order by id desc limit 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tabs['students'][] = $row;
        }
    }

    // Fetching latest 5 loan record
    $sql = "select l.*,b.title as book_title, s.name as student_name 
    from book_loans l
    inner join books b on b.id = l.book_id
    inner join students s on s.id = l.student_id
    order by id desc limit 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tabs['loans'][] = $row;
        }
    }

    //Fetching latest 5 subscriptions
    $sql = "select s.*,sp.title as plan_name, st.name as student_name 
    from subscriptions s
    inner join subscription_plans as sp on sp.id = s.plan_id
    inner join students st on st.id = s.student_id 
    order by id desc limit 5";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $tabs['subscriptions'][] = $row;
        }
    }

    return $tabs;
}
