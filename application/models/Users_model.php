<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Pastikan database dimuat
    }

    // ✅ Method untuk register user
    public function register($data) {
        // Enkripsi password sebelum menyimpan
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $this->db->insert('users', $data);
    }

    // ✅ Method untuk login user
    public function login($email, $password) {
        $this->db->where('email', $email);
        $user = $this->db->get('users')->row();

        // Verifikasi password
        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }

    // ✅ Method untuk mengambil user berdasarkan email (tambahan)
    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('users')->row();
    }
}
