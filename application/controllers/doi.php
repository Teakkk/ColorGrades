<?php

/**
* 
*/
class Doi extends CI_Controller
{

function __construct()
{
	parent:: __construct();
	$this->load->model('doi_model');
	$this->load->library('form_validation');
}


public function show_all_doi()
{

	$data['all_doi']=$this->doi_model->get_all_doi();
	$data['dynamic_view'] = 'admin/all_doi_view';
    $this->load->view('admin/main_template', $data);


}

public function show_single_doi($doi_id=1){
	$this->load->helper('form');
	$data['doi']=$this->doi_model->single_doi($doi_id);
	$data['n_subject']=$this->doi_model->get_n_subject();
	$data['n_class']=$this->doi_model->get_n_class();
	$data['dynamic_view'] = 'admin/single_doi_view';
    $this->load->view('admin/main_template', $data);
}


public function update_single_doi()
{
		$this->doi_model->update_doi();
		redirect('doi/show_all_doi');	
}

	
public function add_form()
{
	$data['n_subject']=$this->doi_model->get_n_subject();
	$data['n_class']=$this->doi_model->get_n_class();
	$this->load->helper('form');
	$data['dynamic_view'] = 'admin/add_doi_view';
    $this->load->view('admin/main_template', $data);
}
	public function add_new_doi()
{
	$this->form_validation->set_rules('profile', 'Профил', 'trim|required');
    $this->form_validation->set_rules('criteria', 'Критерия', 'trim|required');
    $this->form_validation->set_rules('class', 'Клас', 'trim|required');
    $this->form_validation->set_rules('subject', 'Предмет', 'trim|required');
    if($this->form_validation->run() == TRUE)
    {
		$data = array(
		'profile' => $this->input->post('profile'),
		'criteria' => $this->input->post('criteria'),
		'class' => $this->input->post('class'),
		'n_subject_id' => $this->input->post('subject')
		);
		
		$this->doi_model->insert_doi($data);
		$this->show_all_doi();
	}else{
		$this->add_form();
	}
	
}





		public function delete() 
		 {
		$id = $this->uri->segment(3);
		$this->doi_model->delete_doi($id);

		redirect('doi/show_all_doi');
}




}

?>
