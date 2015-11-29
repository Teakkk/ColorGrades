<?php

/**
* 
*/
class Doi_model extends CI_Controller
{
	
	public function get_all_doi()
	{
		$this->db->select('*');
		$this->db->from('doi_categories');
		$this->db->join('n_subject', 'n_subject.subject_id = doi_categories.n_subject_id');
		$this->db->join('n_class', 'n_class.n_class = doi_categories.class');
		$q= $this->db->get();
		return $q->result_array();
	}

	public function get_n_class()
	{
		$query=$this->db->get('n_class');
		
		return $query->result_array();
	}
	public function get_n_subject()
	{
		$query=$this->db->get('n_subject');
		return $query->result_array();
	}
	public function single_doi($doi_id)
	{
		$q=$this->db->where('doi_id',$doi_id);
		$this->db->select('*');
	$this->db->from('doi_categories');
		$this->db->join('n_subject', 'n_subject.subject_id = doi_categories.n_subject_id');
		$this->db->join('n_class', 'n_class.n_class = doi_categories.class');

	$q= $this->db->get();
		return $q->row_array();

	}


	public function insert_doi($data)
	{
		$this->db->insert('doi_categories', $data);
	 	
	 }

	 	public function update_doi()
    {
       
       $data = array(
       'profile' => $this->input->post('profile'),
      'criteria' =>$this->input->post('criteria'),
       'class' => $this->input->post('class'),
        );
       	$data2 = array( 'subject_type' => $this->input->post('subject')
 );
        $this->db->where('doi_id', $this->input->post('id_of_doi'));
       $this->db->update('doi_categories', $data);
             $this->db->update('n_subject', $data2);
    }

    public function delete_doi($id) 
    {
    		$this->db->where('doi_id', $id);
    		$this->db->delete('doi_categories');
	}

	
}


?>
