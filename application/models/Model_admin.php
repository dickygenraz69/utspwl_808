<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Model_admin extends CI_model {
	public function getdata($key)
	{
		$this->db->where('id_user',$key);
		$hasil = $this->db->get('user');
		return $hasil;
	}
	public function paket($key)
	{
		$this->db->where('id_paket',$key);
		$hasil = $this->db->get('paket');
		return $hasil;
	}
	public function getSelectedDataMultiple($table,$data)
	{
		return $this->db->get_where($table, $data);
	}
	function updateDataMultiField($table,$data,$field_key)
	{
		$this->db->update($table,$data,$field_key);
	}
	public function getupdate($key,$data)
	{
		$this->db->where('id_user',$key);
		$this->db->update('user', $data);
	}	
		public function getinsert($data)
	{
		$this->db->insert('user',$data);
	}	
	public function getdelete($key)
	{
		$this->db->where('id_user',$key);
		$this->db->delete('user');
	}	
	public function admin()
	{
		$data = " SELECT
		`user`.id_user,
		`user`.username,
		`user`.nama_usr,
		`user`.`level`,
		cabor.nama_cabor
		FROM
		`user`
		INNER JOIN cabor ON `user`.cabor_id_cabor = cabor.id_cabor
		WHERE `level`= 'admin'
		";
		return $this->db->query($data);
	}
	public function masuk()
	{
		$data = " SELECT
		laundry.id_laundry,
		laundry.nama_konsumen,
		laundry.berat,
		laundry.`status`,
		laundry.tgl_masuk,
		laundry.bayar,
		paket.nama_paket
		FROM
		laundry
		INNER JOIN paket ON laundry.paket_id_paket = paket.id_paket WHERE `status` = 'masuk'


		";
		return $this->db->query($data);
	}

	public function keluar()
	{
		$data = " SELECT
		laundry.id_laundry,
		laundry.nama_konsumen,
		laundry.berat,
		laundry.`status`,
		laundry.tgl_masuk,
		laundry.tgl_keluar,
		laundry.bayar,
		paket.nama_paket
		FROM
		laundry
		INNER JOIN paket ON laundry.paket_id_paket = paket.id_paket WHERE `status` = 'keluar'


		";
		return $this->db->query($data);
	}
	
}
