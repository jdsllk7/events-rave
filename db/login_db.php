<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
        isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["password"])

    ) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

        if (mysqli_num_rows($data) == 1) {

            $user = mysqli_fetch_assoc($data);
            setcookie('userId', $user['userId'], time() + (86400 * 30), "/");
            setcookie('email', $user['email'], time() + (86400 * 30), "/");
            setcookie('name', $user['name'], time() + (86400 * 30), "/");
            setcookie('contact', $user['contact'], time() + (86400 * 30), "/");

            header('Location: index.php?msg=SUCCESS: Login Successful&type=true');
        } else {
            header('Location: login.php?msg=ERROR: Incorrect Credentials&type=false');
        }
    }
}
