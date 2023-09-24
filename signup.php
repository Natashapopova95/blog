
<?php

  require_once 'connect.php';

  $full_name = htmlspecialchars(trim($_POST['full_name']));
  $address = htmlspecialchars(trim($_POST['address']));
  $tel = htmlspecialchars(trim($_POST['tel']));
  $email = htmlspecialchars(trim($_POST['email']));

 $sql = mysqli_query($connect, "INSERT INTO `users`(`id_user`,`full_name`, `address`, `tel`, `email`) VALUES (NULL, '$full_name', '$address', '$tel', '$email')");

$result = mysqli_query($connect, "SELECT * FROM `users`");
 
        while($user = mysqli_fetch_assoc($result))
       {
         $data .= "<div class=\"box\">
          <div class=\"container\">
           <div class=\"list\"> ФИО: " . $user['full_name'] . "</div>
           <div class=\"list\">Адрес: " . $user['address'] . "</div>
           <div class=\"list\">Телефон: " . $user['tel'] . "</div>
           <div class=\"list\"> email: " . $user['email'] . "</div>
            </div>
          </div>";
        }
        
       echo $data;
?>
 



