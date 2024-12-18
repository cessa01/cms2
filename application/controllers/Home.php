<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul'     => "Beranda | Cessa",
            'konfig'    => $konfig,
            'kategori'    => $kategori,
            'caraousel'    => $caraousel,
            'konten'    => $konten,
        );
		$this->load->view('beranda',$data);
	}
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori',$id);
        $konten = $this->db->get()->result_array();

        $this->db->from('kategori');
        $this->db->where('id_kategori',$id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;
        $data = array(
            'judul'     => $nama_kategori." | Movies",
            'nama_kategori' => $nama_kategori,
            'konfig'    => $konfig,
            'kategori'    => $kategori,
            'konten'    => $konten,
        );
		$this->load->view('kategori',$data);
	}
    public function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul'     => $konten->judul." | Cessa",
            'konfig'    => $konfig,
            'kategori'    => $kategori,
            'konten'    => $konten,
        );
		$this->load->view('detail',$data);        
    }

    function search(){
        //     // Menentukan jumlah item konten yang akan ditampilkan per halaman
        //     $limit = 9;
            
        //     // Mengambil offset dari URL, digunakan untuk pagination (segment ke-3 di URL)
        //     $offset = $this->uri->segment(3, 0); 
            
        //     // Ambil keyword pencarian jika ada
           $keyword = $this->input->get('keyword'); // Mengambil parameter 'keyword' dari query string
        
        //     // Ambil konfigurasi
            $this->db->from('konfigurasi');
          $konfig = $this->db->get()->row();
        
        //     // Ambil data carousel
            $this->db->from('caraousel');
            $caraousel = $this->db->get()->result_array();
        
        //     // Ambil kategori
           $this->db->from('kategori');
            $kategori = $this->db->get()->result_array();
        
        //     // Mengambil data konten dari tabel 'konten' dengan join ke tabel 'kategori' dan 'user'
             $this->db->from('konten a'); // Alias 'a' untuk tabel 'konten'
            $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left'); // Join dengan tabel 'kategori'
             $this->db->join('user c', 'a.username=c.username', 'left'); // Join dengan tabel 'user'
            
        //     // Jika ada keyword pencarian, tambahkan kondisi pencarian
             if ($keyword) {
                $this->db->like('a.judul', $keyword); // Pencarian di kolom judul
             }
            
            $this->db->order_by('tanggal', 'DESC'); // Mengurutkan berdasarkan tanggal terbaru
           // $this->db->limit($limit, $offset); // Membatasi jumlah konten yang ditampilkan
            $konten = $this->db->get()->result_array(); // Mengambil data konten
        
        //     // Menghitung total jumlah konten untuk keperluan pagination
         //    $this->db->from('konten a'); // Mengambil data dari tabel 'konten' kembali
        //     $total_konten = $this->db->count_all_results(); // Menghitung total semua konten yang tersedia
        
        //     // Menyiapkan data untuk view
             $data = array(
                'judul'  => "Beranda - Hasil Pencarian",
                'konfig' => $konfig,
                'kategori' => $kategori,
               'caraousel' => $caraousel,
               'konten' => $konten,
        //         'total_konten' => $total_konten,  // Total jumlah konten untuk pagination
        //         'limit' => $limit,                // Batas jumlah konten per halaman
        //         'offset' => $offset    
             );
        
        //     // Load view dengan data yang sudah diproses
             $this->load->view('beranda', $data);
        }
}
