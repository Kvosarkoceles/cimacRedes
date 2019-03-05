<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload_model extends CI_Model {

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
}
