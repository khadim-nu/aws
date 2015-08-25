<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url', 'text', 'form');
        $this->load->model("Welcome_model");
        $this->load->library('session');
    }

    public function index() {
        if (!$this->session->userdata('logged_in')) {
            redirect("welcome/login");
        } else {
            redirect("welcome/home");
        }
    }

    public function login() {
        if (!$this->session->userdata('logged_in')) {
            $this->load->view('login');
        } else {
            redirect("welcome/home");
        }
    }

    public function home() {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('home');
        } else {
            redirect("welcome/login");
        }
    }

    public function authenticate() {
        if ($this->Welcome_model->authenticate_user()) {
            redirect("welcome/home");
        } else {
            redirect("welcome/login");
        }
    }
    public function logout() {
            $this->session->sess_destroy();
            redirect("welcome");
        
    }

    public function already_registered_domain() {
        $result = include base_url() . 'test.php';
        print_r($result);
    }

}
