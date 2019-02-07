<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion_model extends CI_Model {

	public function getEdad($id){
		$this->db->select("e.parametro as nombre, e.descripcion,e.id");
		$this->db->from("edades e");
		$this->db->where("e.id",$id);
		$resultados = $this->db->get();
		return $resultados ->row();
	}
	public function getEdades(){
		$this->db->select("e.*");
		$this->db->from("edades e");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getTipodecasa(){
		$this->db->select("e.*");
		$this->db->from("tipodecasa e");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getCasa($id){
		$this->db->select("e.*");
		$this->db->from("tipodecasa e");
		$this->db->where("e.id",$id);
		$resultados = $this->db->get();
		return $resultados ->row();
	}
	public function getEstadocivil(){
		$this->db->select("ec.*");
		$this->db->from("estadocivil ec");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getCivil($id){
		$this->db->select("e.*");
		$this->db->from("estadocivil e");
		$this->db->where("e.id",$id);
		$resultados = $this->db->get();
		return $resultados ->row();
	}
	public function getTipodemedio(){
		$this->db->select("e.*");
		$this->db->from("tipodemedio e");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getCargo(){
		$this->db->select("c.*");
		$this->db->from("cargoenelmedio c");
		$resultados = $this->db->get();

		return $resultados ->result();
	}


	public function save($data){
		return $this->db->insert("usuarios",$data);
	}
	public function update($menu,$data,$idmenu){
		$this->db->where("id",$idmenu);
		return $this->db->update($menu,$data);
	}
	public function login($username, $password){
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}


}
