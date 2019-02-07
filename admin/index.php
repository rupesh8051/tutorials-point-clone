<?php session_start();
    include("../DB/db.php");   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
    $userinfo = $_SESSION['unique'];
    //echo ($userinfo);
    if(!isset($_SESSION['unique'])){

        header('Location: login.php');
    }
?>


<script>

function getId(){

    document.uservalue = document.getElementById("inputGroupSelect02").value;
    //alert();
}

addEventListener("change", getId, false); 





</script>


<!-- A grey horizontal navbar that becomes vertical on small screens -->
             <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                    <!-- Links -->
                    <div class="collapse navbar-collapse justify-content-end" id="nav-content">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo "Login As:".$userinfo; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Timeline</a>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </ul>
                    </div>
             </nav>    
                     <br>
                     <br>
             <div class="breadcumb">
                            <form action="" method="post"> 
                                <input type="text" placeholder="Enter New Course Name" class="form-control" name="course" required=""> 
                                <br>
                                <input type="submit" value="Add New Course" class="btn btn-primary">
                            </form>      
             </div>
             <br>
             <br>
                        
             <?php
                    if(isset($_POST['course'])){
                        
                        $course = $_POST['course'];
                       // echo ($course);

                        $valuecheck = "select coursename from courses where coursename ='$course'";
                        $excquery = mysqli_query($connection,$valuecheck);
                       // echo ($valuecheck);

                        $fetchvalue = mysqli_fetch_row($excquery);


                        if($fetchvalue > 0){

                            echo "<script>";
                            echo "alert('Course Alredy Exits');";
                            echo "</script>";
                        }else{

                            $insert = "insert into courses(coursename)value('$course')";
                            echo ($insert);
                            $excquery = mysqli_query($connection,$insert);
                            if($excquery){
                                echo "<script>";
                                echo "alert('Course Added Scuessfully');";
                                echo "</script>"; 
                            }

                        }
                 
                    }

             ?>
             
             <?php  include("example.php"); ?>
    </div>
    </div>
</body>
</html>