<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk register user baru
    public function register($data) {
        return $this->db->insert('users', $data);
    }

    // Fungsi untuk mendapatkan user berdasarkan email
    public function get_user_by_email($email) {
        return $this->db->get_where('users', ['email' => $email])->row();
    }

    // Fungsi untuk login user
    public function login($email, $password) {
        $user = $this->get_user_by_email($email);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }
}
?>
