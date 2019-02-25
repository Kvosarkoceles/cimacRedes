<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {
	public function getRegistros(){
  	$this->db->select("u.*,r.*,e.nombre as estado,u.id as registroID");
		$this->db->from("datosincidente u");
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
													,p.localidad as localidad_periodista
													,ed.nombre as edad
													,e.nombre as estado
													,ei.nombre as estadoIncidente
													,m.nombre as motivodelasgresion
													,ti.nombre as tipoDeInvestigacion
													,pb.nombre as bajoPerfil
													,j.nombre as judicializacion
													,ac.nombre as acompanamientocimac
													,ac2.nombre as beneficiariaDelMecanismo
													,ci.nombre as carpetaDeInvestigacion
													,cndh.nombre as quejaAnteDerechosHumanos
													,rn.nombre as renvi
													,ac5.nombre as estasDeAcuedoConElMecanismo
													,ac6.nombre as tePermitenSeguirHaciendoTuTrabajo");

		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("estados e","p.id_estados = e.id");
		$this->db->join("edades ed","p.id_Edad = ed.id");
		$this->db->join("estados ei","u.id_estados = ei.id");
		$this->db->join("motivodelasgresion m","u.id_motivodelasgresion = m.id");
		$this->db->join("tipodeinvestigacion ti","u.id_tipoDeInvestigacion = ti.id");
		$this->db->join("perfilbajo pb","u.consecuenciasBajoPerfil = pb.id");
		$this->db->join("tipodejudicializacion j","u.id_consecuenciajudicializacion = j.id");
		$this->db->join("sino ac","u.cimacHaceAcompanamientoAnteElMecanismo = ac.valor");
		$this->db->join("niveles ac2","u.beneficiariaDelMecanismoDeProtecion = ac2.id");
		$this->db->join("niveles ci","u.carpetaDeInvestigacionEnAlgunaProcuraduria = ci.id");
		$this->db->join("niveles cndh","u.quejaAnteComisionDeDerechosHumanos = cndh.id");
		$this->db->join("niveles rn","u.id_renvi = rn.id");
		$this->db->join("sino ac5","u.estasDeAcuedoConElMecanismoDeProteccion = ac5.valor");
		$this->db->join("sino ac6","u.esasMedidasTePermitenSeguirHaciendoTuTrabajo = ac5.valor");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
	public function getManifestaciones($id){
		$this->db->select("u.*,ed.nombre as manifestacion");
		$this->db->from("datosmanifestacion u");
		$this->db->join("tipodemanifestaciones ed","u.id_tipodemanifestacion = ed.id");
		$this->db->where("u.id_datosincidente",$id);
		$this->db->where("u.id_estatus",1);
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getAgresor($id){
		$this->db->select("u.*
												,s.nombre as sexo
												,ta.nombre as tipo
												,n1.nombre as nivel1
												,n2.nombre as nivel2");
		$this->db->from("datosagresor u");
		$this->db->join("sexo s","u.id_sexo = s.id");
		$this->db->join("tipoagresor ta","u.id_tipoAgresor = ta.id");
		$this->db->join("nivel1agresor n1","u.id_nivel1 = n1.id");
		$this->db->join("nivel2agresor n2","u.id_nivel2 = n2.id");
		$this->db->where("u.id_datosincidente",$id);
		$resultado = $this->db->get();
		return $resultado->row();
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
		$this->db->from("perfilbajo p");
		//$this->db->where("r.id_estado","1");
		$resultados = $this->db->get();
		return $resultados ->result();
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
		return $this->db->update("datosincidente",$data);
	}
	public function delete($id,$data){
		$this->db->where("id",$id);
		return $this->db->update('datosincidente',$data);
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
