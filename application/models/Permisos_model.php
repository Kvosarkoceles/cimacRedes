<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos_model extends CI_Model {

	public function getPermisos(){
		$this->db->select("p.*,m.nombre as menu, r.nombre as rol");
		$this->db->from("permisos p");
		$this->db->join("roles r","p.rol_id = r.id");
		$this->db->join("menus m","p.menu_id = m.id");


		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getMenus(){
		$this->db->select("m.*");
		$this->db->from("menus m");
		$this->db->where("m.id_estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

  public function save($data){
		return $this->db->insert("permisos",$data);
	}

	public function getPermiso($id){
		$this->db->select("p.*");
		$this->db->from("permisos p");
		$this->db->where("p.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("permisos",$data);
	}
}
