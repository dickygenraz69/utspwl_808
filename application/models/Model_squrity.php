<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_squrity extends CI_model {
public function getsqurity()
{
	$username = $this->session->userdata('username');
	$level = $this->session->userdata('member');
	$level = $this->session->userdata('admin');
	if(empty($username))
	{
		$this->session->sess_destroy();
		redirect('auth');
		
	}
	elseif ($level) {
		$this->session->userdata('level')=='admin';
		redirect('admin');
	}
	elseif ($level) {
		$this->session->userdata('level')=='member';
		redirect('member');
	}

}


}
