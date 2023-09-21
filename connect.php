<?php

//mysqli_connect

 $connect = mysqli_connect('localhost', 'cm80675_blog', 'aUwyKk96', 'cm80675_blog');

if(!$connect) {
  die('Error connect to DataBase');
}
