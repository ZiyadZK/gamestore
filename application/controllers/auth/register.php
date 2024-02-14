<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('model_user');
    }

    public function index() {
        $this->load->view('auth/view_register');
    }

    public function verify() {
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Check if the email / username is already exist
        if($this->model_user->isEmailExist($email)) {
            $this->session->set_flashdata('register', 'email_exist');
            return redirect(base_url('/auth/register'));
        }

        if($this->model_user->isUsernameExist($username)) {
            $this->session->set_flashdata('register', 'username_exist');
            return redirect(base_url('/auth/register'));
        }

        $newData = [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];
        $this->model_user->createUser($newData);
        return redirect(base_url('/auth/login'));
    }
}