<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Archivos_model extends CI_Model {

    public function construct() {
        parent::__construct();
    }

    //FUNCIÓN PARA INSERTAR LOS DATOS DE LA IMAGEN SUBIDA
    function subir($titulo,$imagen,$id_periodista){
        $data = array(
            'titulo' => $titulo,
            'ruta' => $imagen,
            'id_periodista' => $id_periodista,
            'id_usuario	' => $this->session->userdata("id"),
            'fechaRegistro' =>date("Y")."-".date("m")."-".date("d"),
            'id_estatus	' =>1,
        );
        return $this->db->insert('imagenes_periodista', $data);
    }

    public function subirImagenPeriodista($data){
      return $this->db->insert("imagenes_periodista",$data);
    }

    public function subirArchivoPeriodista($data){
      return $this->db->insert("archivos_periodista",$data);
    }

    public function delete($id,$data){
      $this->db->where("id",$id);
      return $this->db->update('archivos_periodista',$data);
    }

  

    public function getArchivo($id){
      $this->db->select("u.*");
      $this->db->from("archivos_periodista u");
    //  $this->db->join("datosperiodistas r","u.id_datospersonales = r.id");
      //$this->db->join("estados e","u.id_estados = e.id");
    $this->db->where("u.id",$id);
      $resultado = $this->db->get();
      return $resultado->result();
      }
}
