<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('model_user');
    }

    public function index() {
        $this->load->view('auth/view_login');
    }

    public function verify() {
        $username_email = $this->input->post('username_email');
        $password = $this->input->post('password');
        $logged = $this->input->post('logged');

        // var_dump($username_email, $password, $logged);
        $result = $this->model_user->login($username_email, $password);
        if(!$result) {
            $this->session->set_flashdata('login', 'wrong_credentials');
            return redirect(base_url('/auth/login'));
        }
        $this->session->set_userdata('userdata', $result);
        return redirect(base_url('/'));
    }
}