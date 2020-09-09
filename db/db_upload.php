<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (
      isset($_POST["type"]) &&
      isset($_POST["name"]) &&
      isset($_POST["description"]) &&
      isset($_POST["address"]) &&
      isset($_POST["dateTime"]) &&

      !empty($_POST["type"]) &&
      !empty($_POST["name"]) &&
      !empty($_POST["description"]) &&
      !empty($_POST["address"]) &&
      !empty($_POST["dateTime"])
    ) {

      $type = $_POST["type"];
      $name = $_POST["name"];
      $description = $_POST["description"];
      $address = $_POST["address"];
      $dateTime = $_POST["dateTime"];
      $userId = $_COOKIE["userId"];
      $email = $_COOKIE["email"];
      $companyName = $_COOKIE["name"];
      $contact = $_COOKIE["contact"];

      $timestamp = date("Y-m-d H:i:s", strtotime($dateTime));

      //pImages Validation
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["pImage"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["pImage"]["tmp_name"]);
        if ($check !== false) {
          $uploadOk = 1;
        } else {
          $uploadOk = 0;
        }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
        // $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["pImage"]["size"] > 500000) {
        $uploadOk = 0;
      }
      // Allow certain file formats
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["pImage"]["tmp_name"], $target_file)) {
          $uploadOk = 1;
        } else {
          //echo "Sorry, there was an error uploading your file.";
        }
      }

      if ($uploadOk == 1) {

        //insert
        $sql = "INSERT INTO events (
        type,
        name,
        description,
        address,
        dateTime,
        userId,
        email,
        companyName,
        contact
        ) VALUES (
          '$type',
          '$name',
          '$description',
          '$address',
          '$dateTime',
          '$userId',
          '$email',
          '$companyName',
          '$contact'
          )";

        if (mysqli_query($conn, $sql)) {
          header('Location: index.php?msg=SUCCESS: Upload successful.&type=true');
        }else{
          header('Location: upload.php?msg=ERROR: Oops, Something went wrong when uploading the image&type=false'); 
        }
      } else {
        header('Location: upload.php?msg=ERROR: Something went wrong when uploading the image&type=false');
      }
    } else {
      header('Location: upload.php?msg=ERROR: Unable to upload product. Please try again&type=false');
    }
  
}
