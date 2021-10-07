<?php 
	/**
	* AdminModel.php
	*Model utuk admin
	*/
	class AdminModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getAllVideo(){
			$this->db->select('video.*, user.*')->from('video, user');
			$this->db->where('video.id_user = user.id_user');
			$query = $this->db->get();

			return $query->result();
		}

		public function getAllUser(){
			$this->db->select('*')->from('user');
			$query = $this->db->get();

			return $query->result();
		}

		public function getAllKomen(){
			$this->db->select('komentar.*, user.nama, video.nama_video')->from('komentar, user, video');
			$this->db->where('komentar.id_user = user.id_user AND komentar.id_video = video.id_video');
			$query = $this->db->get();

			return $query->result();
		}

		public function getAllLike(){
			$this->db->select('likes.*, user.nama, video.nama_video')->from('likes, user, video');
			$this->db->where('likes.id_user = user.id_user AND likes.id_video = video.id_video');
			$query = $this->db->get();

			return $query->result();
		}

		public function getAllMaster(){
			$this->db->select('itube.*, user.nama, video.nama_video, komentar.message, video.likes')->from('itube, user, video, komentar');
			$this->db->where('itube.id_user = user.id_user AND itube.id_video = video.id_video AND itube.id_komentar = komentar.id_komentar');

			$query = $this->db->get();

			return $query->result();
		}
		/*Model jika ingin menghapus ID_USER*/
		public function deleteUser($id){
			$this->db->where('id_user', $id);
			$this->db->delete('user');
		}

		public function deleteVideo($id){
			$this->db->where('id_user', $id);
			$this->db->delete('video');
		}

		public function deleteLike($id){
			$this->db->where('id_user', $id);
			$this->db->delete('likes');
		}

		public function deleteKomen($id){
			$this->db->where('id_user', $id);
			$this->db->delete('komentar');
		}

		public function deleteMaster($id){
			$this->db->where('id_user', $id);
			$this->db->delete('itube');
		}

		/*JIKA INGIN MENGHAPUS ID_VIDEO*/
		public function deleteVideo2($id){
			$this->db->where('id_video', $id);
			$this->db->delete('video');
		}

		public function deleteLike2($id){
			$this->db->where('id_video', $id);
			$this->db->delete('likes');
		}

		public function deleteKomen2($id){
			$this->db->where('id_video', $id);
			$this->db->delete('komentar');
		}

		public function deleteMaster2($id){
			$this->db->where('id_video', $id);
			$this->db->delete('itube');
		}

		/*JIKA INGIN MENGHAPUS ID_KOMENTAR*/
		public function deleteKomen3($id){
			$this->db->where('id_video', $id);
			$this->db->delete('komentar');
		}

		public function deleteMaster3($id){
			$this->db->where('id_video', $id);
			$this->db->delete('itube');
		}

	}
 ?>