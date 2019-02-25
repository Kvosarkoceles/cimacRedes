<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agresores_model extends CI_Model {

  public function save($data){
		return $this->db->insert("datosagresor",$data);
	}
  public function getAgresores($id){
			$this->db->select("u.*,s.nombre as sexo, ta.nombre as tipoAgresor, n1.nombre as nivel1, n2.nombre as nivel2");
			$this->db->from("datosagresor u");
			$this->db->join("sexo s","u.id_sexo = s.id");
			$this->db->join("tipoagresor ta","u.id_tipoAgresor = ta.id");
			$this->db->join("nivel1agresor n1","u.id_nivel1 = n1.id");
			$this->db->join("nivel2agresor n2","u.id_nivel2 = n2.id");
			$this->db->where("u.id_datosincidente",$id);
			$resultado = $this->db->get();
			return $resultado->result();
			}
  public function getAgresor($id){
		$this->db->select("u.*");
		$this->db->from("datosagresor u");
		$this->db->where("u.id_datosincidente",$id);
		$resultado = $this->db->get();
		return $resultado->row();
		}
}
