<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manifestacion_model extends CI_Model {

	public function save($data){
		return $this->db->insert("datosmanifestacion",$data);
	}

	public function delete($id,$data){
		$this->db->where("id",$id);
		return $this->db->update('datosmanifestacion',$data);
	}

}
