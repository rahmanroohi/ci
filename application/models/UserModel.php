<?php
	class UserModel extends CI_Model {
            
	    function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        function index()
        {
    		   $users = $this->db->get('users');
    		   $users = $users->result_array();
    		   return $users;
        }
        function find($id){
           $user = $this->db->get_where('users', array('id' => $id));
           $user = $user->result_array();
           return $user;
        }
        function update($data){
           $data = array(
			        'name' => $data['name'],
			        'email'  => $data['email'],
			        'username' => $data['username'],
			        'password'  => $data['password'],
		       );
           $this->db->replace('users', $data);
        }
        function destroy($id){
           $user = $this->db->get_where('users', array('id' => $id));
           print_r($user);
        }

    }
?>