<?php 

class user extends CI_Controller
{




public function login()
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

$this->load->model('admin_verify');
$r=$this->admin_verify->index($user,$password);
if($r)
{
	
	$_SESSION['user_id']=$r;
	?>
<div class="btn btn-primary container-fluid">Welcome <?php  echo $_SESSION['user_id']; ?></div>

	<?php
 $this->load->view('listdata');
}
else
{
	 return redirect('user/login');
}

}

}

else
{
	$this->load->view('login');
}

}














public function dataverify()
{
	 $config['upload_path'] = './uploads/';

                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload',$config);

$this->form_validation->set_rules('name','name','required');
$this->form_validation->set_rules('address','address','required');
$this->form_validation->set_rules('phone','phone','required');
$this->form_validation->set_error_delimiters('<div class="btn btn-danger">','</div>');
if($this->form_validation->run()&& $this->upload->do_upload())
{



if(isset($_POST['submit']))
{

$name=$_POST['name'];
$address=$_POST['address'];

$phone=$_POST['phone'];
$data=$this->upload->data();
$img_path=base_url('uploads/'.$data['raw_name'].$data['file_ext']);

$this->load->model('insertdata');
$this->insertdata->index($name,$address,$phone,$img_path);


}
}
else
{


$upload_error=$this->upload->display_errors();

$this->load->view('listdata',compact('upload_error'));
	
	
}

}
public function show()
{
$this->load->model('show');
$q=$this->show->data();

$this->load->view('showdata',['q'=>$q]);


}
public function delete($id)
{ if($id)
	{


	$this->load->model('show');
	$t=$this->show->delete($id);
	if($t==1)
	{

redirect('user/show');

	}

}
}




public function index()
{
 


	if($_SESSION['user_id']==""&&!isset($_SESSION['user_id']))
	{
	return redirect('listdata');	
	}


	$this->load->view('listdata');
}





}









  ?>
