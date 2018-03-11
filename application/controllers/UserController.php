<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {
    
    function __construct()
     {
            parent::__construct();
            $this->load->helper('url');
     }
	public function index()
	{
        $this->load->model('UserModel');
        $data['users'] = $this->UserModel->index();
       

        $this->load->view('_partials/_header');
        $this->load->view('allusers',$data);
        $this->load->view('_partials/_footer');
	}
	public function edit($id){
		 $this->load->helper('form');
		 $this->load->model('UserModel');
	     $user = $this->UserModel->find($id);
         
      
         $data['user'] = $user;

         $this->load->view('_partials/_header');
         $this->load->view('users/edit',$data);
         $this->load->view('_partials/_footer');
	}
	public function update(){
		$this->load->model('UserModel');
        $user = $this->UserModel->find($this->input->post('user_id'));

        print_r($user);

		$password = $this->input->post('password') == '' ? $user[0]['password'] : $this->input->post('password'); 
		$data = array(
			           'id' => $this->input->post('user_id'),
			           'name' => $this->input->post('name'),
			           'email' => $this->input->post('email'),
			           'username' => $this->input->post('username'),
			           'password' => password_hash($password, PASSWORD_BCRYPT), 
			         );
		$this->load->model('UserModel');
		$this->UserModel->update($data);
		
		redirect('users');
		
	}
	public function destroy($id){
          $this->load->model('UserModel');
          $this->UserModel->destroy($id);
          
	}
}
