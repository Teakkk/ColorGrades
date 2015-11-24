<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $is_logged = $this->session->userdata('is_logged');
        if (!(isset($is_logged) && $is_logged == TRUE))
        {
            redirect('login/index');
        }
    }

    public function index()
    {   
        $data['dynamic_view'] = 'admin/user_view';
        $this->load->view('admin/main_template', $data);
    }

    public function show_admin()
    {  
        $this->load->model('user_model'); 
        $data['all_admins'] = $this->user_model->get_all_admins();
        $data['dynamic_view'] = 'admin/show_admin_view';
        $this->load->view('admin/main_template', $data);
    }

    public function add_admin_validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Име', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Имейл', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Парола', 'trim|required|min_length[6]');

        if($this->form_validation->run() == TRUE)
        {
            $this->load->model('user_model');
            if ($this->user_model->add_admin() == TRUE) {
                $this->session->set_flashdata('msg', 'Успешно добави нов администратор!');
                redirect('user/show_admin');
            }
        }
        $this->show_admin();
    }


}