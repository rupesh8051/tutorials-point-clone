<?php
session_start();
include("../DB/db.php");

if(isset($_POST['topic'])){

    $Title = $_POST['topic'];
    $article_data = $_POST['noise'];
    $Author_name = $_SESSION['unique'];
    $courseId = $_POST['courseid'];

    //echo ($courseId);
    $random_num = rand(0,1000);
   // echo ($random_num);
    

    $insert_data = "insert into subcourse(titleId,cid,author_name,Title)values($random_num,$courseId,'$Author_name','$Title')";
    // fetch the subcourse id 

    $insert_article = "insert into article_name(id,article)values($random_num,'$article_data')";


    $runquery = mysqli_query($connection, $insert_data);
    $insert_article = mysqli_query($connection,$insert_article);


    if(isset($runquery) && isset($insert_article)){

        echo "<script>alert('inserted data');";
        echo "</script>";
      
    }else{
        echo "<script>alert('Something Wrong');";
        echo "</script>";
    }

 
    header('Location: login.php');
}


?>

    