<?php
 require "connect.php";

  $blog = mysqli_query($connect, "SELECT * FROM news ORDER BY id DESC LIMIT 3");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная страница</title>
  <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
  <div class="containers">
    <h1>Главная страница</h1>
    <ul>
      <?php
        while($new = mysqli_fetch_assoc($blog))
      {
       ?>
      <div class="wrap">
        <div class="columns">
          <h3 class="title"><?php echo $new['title']?></h3>
          <p class="text"><?php echo $new['text']?></p>
          <p class="text"><?php echo $new['datetime']?></p>
        </div>
        <?php
     }
      ?>
    </ul>
    <div class="inner">
      <a class="link" href="blog.php">Все новости</a>
      <a class="link" href="index.php">Обратная связь</a>
    </div>
  </div>
</body>

</html>
