<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct() {
		parent::__construct();
		//panggil model m_mahasiswa
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{
		
		$data['mahasiswa'] = $this->m_mahasiswa->daftar();
		$this->load->view('components/header');
		$this->load->view('mahasiswa/list',$data);
		$this->load->view('components/footer');
	}

	public function add()
	{
		$this->load->view('components/header');
		$this->load->view('mahasiswa/add');
		$this->load->view('components/footer');
	}
	
	
	public function save()
	{
		$data = array (
			//'nama_kolom_di_db' => $this->input->post('nama_field'),
			'first_name' => $this ->input->post ('first_name'),
			'last_name' => $this ->input->post ('last_name'),
			);
		$this -> m_mahasiswa -> simpan($data);
		redirect(base_url('index.php'));
	}
	public function delete($id)
	{
		$where = array (
			'id' => $id,
			);
		$this->m_mahasiswa->hapus($where);
		redirect(base_url('index.php'));
	}
	public function detail($id)
	{
		$where = array (
			'id' => $id,
			);
		$data['mahasiswa']=$this->m_mahasiswa->detail($where)->row();
		$this->load->view('components/header');
		$this->load->view('mahasiswa/detail',$data);
		$this->load->view('components/footer');
	}
	public function edit($id)
	{
		$where = array (
			'id' => $id,
			);
		$data['mahasiswa']=$this->m_mahasiswa->detail($where)->row();
		$this->load->view('components/header');
		$this->load->view('mahasiswa/edit',$data);
		$this->load->view('components/footer');
	}
	public function update($id){
		$where = array (
			'id' => $id,
			);
		$data = array (
			//'nama_kolom_di_db' => $this->input->post('nama_field'),
			'first_name' => $this ->input->post ('first_name'),
			'last_name' => $this ->input->post ('last_name'),
			);
		$this->m_mahasiswa->ubah($where,$data);
		redirect(base_url('index.php'));
	}

	
}

