<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classes extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $is_logged = $this->session->userdata('is_logged');
        if (!(isset($is_logged) && $is_logged == TRUE))
        {
            redirect('login/index');
        }
        $this->load->model('classes_model');
    }
    public function show_classes()
    {
    	$this->load->helper('url');
    	$data['show_classes']=$this->classes_model->show_classes();
    	$data['dynamic_view'] = 'classes/show_classes';
        $this->load->view('admin/main_template', $data);
    }
    public function add_class()
    {
    	$data['leader_teacher']=$this->classes_model->get_leader_teacher();
        $data['n_class_classes']=$this->classes_model->get_n_class_classes();
        $data['n_year']=$this->classes_model->get_n_year();
        $data['n_class']=$this->classes_model->get_n_class();
        $this->load->helper('form');
        $data['dynamic_view'] = 'classes/add_class';
        $this->load->view('admin/main_template', $data);

    }
    public function insert_new_class()
   {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('class','Клас','required');
        $this->form_validation->set_rules('school_year','Учебна година','required');
        $this->form_validation->set_rules('classs','Паралелка','required');
        $this->form_validation->set_rules('leader_teacher','Класен ръководител','required');
        $this->form_validation->set_rules('num','Брай на учениците','trim|required');
        if(!empty($_POST)){
			 $_SESSION['num']=$_POST['num'];
		 }
        if($this->form_validation->run()=== FALSE)
        {
            $this->add_class();
        }else{
            $this->classes_model->insert_new_class();
            $data['dynamic_view'] = 'classes/add_students';
            $this->load->view('admin/main_template', $data);

        }
    }
    public function insert_new_students()
    {
		$this->load->library('form_validation');
		for($i=0;$i<$_SESSION['num'];$i++)
		{
			$this->form_validation->set_rules("first_name[$i]",'Име','trim|required');
			$this->form_validation->set_rules("last_name[$i]",'Фамилия','trim|required');
			$this->form_validation->set_rules("number_in_class[$i]",'Номер в класа','trim|required');
		}	
		if($this->form_validation->run()=== FALSE)
			{
				$data['dynamic_view'] = 'classes/add_students';
        		$this->load->view('admin/main_template', $data);
			}else
			{
				$this->classes_model->insert_new_students();
				$this->show_classes();
			}
	}
	public function show_students_info($class_id=1)
	{
		$_SESSION['2class_id']=$class_id;
		$data['students_info']=$this->classes_model->show_students_info($class_id);
		$data['dynamic_view'] = 'classes/show_students_info';
        $this->load->view('admin/main_template', $data);
	}
	 public function single_student_info($student_id = 1)
    {   
    	$this->load->library('session');
    	$_SESSION['student_id']=$student_id;
        $data['student_info']=$this->classes_model->single_student_info($student_id);
        $data['dynamic_view'] = 'classes/update_student';
        $this->load->view('admin/main_template', $data);
    }
    public function update_student()
    {
    	$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','Име','trim|required');
		$this->form_validation->set_rules('last_name','Фамилия','trim|required');
		$this->form_validation->set_rules('number','Номер в класа','trim|required');
		$this->form_validation->set_rules('id_of_student','ID_STUDENT','trim|required');
		if($this->form_validation->run()=== FALSE)
		{
			$this->single_student_info($_SESSION['student_id']);
		}else{
			$this->classes_model->update_student();
			$this->show_students_info($_SESSION['2class_id']);
		}
    }
}

?>
