<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Model {

public function __construct()
	{
		parent::__construct();
		
	}	
	public function ajouter($service = array())
	{
		$this->db->insert('service', $service);
	}

public function supprimer($id)
	{
$this->db->delete('service')->where('id',$id);

	}
	public function modifier($new_service = array(),$id)
	{

$this->db->update('service', $new_service)->where('id',$id);
	}


	public function get_all()
	{
return $this->db->get('service')->result();
; 

	}

	public function get($conditions=array())
	{
$tab= $this->db->get_where('service',$conditions)->result();
	return $tab;
	}
	
}

/* End of file service.php */
/* Location: ./application/models/service.php */