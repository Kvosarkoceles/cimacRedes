<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periodistas_model extends CI_Model {
	public function getPeriodistas(){
		$this->db->select("p.*,e.nombre as estado,dl.*,tm.nombre as tipodemedio,cm.nombre as cargoenelmedio");
		$this->db->from("datosperiodistas p");
		$this->db->join("estados e","p.id_estados = e.id");
		$this->db->join("datoslaborales dl","p.id = dl.Id_datospersonales");
		$this->db->join("tipodemedio tm","dl.id_tipodemedio = tm.id");
		$this->db->join("cargoenelmedio cm","dl.id_cargoenelmedio = cm.id");
		$this->db->order_by("p.nombres", "asc");
		$this->db->where("p.estatus","1");
		$resultados = $this->db->get();
		return $resultados ->result();
	}
	public function getRegistro($id){
		$this->db->select("u.*, u.id as registroID, e.nombre as estado");
		$this->db->from("datosincidente u");
		$this->db->join("datosperiodistas r","u.id_datospersonales = r.id");
		$this->db->join("estados e","u.id_estados = e.id");
		$this->db->where("u.id_datospersonales",$id);
		$resultado = $this->db->get();
		return $resultado->result();
		}
	public function getPeriodista($id){
		$this->db->select("p.*,
		ed.nombre as edad,
		e.nombre as estado,
		t.nombre as casa,
		eC.nombre as estadocivil,
		c.nombre as indigena,
		c1.nombre as LGBTTTI,
		us.nombre as usuario");
	//$this->db->select("p.*,e.nombre as estado, ed.parametro as edad, t.nombre as casa, ec.nombre as estadocivil, c.nombre as indigena, c1.nombre as LGBTTTI");
		$this->db->from("datosperiodistas p");
		$this->db->join("estados e","p.id_estados = e.id");
		$this->db->join("edades ed","p.id_Edad = ed.id");
		$this->db->join("tipodecasa  t","p.id_tipodecasa = t.id");
		$this->db->join("estadocivil eC","p.id_estadocivil = eC.id");
		$this->db->join("usuarios us","p.id_uduarioModificacion = us.id");
		//$this->db->join("estadocivil ec","p.id_estadocivil = t.id");
		$this->db->join("comunidades c","p.comunidadIndigena = c.id");
		$this->db->join("comunidades c1","p.comunidadLGBTTTI = c1.id");
		$this->db->where("p.id",$id);
		$resultados = $this->db->get()->row();
		return $resultados;
	}
	public function getTrabajo($id){
		$this->db->select("dl.*,
						tm.nombre as tipodemedio,
						tc.nombre as tipodecontrato,
						cm.nombre as cargoenelmedio,
						f.nombre as fuente,
						s.nombre as sexo
						");
		$this->db->from("datoslaborales dl");
		$this->db->join("tipodemedio tm","dl.id_tipodemedio = tm.id");
		$this->db->join("tipodecontrato  tc","dl.id_tipodecontrato = tc.id");
		$this->db->join("cargoenelmedio  cm","dl.id_cargoenelmedio = cm.id");
		$this->db->join("fuente f","dl.id_fuente = f.id");
		$this->db->join("sexo s","dl.id_SexoDelJefeInmediato = s.id");
		$this->db->where("dl.id",$id);
		$resultados = $this->db->get()->row();
		return $resultados;
	}
	public function getTrabajo2($id){
		$this->db->select("dl.*");
		$this->db->from("datoslaborales dl");
		$this->db->where("dl.id",$id);
		$resultados = $this->db->get()->row();
		return $resultados;
	}
	public function getEdades(){
		$resultados = $this->db->get("edades");
		return $resultados ->result();
	}
	public function getEstados(){
		$resultados = $this->db->get("estados");
		return $resultados ->result();
	}
	public function update($id,$data,$tabla){
		$this->db->where("id",$id);
		return $this->db->update($tabla,$data);
	}
	public function delete($id,$data){
		$this->db->where("id",$id);
		return $this->db->update('datosperiodistas',$data);
	}
	public function save($tabla,$data){
		if ($this->db->insert($tabla,$data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}
	}
	public function save2($data){
		return $this->db->insert("datosperiodistas",$data);
	}
	public function getComunidaIndigena(){
		$resultados = $this->db->get("comunidades");
		return $resultados ->result();
	}
	public function getComunidaLGBTTTI(){
		$resultados = $this->db->get("comunidades");
		return $resultados ->result();
	}
	public function getSexo(){
		$resultados = $this->db->get("sexo");
		return $resultados ->result();
	}
	public function getFuente(){
		$resultados = $this->db->get("fuente");
		return $resultados ->result();
	}
	public function getTiposDeCasa(){
		$resultados = $this->db->get("tipodecasa");
		return $resultados ->result();
	}
	public function getEstadoCivil(){
		$resultados = $this->db->get("estadocivil");
		return $resultados ->result();
	}
	public function getTipoDeMedio(){
		$resultados = $this->db->get("tipodemedio");
		return $resultados ->result();
	}
	public function getTipoDeContrato(){
		$resultados = $this->db->get("tipodecontrato");
		return $resultados ->result();
	}
	public function getCargoEnElMedio(){
		$resultados = $this->db->get("cargoenelmedio");
		return $resultados ->result();
	}
	public function getIncidentes($id){
		$this->db->select("u.*");
		$this->db->from("datosincidente u");

//	$this->db->join("roles r","u.id_rol = r.id");
	$this->db->where("u.id_datospersonales",$id);
//	$this->db->where("u.estado","1");
	$resultado = $this->db->get();
	return $resultado->result();

}
}
