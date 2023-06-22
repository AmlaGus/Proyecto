<?php

class inventarioModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   
   

    function insertarProducto($categoria)
    {
        
        //var_dump($empleado);exit;
       return $this->db->insert('categoria', $categoria);
    }

    function insertarEmpleado($empleado)
    {
        
//var_dump($empleado);exit;
       return $this->db->insert('empleado', $empleado['empleado']);
    }


}
    ?>