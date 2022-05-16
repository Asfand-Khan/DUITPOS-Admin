<?php
include("config.php");

if(isset($_POST["create_dept"]))
{
	$name=$_POST["deptname"];
	// echo($name);
	//mysqli_query ($con,"INSERT INTO depttable VALUES ('Rizwan')");
	//mysqli_query($con,"Insert Into depttable(deptName)values('$name')");
	//mysqli_query($con,"Insert Into grouptable(groupName)values('$name')");
	// mysqli_query($con,"Insert Into grouptable(groupName)values('$name')");
    //mysqli_query($con,"Insert Into tbl_my(my_name)values('$name')");

	mysqli_query($con,"INSERT INTO `depttable` (`deptName`) VALUES ('$name')");
	header("http://localhost/DUITPOS%20Admin/product.php");
}
else
{
	echo"<script>alert('Error in your SQL Syntex ... ')</script>";
}

?>