<?php include('header.php');  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
	
	<div class="container">

<div class="table">
<table>
<tr>
	<td>Photo</td>
	<td>Name</td>

<td>Address</td>
<td>Phone</td>
<td>User_Id</td>

<td>Action</td>

</tr>
<?php if(count($q)>0)   :?>
<?php foreach($q as $qr):  ?>
<?php $id=$qr->id;  ?>
<tr>
	<td><img class="img img-thumbnail" src="<?php echo $qr->img; ?>" style="height: 60px;width: 80px;" /></td>
	<td><?php echo $qr->name;  ?></td>

<td><?php echo $qr->address;  ?></td>
<td><?php echo $qr->phone;  ?></td>
<td><?php echo $qr->user_id;  ?></td>

<td><a  href="<?php echo base_url().'index.php/user/delete/'.$id ;  ?>"  class="btn btn-danger">Delete</a></td>

</tr>
<?php   endforeach;?>

<?php else: ?>

<tr colspan='5'>no data found</tr>

	<?php  endif; ?>
</table>


</div>


	</div>

</body>
</html>