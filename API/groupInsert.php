<?php
include("config.php");

if(isset($_POST["create_group"]))
{
	$name=$_POST["groupname"];
	// echo($name);
	//mysqli_query ($con,"INSERT INTO depttable VALUES ('Rizwan')");
	//mysqli_query($con,"Insert Into depttable(deptName)values('$name')");
	//mysqli_query($con,"Insert Into grouptable(groupName)values('$name')");
	// mysqli_query($con,"Insert Into grouptable(groupName)values('$name')");
    //mysqli_query($con,"Insert Into tbl_my(my_name)values('$name')");

	mysqli_query($con,"INSERT INTO `grouptable` (`groupName`) VALUES ('$name')");
	header("http://localhost/DUITPOS%20Admin/product.php");
}
else
{
	echo"<script>alert('Error in your SQL Syntex ... ')</script>";
}

	
// if(isset($_POST["create_group"]))
// 	{
// $select=mysqli_query($con,"Select * from grouptable");
// while($row=mysqli_fetch_array($select))
// {
// 	echo $row['groupName'];
// }
// }
// else
// {
// 	echo"<script>alert('Error in your SQL Syntex ... ')</script>";
// }

?>
