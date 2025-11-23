<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Users_model'); // load the model
    }

    public function login() {
        $data = [
            'TITLE' => 'Sign in',
            'BASE_URL' => base_url(),
            'CONTENT' => $this->load->view('auth/login', [], true)
        ];
        $this->load->view('template/auth_template', $data);
    }

    public function do_login() {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Enter username and password');
            redirect('auth/login');
            return;
        }

        $user = $this->Users_model->get_by_username($username);
        if (! $user || empty($user['password'])) {
            $this->session->set_flashdata('error', 'Invalid credentials');
            redirect('auth/login');
            return;
        }

        // password in DB must be a hash created with password_hash()
        if (password_verify($password, $user['password'])) {
            // optional rehash
            if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
                $this->db->where($user['id'] ? 'id' : $user['id'])->update(/* you may need to map id column if different */);
            }

            // set normalized session data
            $this->session->set_userdata([
                'user_id'  => $user['id'],
                'username' => $user['username'],
                'role'     => $user['role'],
            ]);

            redirect('home');
            return;
        }

        $this->session->set_flashdata('error', 'Invalid credentials');
        redirect('auth/login');
    }
}
?>