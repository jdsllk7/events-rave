<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["name"]) &&
        isset($_POST["email"]) &&
        isset($_POST["contact"]) &&
        isset($_POST["password"]) &&

        !empty($_POST["name"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["contact"]) &&
        !empty($_POST["password"])
    ) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $password = $_POST["password"];

        //insert
        $sql = "INSERT INTO users (
        name,
        email,
        contact,
        password
        ) VALUES (
          '$name',
          '$email',
          '$contact',
          '$password'
          )";

        $data = mysqli_query($conn, "SELECT * from users WHERE email like '$email'");

        if (mysqli_num_rows($data) == 0) {

            mysqli_query($conn, $sql); //run insert query
            $userId = mysqli_insert_id($conn);

            header('Location: login.php?msg=SUCCESS: Signup successful. Please login to get started&type=true');
        } else {
            header('Location: signup.php?msg=ERROR: Unable to register your account. Please try again&type=false');
        }
    } else {
        header('Location: signup.php?msg=ERROR: Unable to register your account. Please try again&type=false');
    }
}//end if(POST)
