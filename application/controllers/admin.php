<?php  

class admin extends CI_Controller
{

public function loginpage()
{

$this->load->view('login');

}
public function index()
{

$this->form_validation->set_rules('uname','username','required');
$this->form_validation->set_rules('password','password','required');

$this->form_validation->set_error_delimiters('<div class="btn btn-danger">','</div>');
if($this->form_validation->run())
{

if(isset($_POST['submit']))
{

$user=$_POST['uname'];
$password=$_POST['password'];
$this->load->library('session');
$user=$_SESSION['user'];
$this->load->model('admin_verify');
$r=$this->admin_verify->index($user,$password);
if($r)
{
redirect('user/index');

}
else
{
	redirect('admin/loginpage');
}

}

}

else
{
	$this->load->view('login');
}

}








}







 ?>