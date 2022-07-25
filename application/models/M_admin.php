<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class m_admin extends CI_Model
{
    // CRUD
    function lihat()
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id', 'ASC');
        return $this->db->get('');
    }
    function detail_data($id)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->where('id', $id);
        $this->db->order_by('id', 'ASC');
        return $this->db->get('')->row();
    }

    function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }
    function ubah($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function ambil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->order_by('id', 'ASC');

        return $this->db->get('');
    }

    public function ambil_id_gambar($table, $id)
    {
        $this->db->from($table);
        $this->db->where('id', $id);
        $result = $this->db->get('');
        if ($result->num_rows() > 0) {
            return $result->row();
        }
    }

    public function delete_gambar($table, $id)
    {

        $this->db->where('id', $id);
        $this->db->from($table);
        return true;
    }


    public function cari_sql($key)
    {
        // $this->dbforge->add;

        $this->db->select("*");
        $this->db->join('kategori', 'data.kategori= kategori.id_kategori');


        // $this->db->where("MATCH ('judul','kategori','deskripsi','lokasi','gambar') AGAINST ('$key')", NULL, FALSE);

        $this->db->where('MATCH (data.judul) AGAINST ("' . $key . '")');
        $this->db->or_where('MATCH (data.deskripsi) AGAINST ("' . $key . '")');
        $this->db->or_where('MATCH (kategori.nama) AGAINST ("' . $key . '")');
        $this->db->or_where('MATCH (data.lokasi) AGAINST ("' . $key . '")');

        return $this->db->get('data')->result_array();
    }
}
