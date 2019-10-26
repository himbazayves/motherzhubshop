
<?php
if(isset($_POST['register'])){
    // Include the database configuration file
    include_once 'dbconfig.php';
    $prodname=$_POST['prodname'];
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO images (id,file_name, product_name) VALUES (NULL,'$fileName','$prodname')");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
}
?>


<?php
@session_start();
$conn=mysqli_connect('localhost','root','','mothezhub') or die('Connection fail');
if(!$conn){
    die(mysqli_connect_error());
}
else{
if(isset($_POST['register']))
{
 $prodname=$_POST['prodname'];
 $price=$_POST['price'];
 $reduction=$_POST['reduction'];
 $description=$_POST['description'];
 $category=$_POST['category'];
 $subcat=$_POST['sub-cat'];
// $img=$_POST['img'];
//to search if tin number exist


//file uploads------------------------------------------------------------
if(isset($_FILES['prodimg']) && $_FILES['prodimg']['name']!="")
	{
	$photo_name=$_FILES['prodimg']['name'];
	$photo_temp=$_FILES['prodimg']['tmp_name'];
	$photo_size=$_FILES['prodimg']['size'];
	$folder=$target_dir = 'uploads/';
	$res=$target_dir.$photo_name;
	$number=0;
	while(file_exists($res))
	{
	$number++;
	$photo_ext=".jpg" or ".gif" or ".png" or ".bmp" or ".jpeg";
	$name1=str_replace($photo_ext," ",$photo_name);
	$new_name=$name1."(".$number.")";
	$new_name_ext=$folder . $new_name . $photo_ext;
	$res=$new_name_ext;
	}
	$result=move_uploaded_file($photo_temp,$res);
	}
	//upload
	//connect server
	//connect database
	$_SESSION['front']=@$res;


	
//end of file uploads-----------------------------------------------------
$sqlhey = $conn->query("select *  from category where cathe_name='$category'");
//$row=mysqli_fetch_assoc($sqlhey);
$count=mysqli_num_rows($sqlhey);

if($count == 0)
{

$sql1 =$conn->query("INSERT INTO category (cathe_name)
VALUES ( '$category')") or die(mysql_error());
}
$sql00 = $conn->query("select *  from category where cathe_name='$category'");
$row=mysqli_fetch_assoc($sql00);
$cathe_id=$row['cathe_id'];
$sqlhey1 = $conn->query("select *  from sub_category where cathe_id='$cathe_id'");
//$row=mysqli_fetch_assoc($sqlhey);
$count1=mysqli_num_rows($sqlhey1);

if($count1 == 0)
{
$sql10 =$conn->query("INSERT INTO sub_category (sub_cath_id,cathe_id,sub_cathe_name)
VALUES ( null,'$cathe_id','$subcat')") or die(mysql_error());
}
$sql01 = $conn->query("select *  from sub_category where sub_cathe_name='$subcat'");
$row1=mysqli_fetch_assoc($sql01);
$sub_cathe_id=$row1['sub_cath_id'];

 $sql2 = $conn->query("INSERT INTO product (product_name,product_price,product_reduction,product_description,product_picture,sub_cath_id)
VALUES ( '$prodname','$price','$reduction','$description','".$_SESSION['front']."','$sub_cathe_id')") or die(mysql_error());
//to insert uid from company to user
 
   
    
    if ($sql2== TRUE )
     {
       echo "<script>alert('product saved successfull')</script>";
     }
     else{
      echo "<script>alert('product is not saved successfull')</script>";

     }
     }
else
{
}
}
?>

<script type="text/javascript" src="js/category-autoload.js"> </script>
<div class="modal fade " style="background:black; opacity:0.9; font-family: 'Tangerine', serif; font-size: 30px; "  id="new_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">New product</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="new_product" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">


      <div class="modal-body mx-3">
        <div class="md-form mb-5">
         
          <label data-error="wrong" data-success="right" for="orangeForm-name">Product name</label>
          <input type="text" id="orangeForm-name" class="form-control validate" name="prodname">
          
        </div>
        <div class="md-form mb-5">
         
          <label data-error="wrong" data-success="right" for="orangeForm-email">Poduct Price</label>
          <input type="number" id="orangeForm-email" class="form-control validate" name="price">
         
        </div>

        <div class="md-form mb-5">
         
          <label data-error="wrong" data-success="right" for="orangeForm-email">Product reduction</label>
          <input type="number" id="orangeForm-email" class="form-control validate" name="reduction">
         
        </div>

        <div class="md-form mb-5">
         
          <label data-error="wrong" data-success="right" for="orangeForm-email"> Product Description</label>
          <input type="text" id="orangeForm-email" class="form-control validate" name="description">
         
        </div>



        <div class="md-form mb-5">
          
          <label data-error="wrong" data-success="right" for="orangeForm-email">product cathegory </label>
          
           

           <select id="input-style" name="category" onChange="Change(this);" class="form-control validate">
<option value="empty">Select category</option>

 <option>babyz goods and items</option>
  <option>motherlyz goods and items</option>
   <option>toddlerz good and item</option>
    <option>essential goods of motherhood</option>
    <option>Baby food</option>
    
	 
 </select>
        </div>

        <div class="md-form mb-5">
         
          <label data-error="wrong" data-success="right" for="orangeForm-email">  product sub cathegory</label>
          <select name="sub-cat" id="category" style="width:98%;height:40px;box-shadow: 0px 0px 0.5px 0.5px dimgray;"><option value=" " type="text" class="form-control validate">Select Subcategory</option>

           


          </select>
        </div>
        


        <div class="md-form mb-4">
         
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Upload  productpicture</label>
          <input type="file" id="orangeForm-pass" class="form-control validate" name="prodimg">
         
        </div>

        <div class="md-form mb-4">
         
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Additional  image</label>


        <input  class="form-control" type="file" name="files[]" multiple >

           
        </div>

      </div>
      
        <button class="btn btn-block btn-primary " name="register">Create product</button>
      </div>
    </div>
    </form>
  </div>
</div>

<div class="text-center">
 <!-- <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>-->
</div>