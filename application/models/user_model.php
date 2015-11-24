<?php
class User_model extends CI_Model{
    public function validate_login()
    {
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $query = $this->db->get_where('users', array('email' => $email, 'password' => $password));
        if ($query->num_rows() == 1) 
        {
            return TRUE;
        }
        return FALSE;
    }

    public function add_admin()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $data = array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'password' => $password,
        'role' => 1
        );
        if ($this->db->insert('users', $data))
        {
            return TRUE;
        }
        return FALSE;
    }

    public function get_all_admins()
    {
        $q = $this->db->get_where('users', array('role' => 1));
        return $q->result_array();
    }
}