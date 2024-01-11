<?php
class admin_verify extends CI_Model
{


public function index($user,$password)
{
	$q=$this->db->query("select *from users where username='$user' and password='$password'");
if($q)
{
return($q->row()->username);
}


}


}


?>