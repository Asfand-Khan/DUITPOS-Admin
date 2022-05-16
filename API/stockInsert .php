<?php
include("config.php");
mysqli_query($con,"INSERT INTO stocktable(stockProduct,stock,stockLowLevel) VALUES ('a','b','c')");

// if(isset($_POST["create_group"]))
// 	{
// 		$name=$_POST["groupname"];

// 	}
// 	else
// 	{
// 		echo"<script>alert('Error in your SQL Syntex ... ')</script>";
// 	}
?>
