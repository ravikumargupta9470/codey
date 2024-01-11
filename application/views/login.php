<?php   include('header.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Pannel</title>
</head>

<body>
	
	<div class="container">
	<?php echo form_open('user/login')  ;  ?>
  <fieldset>
   
    
    <div class="form-group">
      <label for="exampleInputEmail1">UserName</label>
      <input type="email"  name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email Id">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <?php echo form_error('uname');?>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter address">
      <?php echo form_error('password');?>

    </div>
    
    
    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</body>
</html>
