<?php

class empleadoModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertarEmpleado($empleado)
    {
        
//var_dump($empleado);exit;
       return $this->db->insert('empleado', $empleado['empleado']);
    }

    function insertarArea($area)
    {
        
//var_dump($empleado);exit;
       return $this->db->insert('area', $area);
    }



    function obtenerDpto()
    {
        $consulta = $this->db->get('departamento');
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
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