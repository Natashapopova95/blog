<?php
  require "connect.php";
  require "signup.php";
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
</head>

<body>
  <h1>Обратная связь</h1>
  <div class="container">
    <form name="callback" action="signup.php" method="post" enctype="multipart/form-data">
      <div class="wrapper">
        <input class="input" type="text" name="full_name" placeholder="Введите ФИО*" 
        value="<?php echo $_POST['full_name']?>">
        <?php echo $err['full_name']?>
      </div>

      <div class="wrapper">
        <input required class="input" type="text" name="address" placeholder="Введите адрес*">
      </div>

      <div class="wrapper">
        <input required class="input" type="tel" name="tel" placeholder="Введите телефон*">
      </div>

      <div class="wrapper">
        <input required class="input" type="email" name="email" placeholder="Введите email*">
      </div>


      <input class="btn wrapper" type="submit" value="Отправить" />


      <?php
        while($user = mysqli_fetch_assoc($result))
      {
       ?>
      <div class="box">
        <div class="list"><?php echo "ФИО:" . $user['full_name']?></div>
        <div class="list"><?php echo "Адрес:" . $user['address']?></div>
        <div class="list"><?php echo "Телефон:" . $user['tel']?></div>
        <div class="list"><?php echo "email:" .  $user['email']?></div>
      </div>
      <?php
     }
      ?>




  </div>
  </form>

  <script src="main.js"></script>
</body>

</html>
