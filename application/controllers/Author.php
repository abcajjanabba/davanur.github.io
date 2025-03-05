<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
        $this->load->model('Film_model'); 
        $this->load->helper(array('form', 'url')); 
    }

    public function dashboard() {
        $data['films'] = $this->Film_model->get_all_films(); 
        $this->load->view('author/dashboard', $data);
    }

    public function uploadFilm() {
        if ($this->input->post()) { 
            $judul = $this->input->post('judul');
            $trailer = $this->input->post('trailer');
            $poster = $this->input->post('poster');
            $deskripsi = $this->input->post('deskripsi');
            $genre = $this->input->post('genre');
            $tahun = $this->input->post('tahun');
            $negara = $this->input->post('negara');
            $rating = $this->input->post('rating');
            $durasi = $this->input->post('durasi');


            $data = [
                'judul' => $judul,
                'trailer' => $trailer,
                'poster' => $poster,
                'deskripsi' => $deskripsi,
                'genre' => $genre,
                'tahun' => $tahun,
                'negara' => $negara,
                'rating' => $rating,
                'durasi' => $durasi
            ];

            $this->Film_model->insert_film($data);
            echo "Upload Berhasil!";
        } else {
            $this->load->view('author/upload_film');
        }
    }

    public function home() {
        $data['films'] = $this->Film_model->get_all_films();

        if (empty($data['films'])) {
            die("⚠️ Tidak ada data film yang dikembalikan dari model!");
        }

        $this->load->view('user/home', $data);
    }

    // Menampilkan gambar poster
    public function poster($id) {
        $film = $this->Film_model->get_poster($id);

        if ($film && !empty($film->poster)) {
            header("Content-Type: image/jpeg");
            echo base64_decode($film->poster);
        } else {
            show_404();
        }
    }

    // Menampilkan trailer video
    public function trailer($id) {
        $film = $this->Film_model->get_trailer($id);

        if ($film && !empty($film->trailer)) {
            header("Content-Type: video/mp4"); 
            echo base64_decode($film->trailer);
        } else {
            show_404();
        }
    }
}
?>
