<?php
class m_1461800113 extends CI_Model
{
    public function cetak_data_db()
    {
        $this->db->select('*');
        $this->db->from('ma_barang');
        $this->db->join('ma_kategori_barang', 'ma_kategori_barang.kd_kategori = ma_barang.kd_kategori');
        $this->db->join('ma_satuan_barang', 'ma_satuan_barang.kd_satuan = ma_barang.kd_satuan');
        $this->db->where('ma_kategori_barang.kd_kategori', 'K00007');
        $query = $this->db->get()->result();
        return $query;
    }
}
