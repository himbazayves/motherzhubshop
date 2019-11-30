
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    




/* Dropdown Button */
.dropbtn {
background-color:#FF8C00;
color: white;
margin-top:35px;
margin-right:30px;
margin-bottom:20px;



font-size: 16px;
border-radius:12px;
border: none;
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}

.dropdown1 {
position: relative;
display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 300px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;

}
.nav-link:hover .nav-link{
	background-color: pink;


}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: pink;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: pink;}

.dropdown1:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown1:hover .dropbtn1 {background-color: pink;}


@media screen and (max-width: 1200px) {
    #b{

        color:black;
    }
  
}
</style>

<div style="background:#FF8C00" class="py-2">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-dark mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text text-dark">Kigali, Rwanda</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-danger mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text text-dark">mothershub@gmail.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text text-dark">+ 250 788 344 649</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

    <nav  id="b" class="navbar navbar-expand-lg navbar-dark bg-light ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.php"><img style="heigt:80px; width:110px; " src="images/img/logo.png"><img></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span style="color: rgb(241, 122, 142)" class="oi oi-menu"></span style="color: rgb(241, 122, 142)"> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav text-warning ml-auto">
	        
                <li class="nav-item">

<div class="dropdown">
<button class="dropbtn">Shop with Us</button>
<div class="dropdown-content">
<a href="baby_food.php">Baby Food</a>
<a href="baby_good.php">Baby Goods & Items</a>
<a href="mother_good.php">Motherly’s Goods & Items</a>
<a href="toddler_good.php">Toddler’s Good & Items </a>

</div>
</div>



</li> 
<li class="nav-item "><a style="color:red" href="index.php" id="b" class="nav-link pl-0 "><b> <strong>Home</a></b> </strong></li>
<li class="nav-item dropdown1"><a href="book.php" id="book"  style="color:red" id="b" class="nav-link dropbtn1"><b> <strong>Books </a></b> </strong>



<div class="dropdown-content">
<a href="product.php?sub=baby food cooking book">Baby food Cooking Book </a>
<a  href="product.php?sub=baby and toddler gaming books " class="disabled" readonly>
Baby and Toddler Gaming Books 
</a>

<div>
 


</li>
<li class="nav-item "><a style="color:red" href="furniture.php" id="b" class="nav-link pl-0"> <b> <strong>Furniture</a> </b> </strong></li>



<li class="nav-item"><a href="Mommylicious_club.php" style="color:red" class="nav-link " id="b"><b> <strong>Mommylicious club </a></b> </strong></li>

<li class="nav-item"><a href="blog.php" style="color:red" id="b" class="nav-link "><b> <strong>Blog</a></b> </strong></li>
             


            
<li class="nav-item"><a href="about.php"  style="color:red" id="b" class="nav-link "><b> <strong>About Us</a></b> </strong></li>      
<li class="nav-item"><a href="contact.php" id="b" style="color:red" class="nav-link"><b> <strong>Contact Us</a></b> </strong></li>
             
	        </ul>
	      </div>
	    </div>
	  </nav>