<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Users_model');
    }

    public function register() {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('usia', 'Usia', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'usia' => $this->input->post('usia'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => 'user'
            ];

            if ($this->Users_model->register($data)) {
                $this->session->set_flashdata('success', 'Registrasi berhasil! Silakan login.');
                redirect('auth/login');
            } else {
                $this->session->set_flashdata('error', 'Registrasi gagal, silakan coba lagi.');
                redirect('auth/register');
            }
        }
    }

    public function login()
{
    $this->load->library('session');
    $this->load->model('Users_model'); // Sesuaikan dengan model Anda

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->Users_model->get_user_by_email($email);

    if ($user && password_verify($password, $user->password)) {
        // Simpan session login
        $this->session->set_userdata([
            'id_user' => $user->id_user,
            'name' => $user->name,
            'role' => $user->role,
            'logged_in' => TRUE
        ]);

        // Redirect ke dashboard
        redirect('dashboard');
    } else {
        // Jika gagal, tampilkan notifikasi
        $this->session->set_flashdata('error', 'Email atau Password salah!');
        redirect('auth/login');
    }
}


    public function logout() {
        $this->session->unset_userdata(['id_user', 'name', 'role', 'logged_in']);
        redirect('auth/login');
    }
}
