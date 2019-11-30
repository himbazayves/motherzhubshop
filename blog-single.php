<?php




$conn=mysqli_connect("localhost","root","","mothezhub") or die($conn->error());

















if(isset($_POST['submit']))

{

	
	$now=date("Y-m-d");
    $blog_id=$_POST['blog_id'];
    $comment=$_POST['comment'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    $names=$_POST['names'];
   

	



	


 

        
         
		   
		   
		   $qry = "INSERT INTO blog_comment (blog_comm_id,blog_id,comment,email,tel,names,blog_comm_date) VALUES (NULL,'$blog_id','$comment','$email','$tel','$names','$now')";
		   
		   
		   $res1 = mysqli_query($conn, $qry);
		   
            
        
        
        if( $res1 ){
            echo "<script>alert('submitted')</script>";

        }

		else {
            echo "<script>alert('submittion not submitted try again')</script>";
        }
    
	
	





}

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mother's hub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
	  <?php include 'nav.php' ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/img/baby_food.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Blog Single</h1>
             <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
  
				<div class="row">
        <div class="col-lg-2">
        </div>

        <?php

$blog_id = $_GET['blog_id'];
$conn=mysqli_connect("localhost","root","","mothezhub") or die($conn->error());

$query1 = $conn->query("SELECT * FROM blog where blog_id=$blog_id");

$row = mysqli_fetch_assoc($query1);


$imageURL = 'uploads/'.$row["blog_picture"]; 


$result = $conn->query("SELECT count(*) as total from blog_comment where blog_id=$blog_id");
$data=mysqli_fetch_assoc($result);
$count=$data['total']

?>


          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"> #<?php echo $row["title"] ;?></h2>
            <p><?php echo $row["summary"] ;?></p>
            <p>
              <img  style="height:500px; width:90%" src="<?php echo $imageURL; ?>" alt="" class="img-fluid">
            </p>
            <div>
           <?php echo $row["content"]; ?>

           <div>
            <div class="tag-widget post-tag-container mb-5 mt-5">
             
            </div>
   
            
            

            
            <div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold">
                
              
              
              
              <?php if( $count > 1): ?> 
              <?php echo $count; ?> Comments 
              
              <?php elseif ( $count == 1) :?> 
              <?php echo $count; ?> Comment 
              <?php else :?> 
                  No comment yet <a href="#commentform" class="btn py-3 px-4 btn-warning">be the first to comment </a>
              <?php endif ?>


            
            </h3>

              <?php


$conn=mysqli_connect("localhost","root","","mothezhub") or die($conn->error());

$query2 = $conn->query("SELECT * FROM blog_comment where blog_id=$blog_id");

while($row1 = mysqli_fetch_assoc($query2))
{
 
?>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/icon1.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo $row1["names"] ;?></h3>
                    <div class="meta mb-2"><?php echo $row1["blog_comm_date"] ;?></div>
                    <p><?php echo $row1["comment"] ;?></p>
                    
                  </div>
                </li>


                 


                    

                           
                              </li>
                            </ul>


<?php }?>        
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                </li>
              </ul>
              <!-- END comment-list -->
              
              <form action="" id="commentform" method="POST">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 text-warning font-weight-bold">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">

                <div class="form-group">
                    
                    <input type="hidden" name="blog_id" value=" <?php echo $row["blog_id"] ;?>" type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" name="names" id="names" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input name="email" type="email" class="form-control" id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="website">Tel</label>
                    <input type="text" name="tel" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label for="message">Comment *</label>
                    <textarea name="comment" id="message" cols="30" rows="10" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="submit"value="Post Comment" class="btn py-3 px-4 btn-warning">
                  </div>

                </form>
              </div>
            </div>
          </div> <!-- .col-md-8 -->

              
                   
          <div class="col-lg-2">
        </div>
         <!-- END COL -->
        </div>
			</div>
		</section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Dec 25, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>