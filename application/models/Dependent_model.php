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
		$query = $this->db->get_where('nivel1Agresor', array('id_tipoAgresor' => $id_tipoAgresor));
		return $query->result();
	}
}
