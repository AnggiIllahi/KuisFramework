<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query = $this->db->query("Select * from perusahaan");
			return $query -> result_array();
		}

		public function getProduk($id)
		{
			$sql="select A.namaPerusahaan as nama,B.namaProduk as produk, B.tanggalProduksi as tanggalProduksi, B.tanggalKadaluarsa as tanggalKadaluarsa from perusahaan as A join produk as B on A.id = B.fk_perusahaan where A.id=$id";
			$query=$this->db->query($sql);
			return $query->result_array();
		}
		public function getLokasi($id)
		{
			$query = $this->db->query("select A.namaPerusahaan as namaPerusahaan,B.namaLokasi as namaLokasi, B.tanggalBerdiri as tanggal from perusahaan as A join lokasi as B on A.id = B.fk_perusahaan where A.id=$id");
			return $query -> result_array();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>