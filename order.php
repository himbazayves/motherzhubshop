<?php 
$now=date("Y-m-d");

?>

<?php
@session_start();
$conn=mysqli_connect('localhost','root','','mothezhub') or die('Connection fail');

	
$product_id = $_GET['product_id'];

$SelSql = "SELECT * FROM `product` WHERE product_id = $product_id";

$res = mysqli_query($conn, $SelSql);

$r = mysqli_fetch_assoc($res);



if(isset($_POST['order'])){
  

    
  
$now=date("Y-m-d");
  



$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];

$quantity=$_POST['quantity'];
$client_email=$_POST['client_email'];
$client_phone=$_POST['client_phone'];
$client_names=$_POST['client_names'];

$_SESSION['name']=$client_names;
$name=$_SESSION['name'];

$total=($product_price*$quantity);

$qry = "INSERT INTO `mothezhub`.`order_detail` (`order_id`, `product_id`,`quantity`, `client_email`,`client_phone`,`client_names`,`order_date`,`total`) VALUES (NULL, '$product_id','$quantity','$client_email','$client_phone','$client_names','$now','$total')";


$res1 = mysqli_query($conn, $qry);

#$UpdateSql = "UPDATE `employee` SET fname='$fname', lname='$lname',  email='$email',gender='$gender', password='$password' position='$position', username='$username',  department='$department',phone='$phone',      WHERE id=.$id";




}

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script>
        var x = 0;
        var y = 0;
        var z = 0;
        function calc(obj) {
            var e = obj.id.toString();
            if (e == 'tb1') {
                x = Number(obj.value);
                y = Number(document.getElementById('tb2').value);
            } else {
                x = Number(document.getElementById('tb1').value);
                y = Number(obj.value);
            }
            z = x * y;
            document.getElementById('total').value = z;
            document.getElementById('update').innerHTML = z;
        }
    </script>
    
   
 



</head>
  <body >
	  <?php include 'nav.php' ?>
    <!-- END nav -->
    
    
  

    <section  style="background:black; background-image: url('images/bg_2.jpg'); background-repeat: no-repeat;">

    <div  class="container">
  <div class="row">
  <div class="col-lg-3 col-sm-12">
  </div>
    
    <div  style="background:#292b2c; opacity:0.7; border-radius:8px;"  class="col-lg-6 col-sm-12">

  
    
    <form name="addem"  id="addem" method="post" class="form-group " >
       <center> <h5 class="text-light"> Order Form<h5></center>
       <?php   if(isset($_POST['order'])): ?>
       <?php   if($res1): ?>

        <?php  echo "<div class='alert alert-success alert-dismissable' role='alert' > <button class='close' data-dismiss='alert'>
        <small><sup>X</sup></small>
    </button><center> <i class='material-icons' style='font-size:35px;color:green'>check_circle</i> </center>
        Dear $name, Your order Sent successfully, thank you to order with us.
       
        </div>" ?>
        <?php  echo "<div class='alert alert-success'><center> <button class='close' data-dismiss='alert'>
        <small><sup>X</sup></small>
    </button> <i class='material-icons' style='font-size:35px;color:red'>warning</i> </center>
        We  will get in touch with you as soon as possible!.
        
       
    </div>" ?>
    <?php   else: ?>
    <?php  echo "<div class='alert alert-danger'>Unable to make order. Please try again.</div>" ?>
    <?php endif ?>
    <?php endif ?>

    <div class="row">
    <div class="col">
   
    <div class="form-group">
        <label class="text-light" for="inputEmail">Date</label>
        <input style="border-radius:8px;" name="order_date" type="date" class="form-control text-warning form-control-sm"  value="<?php echo "$now"; ?>" id="inputEmail" readonly>
    </div>

    </div>

    <div class="col">
    <div class="form-group">
        <label class="text-light" for="inputEmail">Product</label>
        <input style="border-radius:8px;" name="product_name" type="text" class="form-control form-control-sm"  value="<?php echo $r['product_name']; ?>" id="inputEmail" readonly>
    </div>

    </div>
    </div>

    <?php if ($r['product_reduction'] !=0) :   ?> 

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label class="text-light" for="inputEmail">Price</label>
        <input style="color:black" style="border-radius:8px;"  id="tb1"  onkeyup="calc(this)" type="text"   data-price="<?php $product_price ?>"  name="product_price" class="price form-control"  value="<?php echo $r['product_price']; ?>" id="inputEmail" readonly>
    </div>
    </div>

    
    <div class="col">
    <div class="form-group">
        <label class="text-light" for="inputEmail">Reduction</label>
        <input style="border-radius:8px;" name="product_name" type="text" class="form-control form-control-sm"  value="<?php echo $r['product_reduction']; ?>" id="inputEmail" readonly>
    </div>
    </div>
    

    </div>


    <?php  else :   ?> 
    <div class="form-group">
        <label  class="text-light" for="inputEmail">Price</label>
        <input  style="border-radius:8px;" id="tb1"  onkeyup="calc(this)" type="text"   data-price="<?php $product_price ?>"  name="product_price" class="price form-control"  value="<?php echo $r['product_price']; ?>" id="inputEmail" readonly>
    </div>


    <?php  endif; ?>

    
    
    
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label class="text-light" for="inputEmail">Quantity</label>
        <input style="border-radius:8px;"  id="tb2"  onkeyup="calc(this)" name="quantity"   type="text" class="form-control form-control-sm"   id="inputEmail" placeholder="3" required>
    </div>
    </div>

    <div class="col">
    <div class="form-group">
    <label class="text-light" for="inputEmail">Total (FRW)</label>
    <input style="border-radius:8px;"  class="form-control form-control-sm"   id="total" name="total" value="0.0" readonly />
    </div>
    </div>
    </div>
    

    <div class="row">
    <div class="col">
    <div class="form-group">
        <label class="text-light" for="inputEmail"> Your Email</label>
        <input style="border-radius:8px;" name="client_email" type="email" class="form-control form-control-sm"   id="inputEmail" placeholder="Email" required>
    </div>

    </div>
    
    
    <div class="col">
    <div class="form-group">
        <label class="text-light" for="inputEmail">Your names</label>
        <input style="border-radius:8px;" name="client_names" type="text" class="form-control form-control-sm"   id="inputEmail" placeholder="Yves Himbaza" required>
    </div>
    </div>
    </div>


    

    <div class="form-group">
        <label class="text-light" for="inputEmail">Your phone number</label>
        <input style="border-radius:8px;" name="client_phone" type="text" class="form-control form-control-sm"   id="inputEmail" placeholder="0784436600" required>
    </div>

    
   
    <button type="submit"  name="order"class="btn btn-warning text-light"><strong><b>Press order</b></strong></button>



</form>

</div>
<div class="col-lg-3 col-sm-12">
  </div>


</div>
</div>


	
</section>
		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
     <?php include 'footer.php'?>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
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