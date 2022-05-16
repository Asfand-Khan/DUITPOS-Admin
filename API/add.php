<?php
include("config.php");

/*
$select=mysqli_query($con,"Select * from grouptable");
while($row=mysqli_fetch_array($select))
{
	echo $row['groupId'];
    echo $row['groupName'];
}

if(isset($_POST["create_group"]))
	{
		$name=$_POST["groupname"];
		//echo($name);
		mysqli_query($con,"Insert Into tbl_my(my_name)values('$name')");
	}
	else
	{
		echo"<script>alert('Error in your SQL Syntex ... ')</script>";
	}
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./groupInsert.php">
        <input type="text" name="groupname">
        <button type="submit" name="create_group">Submit</button>
    </form>
</body>
</html>