<?php
include 'conn.php';
$ids=$_GET['id'];
$delete="delete from course_form where sn={$ids} ";
$query= mysqli_query($conn,$delete);
if($query)
{
	echo "delete successfully";
}
else
{
	echo "delete not successfully";
}
mysqli_close($conn);
header('location:display.php');
?>
