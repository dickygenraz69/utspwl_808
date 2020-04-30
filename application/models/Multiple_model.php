<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Multiple_model extends CI_model {

	public function __construct()
	{
		parent::__construct();
	}

public function create_multiple_table($laundry, $paket)
	{
		$this->db->insert('laundry', $laundry);
		$id_laundry = $this->db->insert_id();

		//insert to paket table
		$paket['laundry_id_laundry'] = $id_laundry;
		$this->db->insert('paket', $paket);
		return $insert_id = $this->db->insert_id();

	}
}