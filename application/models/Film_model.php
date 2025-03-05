<?php
class Film_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk mengambil semua film
    public function get_all_films() {
        return $this->db->get('films')->result_array(); // Mengubah hasil menjadi array asosiatif
    }
    // Fungsi untuk menyimpan film ke database
    public function insert_film($data) {
        return $this->db->insert('films', $data);
    }

    // Fungsi untuk mengambil poster (URL atau path) berdasarkan ID
    public function get_poster($id) {
        $this->db->select('poster');
        $this->db->where('id', $id);
        $result = $this->db->get('films')->row();
        return $result ? $result->poster : null; // Poster sekarang berupa string (URL atau path)
    }

    // Fungsi untuk mengambil trailer (URL atau path) berdasarkan ID
    public function get_trailer($id) {
        $this->db->select('trailer');
        $this->db->where('id', $id);
        $result = $this->db->get('films')->row();
        return $result ? $result->trailer : null; // Trailer sekarang berupa string (URL atau path)
    }
}
?>
