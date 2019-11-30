
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
	<title>Mother's hub</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	 <!---Calling to an external Province & District autoload-->

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

<body>
	<!-- WRAPPER -->
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
				<div class="container-fluid">
                <?php include 'new_product.php';?>
					<!-- END OVERVIEW -->
					<div class="row">
						<div class=" col-sm-12 col-lg-">
                            <!-- RECENT PURCHASES -->
                            <div class="panel-footer">
									<div class="row">
                              
										
										<div class="col-md-6 text-right"><a href="" data-toggle="modal" data-target="#new_product" class="btn btn-primary">Add New Product</a></div>
                                        <div> <input class="form-control border-primary" id="myInput" type="text" placeholder=" Search your product........."> </div>
                                    </div>
								</div>
							<div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title">My products</h3>
                                    
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Product #</th>
												<th>Sub category</th>
												<th>Product</th>
												<th>Price</th>
												<th>Reduction</th>
												<th>Action</th>
											</tr>
										</thead>

<?php
$conn=mysqli_connect("localhost","root","","mothezhub");





$query1=mysqli_query($conn,"select * from product,sub_category where product.sub_cath_id=sub_category.sub_cath_id") or die("selecting error");



                while($row=mysqli_fetch_assoc($query1))
                    {
?>
										<tbody id="myTable">
											<tr>
												<td> <?php echo  $row['product_id']; ?></td>
												<td> <?php echo  $row['sub_cathe_name']; ?></td>

												<td><?php echo  $row['product_name']; ?></td>
												<td><?php echo  $row['product_price']; ?></td>
												<td><?php echo  $row['product_reduction']; ?>%</td>
												
												<td>
												<div class="btn-group">
												<?php echo "<a href='admin_view_product.php?product_id=". $row['product_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon   text-warning glyphicon-eye-open'></span></a>" ?> 
												 <?php echo "<a href='admin_product_update.php?product_id=". $row['product_id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon text-success glyphicon-pencil'></span></a>" ?>
                   
                                            
				                                  <?php echo "<a href='admin_product_delete.php?product_id=". $row['product_id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon text-danger glyphicon-trash'></span></a>" ?>
												 
												</div>
												<a href="admin_more_info.php?product_id=<?php echo $row["product_id"]; ?>" class="btn btn-success">add images</a>
												
												</td>
											</tr>
											
											
											
											
										</tbody>
<?php
}
?>
									</table>
								</div>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<!-- END OVERVIEW -->
					
						
					
						
						
						
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
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
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
    <script src="assets/scripts/klorofil-common.js"></script>
    

    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>

	<script>


//<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var categoryLists = new Array(2);
 categoryLists["empty"] = ["Select category"]; 
 
 
 categoryLists["babyz goods and items"]= ["room decoration and preparation","matress","duvet cover","quilt","bedding sets","bumpers","crib netting","pillow and pillow case","baby sheets"];
 categoryLists["motherlyz goods and items"]= ["pregnancy pillow","nursing pillow","bedding sets","breast pads","breast feeding pump","pregnancy and prenatal belt","feeding cover maternity"];
 categoryLists["toddlerz good and item"]= ["toddler room decoration","toddler room ornament","toddler bedding sets","toddler pillow and pillowcase"];
 categoryLists["Baby food"] = ["powdered milk", "yoghurt", "dry baby cereal and oats" ,"dessert " ,"veggies and grain flour "]; 
 categoryLists["Babys Goods and Items"] = ["jars", "veggies flour"]; 
 categoryLists["books"] = ["baby food cooking book ", "baby and toddler gaming books"]; 
 
 //categorytLists["OTHERS"]= ["Other product, Specify in type Field"];
 
 /* 
 * param selectObj - the select object which fired the on change event. 
 */ 
 function Change(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = categoryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("category"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 


	</script>

</html>
