<?php include("DB/db.php"); ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    
  </head>
  <body>

  <!-- Navigation bar start here  -->
  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="example-menu"></button>
    <div class="title-bar-title">Menu</div>
  </div>

<div class="top-bar" id="example-menu">
  <div class="top-bar-left">

    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Welcome</li>
    <?php

            $query = "select * from courses";
            $ex = mysqli_query($connection,$query);

            while($row = mysqli_fetch_array($ex)){
                $options = $row['coursename'];
            // echo ($options);    
            $courseid = $row['id'];  
            echo "<li><a href='index.php?cid=$courseid'>";
            echo ($options);
            echo "</a></li>";
            }       
 ?>    

  </div>
  <div class="top-bar-right">
    <ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>
  </div>
</div>
<br>

