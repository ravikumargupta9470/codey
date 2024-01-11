<?php include('header.php');
?>

<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>Data insert</title>
</head>

<body>
	<a class=" btn btn-warning conatiner" href="<?php echo site_url('user/show') ;?>" style="margin:20px;"> Show Data</a>
	<div class="container">
	<?php echo form_open_multipart('user/dataverify')  ;  ?>
  <fieldset>
   
    
    <div class="form-group">
      <label for="exampleInputEmail1">Your Name</label>
      <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('name');?>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Your Address</label>
      <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter address">
      <?php echo form_error('address');?>

    </div>
     <div class="form-group">
      <label for="exampleInputPassword1">Your Phone Number</label>
      <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter phone">
      <?php echo form_error('phone');?>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Upload your file</label>
      <input type="file" name="userfile" class="form-control" id="exampleInputPassword1" >
      
<?php if(isset($upload_error))
{

echo $upload_error;

}  ?>
    </div>

    
    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</body>
</html>