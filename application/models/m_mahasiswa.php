<?php 

class M_mahasiswa extends CI_model {

	protected $table = 'mahasiswa';

	function simpan($data){

		$this->db->insert($this->table,$data);
	}

	function daftar(){
		 return $this->db->get($this->table);

	}

	function hapus($where) {
		$this->db->where($where);
		$this->db->delete($this->table);

	}
	function detail($where) {
		return $this->db->get_where($this->table,$where);
	}
	function ubah($where,$data) {
		$this->db->where($where);
		$this->db->update($this->table,$data);

	}
	
}
?>