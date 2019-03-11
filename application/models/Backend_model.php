	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {

	public function getID($link){
		$this->db->like("link",$link);
		$resultado =$this->db->get("menus");
		return $resultado->row();
	}

	public function getPermisos($menu){
		$rol=$this->session->userdata("rol");
		$this->db->select("p.*");
		$this->db->from("permisos p");
		$this->db->where("p.menu_id",$menu);
		$this->db->where("p.id_rol",$rol);
	//	$this->db->order_by("p.menu_id", "asc");
		$resultado = $this->db->get();
		return $resultado->row();



	//	$this->db->select("p.*");
	//	$this->db->from("permisos p");
	//	$this->db->where("id",$menu);
	//$this->db->where("id_rol",$rol);
//	$resultados = $this->db->get()->row();
//	return $resultados;
		//$resultado = $this->db->get("permisos");
		//return $resultado->row();
	}
}
