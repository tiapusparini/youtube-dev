<?php 
	
	/**
	* UserModel.php
	*Model utuk user
	*/
	class UserModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function login($data)
		{
			$this->db->where('email', $data['email']);
			$this->db->where('password', $data['password']);
			$query = $this->db->get('user');
			if ($query->num_rows() > 0) {
				return $query;
			}else{
				return null;
			}
		}

		public function register($data){
			$this->db->where('email', $data['email']);
			$user = $this->db->get('user')->row();
			if($user == null){
				$this->db->insert('user', $data);
				return 1;
			}else{
				return 0;
			}
		}

		public function insertKomen($data, $id, $iduser, $date){
			$data = array(
		        'id_user'       => $iduser,
		        'id_video'     => $id,
		        'message'   => $data['message'],
		        'tanggal_post' => $date,
		    );
		    $this->db->insert('komentar', $data);
		}

		public function uploadData($url, $date, $id){
		    $nama = $this->input->post('nama');
		    $deskripsi = $this->input->post('deskripsi');
		    $kategori = $this->input->post('kategori');
		    $data = array(
		        'src'       => $url.'.mp4',
		        'nama_video'     => $nama,
		        'deskripsi'   => $deskripsi,
		        'kategori' => $kategori,
		        'tanggal' => $date,
		        'id_user' => $id
		    );
		    $this->db->insert('video', $data);
		    $id_video = $this->db->insert_id();

		    $like = array('id_user' => $id, 'id_video' => $id_video);
		    $this->db->insert('likes', $like);
		    $id_like = $this->db->insert_id();
		    $komen = array('id_user' => $id, 'id_video' => $id_video, 'message' => 'hahahaha');
		    $this->db->insert('komentar', $komen);
		    $id_komen = $this->db->insert_id();

		    $tube = array(
		    	'id_user' => $id,
		    	'id_video' => $id_video,
		    	'id_komentar' => $id_komen,
		    	'id_like' => $id_like
		    );
		    $this->db->insert('itube', $tube);
		}

		public function UpdateiTube($id_user,$id_video){
			$this->db->where('id_user', $id_user);
			$tube = array(
		    	'id_user' => $id_user,
		    	'id_video' => $id_video,
		    	'id_komentar' => '0',
		    	'id_like' => '0'
		    );

		    $this->db->update('itube', $tube);
		}

		public function getAllVideo(){
			$this->db->select('*')->from('video');
			$query = $this->db->get();

			return $query->result();
		}

		public function getAllVideoKategori($dat){
			$this->db->select('*')->from('video');
			$this->db->where('kategori =', $dat);
			$query = $this->db->get();

			return $query->result();
		}

		public function getUserByEmail($email){
			$this->db->select('*')->from('user');
			$this->db->where('user.email = ', $email);
			$query = $this->db->get();

			return $query->result();
		}

		public function getVU($kate){
			$this->db->select('video.*, user.nama as user_nama')->from('video, user');
			$this->db->where('video.id_user = user.id_user AND video.kategori =', $kate);
			
			$query = $this->db->get();
			return $query->result();
		}

		public function getKomen($id){
			$this->db->select('komentar.*, user.nama')->from('komentar, user');
			$this->db->where('komentar.id_user = user.id_user AND komentar.id_video =', $id);
			$this->db->order_by('komentar.tanggal_post', 'asc');
			
			$query = $this->db->get();

			return $query->result();
		}

		public function getById($id){
			$this->db->select('itube.*, video.*, user.*, likes.*, komentar.*')->from('itube, video, user, likes, komentar');
			$this->db->where('itube.id_user = user.id_user AND komentar.id_komentar = itube.id_komentar AND itube.id_like = likes.id_like AND itube.id_video = video.id_video AND itube.id_video =', $id);

			$query = $this->db->get();
			return $query->row();
		}

		public function getBySearch($cari){
			$this->db->select('video.*, user.*')->from('video, user');
			$this->db->where("video.id_user = user.id_user AND video.nama_video LIKE '%".$cari."%'");
			$query = $this->db->get();

			return $query->result();
		}

		public function getLike($id){
			$this->db->select('likes')->from('video');
			$this->db->where('id_video = '. $id);
			$query = $this->db->get()->result();

			$a = (int)$query['0']->likes;
			$a = $a + 1;

			$data = array('likes' => $a);
			$this->db->where('id_video', $id);
			$this->db->update('video', $data);
		}
	}
 ?>