
<?php
require "connect.php";

$result = mysqli_query($connect, "SELECT * FROM `users`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обратная связь</title>
  <link rel="stylesheet" href="assets/css/main.css">
   <script src="jquery.main.js"></script>
  <script src="validate.min.js"></script>
  <script src="jquery.maskedinput.js"></script>
  
  
</head>

<body>
<div class="form">
    <h1>Обратная связь</h1>

    <form name="callback" method="post" >
      <div class="wrapper">
       <input class="input" type="text" name="full_name" placeholder="Введите ФИО">
      </div>

      <div class="wrapper">
        <input required class="input" type="text" name="address" placeholder="Введите адрес">
      </div>

      <div class="wrapper">
        <input required  class="input" type="tel" id="tel" name="tel"  placeholder="Введите телефон">
      </div>

      <div class="wrapper">
        <input required class="input" type="email" name="email" placeholder="Введите email">
      </div>

      <button class="btn wrapper">Отправить</button>
     </form>
</div>
  <div class="color">
   <h4 class="subtitle">Введённые данные</h4>
   <div class = 'wrapperBlock'>
    <?php
 
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
   
   </div>
      
      

  
 
  
  <script src="main.js"></script>
</body>

</html>