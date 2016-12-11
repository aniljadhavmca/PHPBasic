<?php
include"connect.php";
if(isset($_GET['del']))
{
	$del=$_GET['del'];
	//echo $del;
	
	$sql="delete from student where srno='$del' ";
	if(mysql_query($sql))
	{
		//include"show.php";
		header('Location: show.php'); 
	}
}


?>