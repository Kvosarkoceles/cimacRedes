<?php
class Dependent_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}
	public function get_tipoAgresor_query(){
		$query = $this->db->get('tipoagresor');
		return $query->result();
	}
	public function get_nivel1_query($id_tipoAgresor)	{
		$query = $this->db->get_where('nivel1agresor', array('id_tipoAgresor' => $id_tipoAgresor));
		return $query->result();
	}
	public function get_nivel2_query($id_nivel1)	{
		$this->db->select("c.*");
		$this->db->from("nivel2agresor c");
		$this->db->where("c.id_nivel1",$id_nivel1);
		$this->db->where("c.id_estatus",'1');
		$resultados = $this->db->get();
		return $resultados ->result();
	}
}
