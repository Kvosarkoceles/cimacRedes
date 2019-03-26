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
	public function getTipoDeInvestigacion($year){
		$this->db->select("u.id,ed.nombre as estado,  SUM(p.estatus) as montos");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas p","u.id_datospersonales = p.id");
		$this->db->join("tipodeinvestigacion ed","u.id_tipoDeInvestigacion = ed.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->where("p.estatus",1);
		$this->db->where("u.estatus",1);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultado = $this->db->get();
		return $resultado->result();
	}
}
