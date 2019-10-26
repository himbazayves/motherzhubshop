<?php

session_start();
?>



<?php




$conn=mysqli_connect("localhost","root","","mothezhub") or die($conn->error());

















if(isset($_POST['submit']))

{

	
	$now=date("Y-m-d");
    $title=$_POST['title'];
    $content=$_POST['content'];
    $summary=$_POST['summary'];
   

	



	
	$filename = $_FILES['attachment']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
	$extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	$file = $_FILES['attachment']['tmp_name'];
	$size = $_FILES['attachment']['size'];

	if (!in_array($extension, ['zip', 'pdf', 'jpg','docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['attachment']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
        
         
		   
		   
		   $qry = "INSERT INTO blog (blog_id,blog_picture,title,content,summary,blog_date) VALUES (NULL,'$filename','$title','$content','$summary','$now')";
		   
		   
		   $res1 = mysqli_query($conn, $qry);
		   
            
        } 
        
        if( $res1 ){
            echo "<script>alert('submitted')</script>";

        }
		else {
            echo "<script>alert('submittion not submitted try again')</script>";
        }
    }
	
	





}

?>


<html>

<head>

<head>
	<title>Notifications | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/textarea.js"> </script>
<style>



textarea {
  height:auto;
  max-width:600px;
  color:#999;
  font-weight:400;
  font-size:30px;
  font-family:'Ubuntu', Helvetica, Arial, sans-serif;
  width:100%;
  background:#fff;
  border-radius:3px;
  line-height:2em;
  border:none;
  box-shadow:0px 0px 5px 1px rgba(0,0,0,0.1);
  padding:30px;
  -webkit-transition: height 2s ease;
-moz-transition: height 2s ease;
-ms-transition: height 2s ease;
-o-transition: height 2s ease;
transition: height 2s ease;
}

* {
  -webkit-font-smoothing:antialiased !important;
}



</style>

</head>

<body>


<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
        <?php include 'admin_navbar.php';?>
			
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
                <?php include 'admin_sidebar.php';?>
				</nav>
			</div>
        </div>
 
                       
                   
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				

<form action="#"   class="form-horizontal col-md-6 col-md-offset-3"  enctype="multipart/form-data" method="POST">

<input type="text" id="defaultLoginFormEmail" class="form-control " placeholder="Type title ......"  name="title" required>


<div ng-app="myApp">
<div ng-controller="AppCtrl" >
<textarea id="TextArea" ng-model="loremIpsum" name="summary" ng-keyup="autoExpand($event)" placeholder="this where blog summary goes .........">
</textarea>
  </div>




<div ng-app="myApp">
<div ng-controller="AppCtrl" >
<textarea id="TextArea" ng-model="loremIpsum" name="content" ng-keyup="autoExpand($event)" placeholder="this where content goes ................">
</textarea>
  </div>
</div>

<input type="file" id="defaultLoginFormEmail" class="form-control "   name="attachment" required>

<input type="submit" class="btn btn-primary" name="submit" value="creat blog">

</form>

</div>
</div>

	<!-- END MAIN -->
    <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/toastr/toastr.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

<script type="text/javascript" src="js/category-autoload.js"> </script>
</body>

</html>