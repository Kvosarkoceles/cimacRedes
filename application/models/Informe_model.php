	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informe_model extends CI_Model {
	public function getCantidadTotal($year){
		$this->db->select("SUM(u.estatus) as monto");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("u.estatus",1);
		$this->db->where("p.estatus",1);
	//	$this->db->group_by("estado");
		//$this->db->order_by("estado", "asc");
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getCantidadEstados($year){
		$this->db->select("es.nombre as estado , SUM(di.estatus) as montos");
		$this->db->from("datosincidente di");
		$this->db->join("estados es","di.id_estados = es.id");
		$this->db->join("datosperiodistas p","di.id_datospersonales = p.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("di.estatus",1);
		$this->db->where("p.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getCantidadEdades($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("edades ed","p.id_Edad = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getCantidadTipodeMedio($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("datoslaborales l","u.id_datospersonales = l.Id_datospersonales");
		$this->db->join("tipodemedio ed","l.id_tipodemedio = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getCargoMedio($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("datoslaborales l","u.id_datospersonales = l.Id_datospersonales");
		$this->db->join("cargoenelmedio ed","l.id_cargoenelmedio = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getFuente($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("datoslaborales l","u.id_datospersonales = l.Id_datospersonales");
		$this->db->join("fuente ed","l.id_fuente = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
	}
	public function getMotivoAgresion($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("motivodelasgresion ed","u.id_motivodelasgresion = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
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
													,ac6.nombre as tePermitenSeguirHaciendoTuTrabajo
													,us.nombre as usuario");
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
		$this->db->join("usuarios us","u.id_uduarioModificacion = us.id");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}
}
