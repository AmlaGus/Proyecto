<?php

class categoriaModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   
    function obtenerCatg()
    {
        $consulta = $this->db->get('categoria');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }

    function insertarCategoria($categoria)
    {
        
        //var_dump($empleado);exit;
       return $this->db->insert('categoria', $categoria);
    }


    function obtenerArea()
    {
        $consulta = $this->db->get('area');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }
    
    
    function obtenerEmpleado()
    {
        $consulta = $this->db->get('empleado');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }
}
    ?>