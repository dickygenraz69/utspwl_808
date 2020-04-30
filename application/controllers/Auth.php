<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function index()
	{
		if($this->is_logged()){
			
			redirect('admin/selamat');
		}

		$this->load->view('login');

		
		$isi['username'] = $this->session->userdata('username');
	}
	public function is_logged()
	{
		$is_login = $this->session->userdata('is_login');
	}

	public function cek_login()
	{
		$data = array('username' => $this->input->post('username') , 
					  'password' => md5($this->input->post('password'))
					  );
		$this->load->model('model_user');
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1){
			foreach($hasil->result() as $sess)
            {
              $sess_data['logged_in'] = 'logged_in';
              $sess_data['id_user'] = $sess->id_user;
              $sess_data['username'] = $sess->username;
              $sess_data['nama_usr'] = $sess->nama_usr;
              $sess_data['level'] = $sess->level;
              $this->session->set_userdata($sess_data);
              $this->session->set_userdata('is_login', TRUE);
            }
			if ($this->session->userdata('level')=='admin'){
				redirect('admin');
			}
			elseif ($this->session->userdata('level')=='super'){
				redirect('admin');
			}
		}
		else
		{
			header('location:'.base_url().'auth');
				$this->session->set_flashdata('info','
										<font color="red">Username atau Password salah....!!</font>
										<br />
											');
		}
		
	}


}