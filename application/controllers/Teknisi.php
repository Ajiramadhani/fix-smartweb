<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teknisi extends CI_Controller
{
    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
        $this->load->model('m_data');
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Dashboard Teknisi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('teknisi/index', $data);
        $this->load->view('templates/footer');
    }

    public function request()
    {
        $data['title'] = 'Request Barang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pout'] = $this->db->query("SELECT * FROM produk_out, user WHERE produk_out.user_id=id_user ORDER BY id_produk_out ASC")->result();
        // $data['pout'] = $this->m_data->get_data('produk_out')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('teknisi/request', $data);
        $this->load->view('templates/footer');
    }


    public function addrequest()
    {
        $data['title'] = 'Tambahkan Request Barang Baru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengguna'] = $this->m_data->get_data('user')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('teknisi/buatreq', $data);
        $this->load->view('templates/footer');
    }


    public function tambahreq()
    {
        $user = $this->session->userdata('id');
        $tambah = $this->input->post('formadd');
        $tanggal = date('d-m-Y H:i:s');

        for ($i = 0; $i < count($tambah); $i++) {
            $data[$i] = array(
                'user_id' => $user,
                'produk_id' => $tambah[$i]['produk_id'],
                'jumlah_out' => $tambah[$i]['jumlah_out'],
                'keterangan' => $tambah[$i]['keterangan'],
                'tanggal' => $tanggal,
                'status' => 0,
                'status_by' => 0
            );
            // var_dump($data[$i]);
            $this->m_data->insert_data($data[$i], 'produk_out');
        }
        redirect(base_url() . 'teknisi/request');
    }

    public function edit()
    {
    }
    public function hapus($id)
    {
        $where = array(
            'id_produk_out' => $id
        );

        $this->m_data->delete_data($where, 'produk_out');
        $this->session->set_flashdata('sukses', 'Dihapus');
        redirect('teknisi/request');
    }
}
