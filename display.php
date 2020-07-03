<body id="display-bg">
<?php include 'link.php' ; ?>
<div class="container display-container">
 		<a href="index.php"><input class="btn btn-primary" style="margin-bottom: 1%;" type="button" value="Home"></a>
 		<div class="table-responsive table-div">
 			<table class="table table-bordered table-bg">
 			<thead class="thead-dark">
 			<tr>
 				<th>Sn.</th>
 				<th>Name</th>
 				<th>Email</th>
 				<th>Phone no.</th>
 				<th>Gender</th>
 				<th>Qualificaion</th>
 				<th>College</th>
 				<th>Language</th>
 				<th colspan="2">Operation</th>
 			</tr>	
 		</thead>
 		
 		<?php 
include 'conn.php' ;
$list="select * from course_form ";
$query= mysqli_query($conn,$list);


while ($res=mysqli_fetch_array($query)) {
	
?>
	<tbody>
 			<tr >
 				<td><?php echo $res['sn']; ?></td>
 				<td><?php echo $res['name']; ?></td>
 				<td><?php echo $res['email']; ?></td>
 				<td><?php echo $res['phone']; ?></td>
 				<td><?php echo $res['gender']; ?></td>
 				<td><?php echo $res['qualification']; ?></td>
 				<td><?php echo $res['college']; ?></td>
 				<td><?php echo $res['language']; ?></td>
 				<td class="edit"><a data-toggle="tooltip" data-placement="bottom" title="Edit" href="update.php?id=<?php echo $res['sn']; ?>"><i class="fa fa-edit"></i></a></td>
 				<td class="delete"><a  href="delete.php?id=<?php echo $res['sn']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete" ><i class="fa fa-trash"></i></a></td>
 			</tr>
 			<?php
}

?>
 		 		</tbody>
 		</table>


 			
 		</div>
 		
 	</div>
</body>