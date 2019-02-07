<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<?php include("../DB/db.php"); ?>


<head>

<title>The Man in Blue &gt; Experiments &gt; widgEditor</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="The Man in Blue" />
<meta name="robots" content="all" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css" media="all">
	@import "css/info.css";
	@import "css/main.css";
	@import "css/widgEditor.css";
</style>

<script type="text/javascript" src="scripts/widgEditor.js"></script>

</head>
		<form action="post.php" method="Post">

                <div class="breadcrumb">
                    Select Course
                </div>
                <select class="form-control" name="courseid" >
s
                <?php
                            $query = "select * from courses";
                            $ex = mysqli_query($connection,$query);

                            while($row = mysqli_fetch_array($ex)){
                                $options = $row['coursename'];
                            // echo ($options);      
                            $courseid = $row['id'];
                            echo "<option value='$courseid'> ";
                            echo ($options);
                            echo "</option>";
                            }       
                  ?>    
                  </select>  
			<br>
		<input type="text" placeholder="Enter The Title" name="topic" class="form-control" required="">
		<br>
		<br>
			<fieldset>
				<textarea id="noise" name="noise" class="widgEditor nothing" required=""></textarea>
			</fieldset>
			<fieldset class="submit">
				<input type="submit" value="Post Article" class="btn btn-primary" />
			</fieldset>
		</form>
	</div>
<!-- END content -->
</body>

</html>
