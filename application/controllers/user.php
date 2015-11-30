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
        $this->load->model('user_model'); 
    }

    public function index()
    {   
        $data['dynamic_view'] = 'admin/user_view';
        $this->load->view('admin/main_template', $data);
    }

    public function show_admin()
    {
        $data['all_admins'] = $this->user_model->get_all_admins();
        $data['dynamic_view'] = 'admin/show_admin_view';
        $this->load->view('admin/main_template', $data);
    }

    public function show_teacher()
    {  
        $data['all_teachers'] = $this->user_model->get_all_teachers();
        $data['dynamic_view'] = 'admin/show_teacher_view';
        $this->load->view('admin/main_template', $data);
    }

    public function add_admin_validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Име', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Имейл', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Парола', 'trim|required|min_length[6]');

        if($this->form_validation->run() == TRUE)
        {
            if ($this->user_model->add_admin() == TRUE) {
                $this->session->set_flashdata('success_msg', 'Успешно добави нов администратор!');
                redirect('user/show_admin');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с добавянето на администратор!');
            }
        }
        $this->show_admin();
    }

    public function add_teacher_validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Име', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('phone', 'Телефон', 'trim|required');
        $this->form_validation->set_rules('email', 'Имейл', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Парола', 'trim|required|min_length[6]');

        if($this->form_validation->run() == TRUE)
        {
            if ($this->user_model->add_teacher() == TRUE) {
                $this->session->set_flashdata('success_msg', 'Успешно добави нов учител!');
                redirect('user/show_teacher');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с добавянето на учител!');
            }
        }
        $this->show_teacher();
    }

    public function update_admin($id = 0)
    {   
        if ($id != 0) {
            if ($this->user_model->check_user_exist($id)) {
                $data['admin_info'] = $this->user_model->get_admin_info($id);
                $data['dynamic_view'] = 'admin/update_admin_view';
                $this->load->view('admin/main_template', $data);
            }else{
                redirect('user/show_admin');
            }
        }else{
            redirect('user/show_admin');
        }
    }

    public function update_admin_validate()
    {   
        $user_id = $this->input->post('user_id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Име', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Имейл', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Парола', 'trim|min_length[6]');

        if($this->form_validation->run() == TRUE)
        {   
            if ($this->user_model->update_admin($user_id) == TRUE) {
                $this->session->set_flashdata('success_msg', 'Успешно редактирахте администратор!');
                redirect('user/show_admin');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с редактирането на администратор!');
            }
        }
        $this->update_admin($user_id);
    }

    public function update_teacher($id = 0)
    {   
        if ($id != 0) {
            if ($this->user_model->check_user_exist($id)) {
                $data['teacher_info'] = $this->user_model->get_teacher_info($id);
                $data['dynamic_view'] = 'admin/update_teacher_view';
                $this->load->view('admin/main_template', $data);
            }else{
                redirect('user/show_teacher');
            }
        }else{
            redirect('user/show_teacher');
        }
    }

    public function update_teacher_validate()
    {   
        $user_id = $this->input->post('user_id');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'Име', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('lastname', 'Фамилия', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('phone', 'Телефон', 'trim|required');
        $this->form_validation->set_rules('email', 'Имейл', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Парола', 'trim|min_length[6]');

        if($this->form_validation->run() == TRUE)
        {   
            if ($this->user_model->update_teacher($user_id) == TRUE) {
                $this->session->set_flashdata('success_msg', 'Успешно редактирахте учител!');
                redirect('user/show_teacher');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с редактирането на учител!');
            }
        }
        $this->update_teacher($user_id);
    }

    public function delete_admin($id = 0)
    {
        if ($id != 0) 
        {
            if ($this->user_model->delete_admin($id) == TRUE) 
            {
                $this->session->set_flashdata('success_msg', 'Успешно изтрихте администратор!');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с изтриването на администратор!');
            }
        }else
        {
            $this->session->set_flashdata('error_msg', 'Грешка с изтриването на администратор!');
        }
        redirect('user/show_admin');
    }

    public function delete_teacher($id = 0)
    {
        if ($id != 0) 
        {
            if ($this->user_model->delete_teacher($id) == TRUE) 
            {
                $this->session->set_flashdata('success_msg', 'Успешно изтрихте учител!');
            }else
            {
                $this->session->set_flashdata('error_msg', 'Грешка с изтриването на учител!');
            }
        }else
        {
            $this->session->set_flashdata('error_msg', 'Грешка с изтриването на учител!');
        }
        redirect('user/show_teacher');
    }

}