<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function home() {
        $this->load->view('user/home'); // Menampilkan view dari application/views/user/home.php
    }
}
?>
