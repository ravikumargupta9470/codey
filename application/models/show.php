<?php
class show extends CI_Model
{

public function data()
{
$r=$this->db->query("select *from student");

return($r->result());

}
public function delete($id)
{
	$this->db->query("delete from student where id='$id'");
	return(1);
}


}


?>