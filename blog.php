<?php
 require "connect.php";
  $blog = mysqli_query($connect, "SELECT * FROM `news`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Новости</title>
</head>

<body>
  <div class = "containers">
 <h1>Новости</h1>
  <ul>
    <?php
        while($new = mysqli_fetch_assoc($blog))
      {
       ?>
       <div class="wrap">
      <div class="columns">
        <h3 class="title"><?php echo $new['title']?></h3>
        <p class="text"><?php echo $new['text']?></p>
        <p class="text datetime"><?php echo "дата публикации:" . $new['datetime']?></p>
      </div>
    <?php
     }
      ?>
  </ul>
  </div>
</body>

</html>
