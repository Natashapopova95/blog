<?php
  require_once 'connect.php';

  function clear_data($var) {
    $var = trim($var);
    $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlspecialchars($var);
    return $var;
  }

  $full_name = clear_data($_POST['full_name']);
  $address = clear_data($_POST['address']);
  $tel = clear_data($_POST['tel']);
  $email = clear_data($_POST['email']);
  

 $sql = mysqli_query($connect, "INSERT INTO `users`(`id_user`,`full_name`, `address`, `tel`, `email`) VALUES (NULL, '$full_name','$address','$tel','$email')");


    header('Location: ../index.php');

?>
