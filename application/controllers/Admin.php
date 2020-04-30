<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/selamat_datang';
		$isi['data'] 		 = $this->db->get('user');
		$this->load->view('admin/tampilan_admin',$isi);

			
	}

	public function navigasi()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/navigasi';
		$isi['data'] 		 =$this->db->select_sum('bayar');
		$isi['data'] 		 =$this->db->get('laundry');
		$this->load->view('admin/tampilan_admin',$isi);

			
	}


	public function tambahlaundry()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/form_masuk';
		$isi['id_laundry']	='';
		$isi['nama_konsumen']	='';
		$isi['berat']='';
		$isi['status']='';
		$isi['bayar']	='';
		$isi['tgl_masuk']	='';
		$isi['tgl_keluar']	='';
		$isi['laundry_id_laundry']	='';
		$isi['data'] 		 = $this->db->get('laundry');
		$this->load->view('admin/tampilan_admin',$isi);

	}
	public function simpanlaundry()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		
		$key = $this->input->post('id_laundry'); 	
		$data['id_laundry']    = $this->input->post('id_laundry');
		$data['nama_konsumen'] 	= $this->input->post('nama_konsumen');
		$data['berat'] 	= $this->input->post('berat');
		$data['status'] 		= $this->input->post('status');
		$data['bayar'] 		= $this->input->post('bayar');
		$data['tgl_masuk'] 	 	= $this->input->post('tgl_masuk');
		$data['tgl_keluar'] 	 	= $this->input->post('tgl_keluar');	
		$data['paket_id_paket'] 		= $this->input->post('paket_id_paket');

		$this->load->model('model_laundry');
		$query = $this->model_laundry->getdata($key);

		if($query->num_rows()>0)
		{
			$this->model_laundry->getupdate($key,$data);
			$this->session->set_flashdata('info','<div class="btn btn-success">
										Data Berhasil di Update
										<br />
									</div>');
		}
		else
		{
			$this->model_laundry->getinsert($data);
			$this->session->set_flashdata('info','<div class="btn btn-success">
										Data Berhasil di Simpan
										<br />
									</div>');
		}
		redirect('admin/tambahlaundry');
	}


	public function paket()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/paket';
		$isi['id_paket']	='';
		$isi['nama_paket']='';
		$isi['harga']='';
		$isi['data'] 		 = $this->db->get('paket');
		$this->load->view('admin/tampilan_admin',$isi);	
	}

	public function editpaket()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/form_editpaket';
		
		$key = $this->uri->segment(3);
		$this->db->where('id_paket',$key);
		$query =$this->db->get('paket');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$isi['id_paket']	 =$row->id_paket;
				$isi['nama_paket'] =$row->nama_paket;
				$isi['harga'] =$row->harga;
			
			}
		}
		else
		{
				$isi['id_paket']	='';
				$isi['nama_paket']='';
				$isi['harga']='';

		}
		$this->load->view('admin/tampilan_admin',$isi);
	}
	public function simpanadmin()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		
		$key = $this->input->post('id_paket'); 	
		$data['id_paket']    = $this->input->post('id_paket');
		$data['nama_paket'] 	= $this->input->post('nama_paket');
		$data['harga'] 		= $this->input->post('harga');	

		$this->load->model('model_paket');
		$query = $this->model_paket->getdata($key);

		if($query->num_rows()>0)
		{
			$this->model_paket->getupdate($key,$data);
			$this->session->set_flashdata('info','<div class="btn btn-success">
										Data Berhasil di Update
										<br />
									</div>');
		}
		else
		{
			$this->model_paket->getinsert($data);
			$this->session->set_flashdata('info','<div class="btn btn-success">
										Data Berhasil di Simpan
										<br />
									</div>');
		}
		redirect('admin/paket');
	}
	public function deletepaket()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('Model_paket');

		$key = $this->uri->segment(3);
		$this->db->where('id_paket',$key);
		$query =$this->db->get('paket');
		if($query->num_rows()>0)
		{
			$this->Model_paket->getdelete($key);
		}
		redirect('admin/paket');
	}

	public function detailpaket()
	{

		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/paket';
		
		$key = $this->uri->segment(3);
		$this->db->where('id_paket',$key);
		$query =$this->db->get('paket');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$isi['id_paket']	=$row->id_paket;
				$isi['nama_paket']=$row->nama_paket;
				$isi['harga']=$row->harga;

			}
		}
		else
		{
				$isi['id_paket']	='';
				$isi['nama_paket']='';
				$isi['harga']='';

		}
		$this->load->view('admin/paket',$isi);

	}

	public function masuk()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_admin');
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/masuk';
		$isi['data'] 		 = $this->model_admin->masuk();
		$this->load->view('admin/tampilan_admin',$isi);

			
	}

	public function ambillaundry()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/form_ambillaundry';
		
		$key = $this->uri->segment(3);
		$this->db->where('id_laundry',$key);
		$query =$this->db->get('laundry');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$isi['id_laundry']	 =$row->id_laundry;
				$isi['nama_konsumen'] =$row->nama_konsumen;
				$isi['berat'] =$row->berat;
				$isi['status']	 =$row->status;
				$isi['bayar'] =$row->bayar;
				$isi['tgl_masuk'] =$row->tgl_masuk;
				$isi['tgl_keluar'] =$row->tgl_keluar;
				$isi['paket_id_paket'] =$row->paket_id_paket;
			
			}
		}
		else
		{
				$isi['id_laundry']	='';
				$isi['nama_konsumen']='';
				$isi['berat']='';
				$isi['status']	='';
				$isi['bayar']='';
				$isi['tgl_masuk']='';
				$isi['tgl_keluar']='';
				$isi['paket_id_paket']='';

		}
		$this->load->view('admin/tampilan_admin',$isi);
	}


	
	public function editlaundry()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/form_editlaundry';
		
		$key = $this->uri->segment(3);
		$this->db->where('id_laundry',$key);
		$query =$this->db->get('laundry');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$isi['id_laundry']	 =$row->id_laundry;
				$isi['nama_konsumen'] =$row->nama_konsumen;
				$isi['berat'] =$row->berat;
				$isi['status']	 =$row->status;
				$isi['bayar'] =$row->bayar;
				$isi['tgl_masuk'] =$row->tgl_masuk;
				$isi['tgl_keluar'] =$row->tgl_keluar;
				$isi['paket_id_paket'] =$row->paket_id_paket;
			
			}
		}
		else
		{
				$isi['id_laundry']	='';
				$isi['nama_konsumen']='';
				$isi['berat']='';
				$isi['status']	='';
				$isi['bayar']='';
				$isi['tgl_masuk']='';
				$isi['tgl_keluar']='';
				$isi['paket_id_paket']='';

		}
		$this->load->view('admin/tampilan_admin',$isi);
	}

	public function deletelaundrymasuk()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_laundry');

		$key = $this->uri->segment(3);
		$this->db->where('id_laundry',$key);
		$query =$this->db->get('laundry');
		if($query->num_rows()>0)
		{
			$this->model_laundry->getdelete($key);
		}
		redirect('admin/masuk');
	}

	public function deletelaundry()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_laundry');

		$key = $this->uri->segment(3);
		$this->db->where('id_laundry',$key);
		$query =$this->db->get('laundry');
		if($query->num_rows()>0)
		{
			$this->model_laundry->getdelete($key);
		}
		redirect('admin/keluar');
	}

	

	public function keluar()
	{
		$this->model_squrity->getsqurity();
		$this->load->model('model_admin');
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/keluar';
		$isi['data'] 		 = $this->model_admin->keluar();
		$this->load->view('admin/tampilan_admin',$isi);

			
	}


	public function rekap()
	{
		$this->model_squrity->getsqurity();
		$isi['nama_usr'] = $this->session->userdata('nama_usr');
		$isi['content'] = 'admin/selamat_datang';
		$isi['data'] 		 = $this->db->get('user');
		$this->load->view('admin/tampilan_admin',$isi);

			
	}

	public function akun()
	{
		$cek  = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if(!empty($cek) && $level=='admin')
		{
			$isi['username'] = $this->session->userdata('username');
			$isi['nama_usr'] = $this->session->userdata('nama_usr');
			$isi['password'] = $this->session->userdata('password');
			$isi['level'] = $this->session->userdata('level');
						
			$isi['content'] = 'admin/form_setting';
			$this->load->view('admin/tampilan_admin',$isi);			
		}
		else
		{
			header('location:'.base_url().'selamat');	
		}
	}

public function simpan_akun()
	{
		$this->load->model('model_admin');
		$cek = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if(!empty($cek) && $level=='admin')
		{
			$username = $this->session->userdata('username');
			$pass_lama = $this->input->post('pass_lama');
			$pass_baru = $this->input->post('pass_baru');
			$ulangi_pass = $this->input->post('ulangi_pass');
			
			$data['username'] = $username;
			$data['password'] = md5($pass_lama);
			$cek = $this->model_admin->getSelectedDataMultiple('user',$data);
			if($cek->num_rows()>0)
			{
				if($pass_baru==$ulangi_pass)
				{
					$simpan['password'] = md5($pass_baru);
					$where = array('username'=>$username);
					$this->model_admin->updateDataMultiField("user",$simpan,$where);
					$this->session->set_flashdata("info","
					<div class='alert alert-info'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>
										<strong>Selamat!</strong>

										Anda berhasil mengubah password
										<br />
									</div>");
					header('location:'.base_url().'index.php/admin/akun');
				}
				else
				{
					$this->session->set_flashdata("info","
						<div class='alert alert-error'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>

										<strong>
											<i class='icon-remove'></i>
											Terjadi Kesalahan!
										</strong>

										Password yang Anda input tidak sama
										<br />
									</div>");
					header('location:'.base_url().'index.php/admin/akun');
				}
			}
			else
			{
				$this->session->set_flashdata("info","
				<div class='alert alert-error'>
										<button type='button' class='close' data-dismiss='alert'>
											<i class='icon-remove'></i>
										</button>

										<strong>
											<i class='icon-remove'></i>
											Terjadi Kesalahan!
										</strong>

										Password lama Anda salah, mohon periksa kembali password lama Anda
										<br />
									</div>");
				header('location:'.base_url().'index.php/admin/akun');
			}
		}
		else
		{
			header('location:'.base_url().'index.php/admin');
		}
	}

	public function downloadmasuk()
	{
		$this->load->library('Excel_generator');
		$this->load->model('model_admin');
		$query = $this->model_admin->masuk();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kode', 'Nama Konsumen', 'Berat', 'Tanggal Masuk', 'Bayar', 'Paket'));
        $this->excel_generator->set_column(array('id_laundry', 'nama_konsumen', 'berat', 'tgl_masuk', 'bayar', 'nama_paket'));
        $this->excel_generator->set_width(array(7, 25, 10, 25, 11, 20));
        $this->excel_generator->exportTo2007('Laporan laundry Masuk');
	}

	public function downloadkeluar()
	{
		$this->load->library('Excel_generator');
		$this->load->model('model_admin');
		$query = $this->model_admin->keluar();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kode', 'Nama Konsumen', 'Berat', 'Tanggal Masuk', 'Tanggal Keluar', 'Bayar', 'Paket'));
        $this->excel_generator->set_column(array('id_laundry', 'nama_konsumen', 'berat', 'tgl_masuk', 'tgl_keluar', 'bayar', 'nama_paket'));
        $this->excel_generator->set_width(array(7, 25, 10, 25, 25, 11, 20));
        $this->excel_generator->exportTo2007('Laporan laundry Keluar');
	}


public function logout() {
		$this->session->sess_destroy();
		$this->session->set_userdata('is_login', FALSE);
		redirect('/');
	} 

}