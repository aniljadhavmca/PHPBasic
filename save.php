<?php
include"connect.php";
if(isset($_POST['sub']))
{
	
	$name=$_POST['name'];
	$city=$_POST['city'];
	$course=$_POST['course'];
	//echo $name;
	
	$sql="insert into student (name,city,course) values ('$name','$city','$course')";
	
	if(mysql_query($sql))
	{
//		include"show.php";
		header('location: show.php');
	}
	
}


?>