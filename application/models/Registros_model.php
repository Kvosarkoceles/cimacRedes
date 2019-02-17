<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {
	public function getRegistros(){
  	$this->db->select("u.*,r.*,e.nombre as estado,u.id as registroID");
		$this->db->from("datosIncidente u");
		$this->db->join("datosperiodistas r","u.id_datospersonales = r.id");
		$this->db->join("estados e","u.id_estados = e.id");
		$this->db->where("r.estatus","1");
		$this->db->where("u.estatus","1");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getRegistro($id){
		$this->db->select("u.*,p.nombres
													,p.apellidoPaterno
													,p.apellidoMaterno
													,e.nombre as estado
													,ei.nombre as estadoIncidente
													,ed.nombre as edad
													,pb.nombre as bajoPerfil
													,j.nombre as judicializacion");
		$this->db->from("datosIncidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("estados e","p.id_estados = e.id");
		$this->db->join("edades ed","p.id_Edad = ed.id");
		$this->db->join("estados ei","u.id_estados = ei.id");
		$this->db->join("perfilbajo pb","u.consecuenciasBajoPerfil = pb.id");
		$this->db->join("tipodejudicializacion j","u.id_consecuenciajudicializacion = j.id");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getRoles(){
		$this->db->select("r.*");
		$this->db->from("roles r");

		//$this->db->where("r.id_estado","1");
		$resultados = $this->db->get();

		return $resultados ->result();
	}
	public function getTipoDeInvestigacion(){
		$this->db->select("ti.*");
		$this->db->from("tipodeinvestigacion ti");

		//$this->db->where("r.id_estado","1");
		$resultados = $this->db->get();

		return $resultados ->result();
	}
	public function getMotivodelasgresion(){
		$this->db->select("ma.*");
		$this->db->from("motivodelasgresion ma");

		//$this->db->where("r.id_estado","1");
		$resultados = $this->db->get();

		return $resultados ->result();
	}
	public function getPerfiles(){
		$this->db->select("p.*");
		$this->db->from("perfilBajo p");

		//$this->db->where("r.id_estado","1");
		$resultados = $this->db->get();

		return $resultados ->result();
	}
	public function save2listoparaborrar($data){
		return $this->db->insert("datosIncidente",$data);
	}
	public function save($tabla,$data){
		if ($this->db->insert($tabla,$data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("datosIncidente",$data);
	}
	public function delete($id,$data){
		$this->db->where("id",$id);
		return $this->db->update('datosIncidente',$data);
	}
	public function getSiNo(){
		$resultados = $this->db->get("sino");
		return $resultados ->result();
	}
	public function getJudicializacionr(){
		$resultados = $this->db->get("tipodejudicializacion");
		return $resultados ->result();
	}
	public function getNiveles(){
		$resultados = $this->db->get("niveles");
		return $resultados ->result();
	}
	public function getSexo(){
		$resultados = $this->db->get("sexo");
		return $resultados ->result();
	}
	public function getTipoAgresor(){
		$resultados = $this->db->get("tipoagresor");
		return $resultados ->result();
	}
	public function getNivel1agresor(){
		$this->db->select("n.*");
		$this->db->from("nivel1agresor n");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getNivel2agresor(){
		$this->db->select("n.*");
		$this->db->from("nivel2agresor n");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getTipodemanifestaciones(){
		$resultados = $this->db->get("tipodemanifestaciones");
		return $resultados ->result();
	}
}
