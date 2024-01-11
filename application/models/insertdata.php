<!DOCTYPE html>
<html>
<head>
	<link href="<?=base_url('as/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>

</body>
</html>

<?php

class insertdata extends CI_Model
{


public function index($name,$address,$phone,$img)
{
	$idd=$_SESSION['user_id'];
if($this->db->query("insert into student (name,address,phone,user_id,img) values('$name','$address','$phone','$idd','$img') "))
{

echo "<div class='btn btn-success container-fluid'>Data Inserted</div>";

$this->load->view('listdata');

}



} 
public function login($username,$password)
{

	echo $username;
}



}
?>