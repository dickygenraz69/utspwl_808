<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Model_paket extends CI_model {

	
	public function getdata($key)
	{
		$this->db->where('id_paket',$key);
		$hasil = $this->db->get('paket');
		return $hasil;
	}
	public function getupdate($key,$data)
	{
		$this->db->where('id_paket',$key);
		$this->db->update('paket', $data);
	}	
		public function getinsert($data)
	{
		$this->db->insert('paket',$data);
	}	
	public function getdelete($key)
	{
		$this->db->where('id_paket',$key);
		$this->db->delete('paket');
	}	
	
	
}
