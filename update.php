<div align='center'><h3>Update student information</h3></div>
<?php
include"connect.php";
if(isset($_GET['update']))
{
	$update=$_GET['update'];
	//echo $update;
	
	$sql="select * from student where srno='$update' ";
	$result=mysql_query($sql);
	while($row=mysql_fetch_row($result))
	{
		echo "<form name='myform' method='post' action='update_rec.php'>";
		echo "<table align='center'>";
	echo"<tr>";
	echo"<td> <input type='hidden' name='srno' id='srno' value='{$row['0']}'>";
	echo"<tr>";
	echo"<td>Name : <input type='text' name='name' id='name' value='{$row['1']}'>";
	echo"<tr>";
	echo"<td>city : <input type='text' name='city' id='city' value='{$row['2']}'>";
	echo"<tr>";
	echo"<td>course : <input type='text' name='course' id='course' value='{$row['3']}'>";
	echo"</tr>";
	echo "<td><input type='submit' name='sub' value='submit'>";
	
	echo "<table>";
	echo "</form>";
	
	}
}

?>