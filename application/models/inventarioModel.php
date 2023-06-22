<?php

class inventarioModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   

    function insertarProducto($bien)
    {
        
        //var_dump($empleado);exit;
       return $this->db->insert('productos', $bien['productos']);
    }

    function insertarEmpleado($empleado)
    {
        
//var_dump($empleado);exit;
       return $this->db->insert('empleado', $empleado['empleado']);
    }


}
    ?>