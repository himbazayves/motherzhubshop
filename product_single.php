





<?php
@session_start();
$conn=mysqli_connect('localhost','root','','mothezhub') or die('Connection fail');

	
$product_id = $_GET['product_id'];

$SelSql = "SELECT * FROM `product` WHERE product_id = $product_id";

$res = mysqli_query($conn, $SelSql);

$row = mysqli_fetch_assoc($res);

?>


<?php
// Include the database configuration file
include_once 'dbconfig.php';
$product_name=$row['product_name'];

// Get images from the database
$query = $db->query("SELECT * FROM images WHERE product_name='$product_name' ");


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mother's hub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>

.grid-container {
  display: grid;
  width:100%;
  grid-template-columns:190px 190px 190px ;
  padding:10px;
  grid-gap:20px;
  position:relative;
  top:60px;
  left:10px;
  
}




</style>    
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
 



</head>
  <body>
	  <?php include 'nav.php' ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Single product</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Baby food <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
  




<div class="container row">
           
				

             
                    
    		
                <div style="margin-top:50px; margin-bottom:50px" class="col ftco-animate col-lg">
                    
                <a style="cursor: pointer;" class="img-prod" class="img align-self-stretch" data-toggle="modal" data-target="#myModal"> <img class="img-fluid" style="heigt:10px; width:500px" src="<?php echo $row['product_picture']; ?>"> </a>

                <div style="margin-top:50px" class="btn-group" role="group" aria-label="Basic example">

                <a  href="order.php?product_id=<?php echo $row["product_id"]; ?>" class="btn btn-success text-dark" href="#">Order by Watsap</a>


               <a href="order.php?product_id=<?php echo $row["product_id"]; ?>" class="btn btn-warning text-dark" >Order Online</a>  

</div>
 
							</div>


              <div style="margin-top:50px; margin-bottom:50px" class="col ftco-animate col-lg">
              <h5> <?php echo $row['product_name']; ?> <h5>
              <p> <?php echo $row['product_price']; ?> FRW.<p>
						<p> <?php echo $row['product_description']; ?> <p>

           
            
              </div>



              
                
    
    </div>

            
            
            
            <div style="height:50%, width:50%" id="myModal" class="modal fade" role="dialog">
          <div style="height:50%, width:50%" class="modal-dialog">
        
            <!-- Modal content-->
            <div style="height:50%, width:50%" class="modal-content">
              <div  class="modal-header">
                <button  type="button" class="close" data-dismiss="modal">&times;</button>
               
              </div>
              
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                            <div class="carousel-item active">
                         
                         <img style="height:400px; width:400px" class="d-block w-100" src="<?php echo $row['product_picture']; ?>" alt="First slide">
                       
                       
                         </div>   
                           
        
                            <?php  if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"]; ?>
                  
                              
                              <div class="carousel-item">
                         
                                <img style="height:400px; width:400px" class="d-block w-100" src="<?php echo $imageURL; ?>" alt="First slide">
                              
                              
                                </div>   
                              <?php }
    ?>
    <?php }
    ?>
                       
                            
                            
                            
                            
                           
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
              </div>
             
            </div>
        
          </div>
        </div>

        
         
      
	

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
     <?php include 'footer.php'?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script>


$(document).on("click", ".modalLink", function () {
     var passedID = $(this).data('product_id');
     $(".modal-body .hiddenid").val(passedID);
});


 </script>

 <script>

$('#myModal').on('show.bs.modal', function(e) {
    var userid = $(e.relatedTarget).data('userid');
    $(e.currentTarget).find('input[name="user_id"]').val(userid);
});

     </script>
<script src="java.js"></script>

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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>