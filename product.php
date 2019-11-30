<?php
 include 'connection.php';
 $name=$_GET['sub'];

if(isset($_GET['sub']))
   {
	$sel2 = mysqli_query($con, "SELECT * FROM sub_category WHERE sub_cathe_name='".$_GET['sub']."'");
    
	//$sel1 = mysqli_query($con, "SELECT * FROM publication WHERE district='".$_GET['loc']."'");
	$fetch = mysqli_fetch_array($sel2);
		
		$id=$fetch['sub_cath_id'];
	$sel3 = mysqli_query($con, "SELECT * FROM category,sub_category,product WHERE product.sub_cath_id=sub_category.sub_cath_id and category.cathe_id= sub_category.cathe_id and sub_category.sub_cath_id='$id'");
		
	
    

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
    <link rel="stylesheet" href="css/card.css">
    
<script type="text/javascript" src="js/textarea.js"> </script>
   
 



</head>
  <body>
	  <?php include 'nav.php' ?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"><?php echo $name ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a  href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="baby_food.php">Baby food <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $name ?> <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
  




<div class="grid-container row">
           
				

                <?php
					
                    while($fetch1 = mysqli_fetch_array($sel3))
                        {
                
                  ?>
                    
    		
                <div class="grid-item ftco-animate col-sm-3">

                <div style="margin-bottom:50px" class="card">
               <a href="product_single.php?product_id=<?php echo $fetch1["product_id"]; ?>"> <img src="<?php echo $fetch1['product_picture']; ?>" alt="Denim Jeans" style="width:100%;height:300px"> </a> 
                      <h4><?php echo $fetch1['product_name']; ?></h4>
                      <p class="text-secondary"> <?php echo $fetch1['product_price']; ?> FRW. </p>
                     
                      

                      <div style="padding-bottom:0px" class="btn-group" role="group" aria-label="Basic example">
                      <a href="order.php?product_id=<?php echo $fetch1["product_id"]; ?>" class="btn btn-secondary">Order online</a>
                      <a href="#" class="btn btn-danger">Order via watsapp</a>
                      
                      </div>
                      
                     
                  
              </div>
             
			
             
    </div>



              
                
                <?php
		}
	}
		?>
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
    




</body>
</html>