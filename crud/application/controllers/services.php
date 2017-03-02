<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('service','s');
	$this->load->view('_header');
	$this->output->enable_profiler();
}
	public function index()
	{
	$data = array('services' => $this->s->get_all(),
		"message"=>"nos services"

		 );

		$this->load->view('service/index',$data);
		
	}

public function news()
	{
		$data = array('titre' => "nouveau service" );
		$this->load->view('service/new',$data);
	}
	
	public function create()
	{
		$this->s->ajouter($this->input->post());
		echo "succès d'ajout";
	}
	
	public function show($id)
	{
$resultat=$this->s->get(array('id'=>$id));
	$data['service']=$resultat[0];	
	$this->load->view('service/show', $data, FALSE);

	}
	public function edit($id)
	{
		
	}
	public function update()
	{
		
	}
	public function delete($id)
	{
		
	}
	
	
	
}

/* End of file services.php */
/* Location: ./application/controllers/services.php */