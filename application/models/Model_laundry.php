<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Model_laundry extends CI_model {

	
	public function getdata($key)
	{
		$this->db->where('id_laundry',$key);
		$hasil = $this->db->get('laundry');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('id_laundry',$key);
		$this->db->update('laundry', $data);
	}	
		public function getinsert($data)
	{
		$this->db->insert('laundry',$data);
	}	
	public function getdelete($key)
	{
		$this->db->where('id_laundry',$key);
		$this->db->delete('laundry');
	}	
	public function bayar()
	{
		$data = " SELECT sum(bayar) as jumlah_bayar from laundry";
		return $this->db->query($data);
	}
	
	
}
