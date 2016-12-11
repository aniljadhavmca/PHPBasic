<?php
include"connect.php";
if(isset($_POST['sub']))
{
	$srno=$_POST['srno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$course=$_POST['course'];
	//echo $name;
	
	$sql="update student set name='$name',city='$city',course='$course' where srno='$srno' ";
	
	if(mysql_query($sql))
	{
		include"show.php";
	}
	
}


?>