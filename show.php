<div align="center">
<h3>Student data</h3>
<a href="index.html">HOME</a>
<table align="center" border="1">
<tr>
<th>Name</th>
<th>city</th>
<th>course</th>
<th>Remove</th>
<th>Update</th>
<?php
include"connect.php";

$sql="select * from student order by srno";

$result=mysql_query($sql);
while($row=mysql_fetch_row($result))
{
	echo"<tr>";
	echo"<td>$row[1]";
	echo"<td>$row[2]";
	echo"<td>$row[3]";
	echo"<td><a href='delete.php?del={$row['0']}'><img src=images/del.png width='30' height='15'></td>";
	echo"<td><a href='update.php?update={$row['0']}'><img src=images/update.jpg width='30' height='15'></td>";
}

?>
</table>
</div>