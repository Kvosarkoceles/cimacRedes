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
		$this->db->select("u.*,r.nombres,
													 r.apellidoPaterno,
													 r.apellidoMaterno,r.localidad as localidadPeriodista,
													 ed.parametro as edad,
													 e.nombre as estado,
													 e2.nombre as estadoIncidente,
													 sn.nombre as beneficiariaDelMecanismo,
													 nv.nombre as carpetaDeInvestigacion,
													 nv2.nombre as quejaAnteComision,
													 sn2.nombre as estasDeAcuedoConElMecanismo,
													 sn3.nombre as tePermitenSeguirHaciendoTuTrabajo,
													 sn4.nombre as resultadosLaCarpetaDeInvestigacion");
		$this->db->from("datosIncidente u");
		$this->db->join("datosperiodistas r","u.id_datospersonales = r.id");
		$this->db->join("edades ed","r.id_Edad = ed.id");
		$this->db->join("estados e","r.id_estados = e.id");
		$this->db->join("estados e2","u.id_estados = e2.id");
		$this->db->join("sino sn","u.beneficiariaDelMecanismoDeProtecion = sn.valor");
		$this->db->join("niveles nv","u.carpetaDeInvestigacionEnAlgunaProcuraduria = nv.id");
		$this->db->join("niveles nv2","u.quejaAnteComisionDeDerechosHumanos = nv2.id");
		$this->db->join("sino sn2","u.estasDeAcuedoConElMecanismoDeProteccion = sn2.valor");
		$this->db->join("sino sn3","u.esasMedidasTePermitenSeguirHaciendoTuTrabajo = sn3.valor");
		$this->db->join("sino sn4","u.tenidoResultadosLaCarpetaDeInvestigacion = sn4.valor");
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
	public function save($data){
		return $this->db->insert("datosIncidente",$data);
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
	public function getNivelagresor($id){
		$this->db->select("n.*");
		$this->db->from("nivelAgresor n");
		$this->db->where("n.id_nivel",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getNivelagresorTemp(){
		$resultados = $this->db->get("nivelAgresor");
		return $resultados ->result();
	}
}
