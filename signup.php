<?php
  require_once 'connect.php';


  $full_name = htmlspecialchars(trim($_POST['full_name']));
  $address = htmlspecialchars(trim($_POST['address']));
  $tel = htmlspecialchars(trim($_POST['tel']));
  $email = htmlspecialchars(trim($_POST['email']));


 $sql = mysqli_query($connect, "INSERT INTO `users`(`id_user`,`full_name`, `address`, `tel`, `email`) VALUES (NULL, '$full_name','$address','$tel','$email')");

?>

<script type="text/javascript">
document.location.replace("main.php");
</script>
