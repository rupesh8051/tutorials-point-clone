<?php include("main/head.php");
 include("DB/db.php");
?>
  <div class="grid-y">
    <div class="grid-container ">
    

<?php
        
        if(isset($_GET['cid'])) {
          echo "<div class='grid-x grid-margin-x callout'>
          <div class='cell medium-3'>
          <ul class='vertical menu'>";

          $courseid = $_GET['cid'];
          $sql = "select * from subcourse where cid = $courseid";

          $result  = mysqli_query($connection, $sql);

          while($row = mysqli_fetch_assoc($result)){

            // echo ($row['Title']);

            $Title = $row['Title'];
            $titleId = $row['titleId'];

            echo "<li><a href='index.php?Title=$titleId&cid=$courseid' class='callout'>$Title</a></li>";
          
          }
           
        } else {
          echo "<h1 style='font-family: monospace; color: #1e90ff; text-shadow: 6px 6px 3px rgba(44,47,51, 0.2);'>Tutorials Point</h1>";
      }
        

 ?>         
      </ul>
      </div>
      <div class="cell medium-9">
      <?php

        
          if(isset($_GET['Title']) && isset($titleId)) {
            $id = $_GET['Title'];
            $fetcharticle = "select * from article_name where id =$id";

            $result = mysqli_query($connection,$fetcharticle);
  
            while($row = mysqli_fetch_assoc($result)){
  
                $article = $row['article'];
  
                echo ($article);
  
            }
  
          }
          
       
      ?>
      </div>

    </div>
    </div>
 </div>  
  <?php include("main/footer.php"); ?>

