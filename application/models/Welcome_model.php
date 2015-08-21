<?php

class Welcome_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->table_name = "test";
        $this->primary_key = 'id';
    }

    public function authenticate_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $db_result = $this->db->get("users");

        if ($db_result && !empty($db_result)) {

            if ($db_result->num_rows() == 1) {
                $user = $db_result->row();
                if ($user->status == 1) {
                    $this->session->set_userdata("user", $user);
                    $this->session->set_userdata('logged_in', TRUE);
                    return $this->session->userdata('logged_in');
                } else {
                    
                }
            }
        }
        return FALSE;
    }

}
