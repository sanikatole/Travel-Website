<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');  

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['send'])) {

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $location = $_POST['location'];
    $guests   = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving  = $_POST['leaving'];

    $request = "INSERT INTO book_form(name, email, phone, address, location, guests, arrivals, leaving) 
                VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    $result = mysqli_query($connection, $request);

    if ($result) {
        header('Location: book.php');
        exit;
    } else {
        echo "Something went wrong, please try again. Error: " . mysqli_error($connection);
    }

} else {
    echo "Invalid request.";
}

?>
