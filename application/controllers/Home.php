<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Film_model');
    }

    public function index() {
        $data['films'] = $this->Film_model->getAllFilms();
        $this->load->view('user/home', $data);
    }
}
?>
