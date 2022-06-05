<?php
include("config.php");

if(isset($_POST["create_product"]))
	{
		$name=$_POST["pdname"];
		$color=$_POST["pdcolor"];
		$group=$_POST["pdgroup"];
		$dept=$_POST["pddept"];
		$tag=$_POST["pdtag"];
		$cost=$_POST["pdcost"];
		$price=$_POST["pdprice"];
		$unit=$_POST["pdunit"];
		$online=$_POST["pdonline"];
		$desc=$_POST["pddesc"];
		
	/*Image Uploadig*/
	
	$path="../images/".basename($_FILES["pdimage"]["name"]);
	$size=$_FILES["pdimage"]["size"];
		
	if(move_uploaded_file($_FILES["pdimage"]["tmp_name"],$path))
	{
		mysqli_query($con,"Insert Into producttable(productGroup,productTag,productDepartment,productName,productColor,productImage,productCode,productPrice,productCost,productDescription,productUnit,productOnline) 
		values('$group','$tag','$dept','$name','$color','$path','#dummycode','$price','$cost','$desc','$unit','$online')");
		header("location:../product.php");
	}
	else
	{
		echo"<script>alert('Error in your SQL Syntex ... ')</script>";
	}
		/*Image Uploadig End*/
		
		
	/*	if($query)
		{
			
			header("location:customers.php");
			echo"<script>alert('Save Record Successfully')</script>";
		}
		else
		{
			echo"<script>alert('Error in your SQL Syntex ... ')</script>";
		}*/
		
	}
?>
