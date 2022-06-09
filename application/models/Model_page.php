<?php
class Model_page extends CI_Model
{

	function stat0($table)
	{
		return $this->db->get_where($table,array('status'=>'0'))->num_rows();
	}

	function stat1($table)
	{
		return $this->db->get_where($table,array('status'=>'1'))->num_rows();
	}

	function sedang_parkir()
	{
		$this->db->select('*');
      $this->db->from('tbl_parkir');
      $this->db->join('tbl_kendaraan','tbl_parkir.id_kendaraan = tbl_kendaraan.id');      
      $this->db->join('tbl_petugas','tbl_parkir.id_petugas = tbl_petugas.id_petugas');
			$this->db->where( array('status' => '0'));
			$query = $this->db->get();
      return $query;
	}

	function sudah_keluar()
	{
		$this->db->select('*');
		$this->db->from('tbl_parkir');
		$this->db->join('tbl_kendaraan','tbl_parkir.id_kendaraan = tbl_kendaraan.id');      
		$this->db->join('tbl_petugas','tbl_parkir.id_petugas = tbl_petugas.id_petugas');
		$this->db->where( array('status' => '1'));
		$query = $this->db->get();
		return $query;
	}

	function cek($id)
	{
		$this->db->select('*');
      $this->db->from('tbl_parkir');
      $this->db->join('tbl_kendaraan','tbl_parkir.id_kendaraan = tbl_kendaraan.id');      
      $this->db->join('tbl_petugas','tbl_parkir.id_petugas = tbl_petugas.id_petugas');
			$this->db->where( array('id_parkir' => $id));
			$query = $this->db->get();
      return $query;
	}

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function update($where,$table){		
		return $this->db->get_where($where, $table);
	}	

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}