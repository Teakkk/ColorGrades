<?php

/**
* 
*/
class Doi extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('form','url');
		$this->load->model('doi_model');
	$this->load->library('form_validation');
     
		   $this->load->library('session');
	}


	public function show_all_doi()
	{

		$data['all_doi']=$this->doi_model->get_all_doi();
		$data['dynamic_view']='doi/all_doi_categories';
		$this->load->view('doi/all_doi_categories',$data);
		


	}

	public function show_single_doi($doi_id=1){
		$this->load->helper('form');
		$data['doi']=$this->doi_model->single_doi($doi_id);
		$data['n_subject']=$this->doi_model->get_n_subject();
		$data['n_class']=$this->doi_model->get_n_class();
		$this->load->view('doi/show_single_doi',$data);
	}


	public function update_single_doi()
	{
		
			$this->doi_model->update_doi();
			echo "Gotovo
			<a href='show_all_doi'>nachalo </a> ";
		
        }

		
	public function add_form()
	{
		$data['n_subject']=$this->doi_model->get_n_subject();
		$data['n_class']=$this->doi_model->get_n_class();
		$this->load->helper('form');
		$this->load->view('doi/add_doi',$data);
	}
		public function add_new_doi()
	{
		$data = array(
		'profile' => $this->input->post('profile'),
		'criteria' => $this->input->post('criteria'),
		'class' => $this->input->post('class'),
		'n_subject_id' => $this->input->post('subject')
		);
		
		$this->doi_model->insert_doi($data);

		//$this->load->view('doi/add_doi', $data);
		$data['all_doi']=$this->doi_model->get_all_doi();
		$data['dynamic_view']='doi/all_doi_categories';
		$this->load->view('doi/all_doi_categories',$data);
	}


  


 		public function delete() 
 		 {
    		$id = $this->uri->segment(3);
    		$this->doi_model->delete_doi($id);
 
    		$data['all_doi']=$this->doi_model->get_all_doi();
		$data['dynamic_view']='doi/all_doi_categories';
		$this->load->view('doi/all_doi_categories',$data);
	}
	

	

}

?>
