<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->dbforge();

        if ($this->session->userdata('role_id') != 1) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            // 'data' => $this->m_admin->lihat(),



        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    public function data()
    {
        $data = [
            'title' => 'Database',
            'data' => $this->m_admin->lihat()->result_array(),
            'data1' => $this->m_admin->lihat()->result_array(),

        ];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/data', $data);
        $this->load->view('admin/templates/footer', $data);
    }
    public function tambah_data()
    {
        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');

        $gambar = $_FILES['gambar'];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['overwrite'] = true;
        $config['max_size']     = '20000';
        $config['remove_spaces'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $data['error'] = $this->upload->display_errors();

            redirect('dashboard/data');
        } else {
            $data = [
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'gambar' => $this->upload->data('file_name')
            ];
            $this->m_admin->tambah('tb_galeri', $data);

            redirect('dashboard/data');
        }
    }
    public function edit_data()
    {
        $id = $this->input->post('id');

        $nama = $this->input->post('nama');
        $deskripsi = $this->input->post('deskripsi');

        $gambar = $_FILES['gambar'];

        if (empty($gambar['name'])) {
            $data = [
                'nama' => $nama,
                'deskripsi' => $deskripsi,
            ];
            $this->m_admin->ubah(['id' => $id], 'tb_galeri', $data);


            redirect($this->agent->referrer());
        } else {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['overwrite'] = true;
            $config['max_size']     = '20000';
            $config['remove_spaces'] = true;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data['error'] = $this->upload->display_errors();
                $this->session->set_flashdata('message', 'Periksa file foto!');

                redirect($this->agent->referrer());
            } else {
                // $f = $this->db->query('SELECT foto FROM kandidat WHERE id_kandidat='.$id)->row();
                $f = $this->db->select('gambar')->get_where('tb_galeri', ['id' => $id])->row();
                unlink('./uploads/' . $f->gambar);
                $data = [
                    'nama' => $nama,
                    'deskripsi' => $deskripsi,
                    'gambar' => $this->upload->data('file_name')
                ];
                $this->m_admin->ubah(['id' => $id], 'tb_galeri', $data);
                $this->session->set_flashdata('message', 'Data berhasil diubah');
                redirect($this->agent->referrer());
            }
        }
    }
    public function hapus_data($id)
    {
        $where = array('id' => $id);

        $data = $this->m_admin->ambil_id_gambar('tb_galeri', $id);
        $path = './uploads/';
        @unlink($path . $data->gambar);
        if ($this->m_admin->delete_gambar('tb_galeri', $id) == true) {
            # code...
            $this->m_admin->hapus($where, 'tb_galeri');

            $this->session->set_flashdata('message', 'besahasil di hapus');
        }
        redirect('dashboard/data');
    }
}
