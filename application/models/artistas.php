<?php
	Class Artistas extends CI_Model{
		function __construct(){
			$this->load->database();
		}
		public function getCanciones(){
			return $this->db->post("artista");
		}
	}
?>