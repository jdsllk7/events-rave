<?php
setcookie('userId', '', time() - 3600, "/");
setcookie('name', '', time() - 3600, "/");
setcookie('contact', '', time() - 3600, "/");
setcookie('email', '', time() - 3600, "/");
header('Location:../index.php?msg=You have logged out&type=false');