	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informe_model extends CI_Model {

	public function getCantidadEstados($year){
		$this->db->select("es.nombre as estado , SUM(estatus) as montos");
		$this->db->from("datosincidente di");
		$this->db->join("estados es","di.id_estados = es.id");
		$this->db->where("YEAR(fechaIncidente)",$year);
		$this->db->group_by("estado");
		$this->db->order_by("estado", "asc");
		$resultados = $this->db->get();
		return $resultados->result();



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


}
