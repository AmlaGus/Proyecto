<?php

class empleadoModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertarEmpleado($empleado)
    {        
       return $this->db->insert('empleado', $empleado['empleado']);
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

    function detail_data($id_empleado){

        $this->db->select('*');
        $this->db->from('empleado');
        $this->db->where('id_empleado',$id_empleado);
        return $this->db->get()->row();
    }

    function obtenerEmpleadoAll(){
        $consulta = $this->db->query('SELECT * FROM empleado e INNER JOIN departamento d ON e.id_departamento = d.id_departamento INNER JOIN area a ON a.id_area = e.id_area');
        $resultado = $consulta->result();
        return $resultado;
    }

    function borrarCategoria(){
        $id_categoria = $_GET['id_categoria'];
        $this->db->delete('categoria', array('id_categoria'=>$id_categoria));
    }

    function borrarEmpleado(){
        $id_empleado = $_GET['id_empleado'];
        $this->db->delete('empleado', array('id_empleado'=>$id_empleado));
    }

    function obtenerEmpleadoEspecifico($id_empleado){
        $this->db->where("id_empleado","$id_empleado");
        $consulta = $this->db->get ('empleado');
        if($consulta->num_rows()>0) return $consulta->row();
        else return false;
    }

    function consultaDepartamento(){
        $this->db->select('*');
        $this->db->from('departamento');
        return $this->db->get()->result();       
    }

    function obtenerDpto()
    {
       $consulta= $this->db->query('SELECT * FROM empleado e INNER JOIN departamento d  ON e.id_departamento = d.id_departamento
        INNER JOIN area a ON a.id_area = e.id_area');    
        if ($consulta->num_rows() > 0) {
            return $consulta->result();
        } else {
            return false;
        }
    }

   
    function updateEmpleado($data){
        
        $this->db->where('id_empleado',$data['id_empleado']);
        $this->db->update('empleado', $data);
    }

    function updateCategoria($txtId, $txtDescripcion){
        $array = array(
            'id_categoria' => $txtId,
            'descripcion' => $txtDescripcion
        );
        $this->db->where('id_categoria',$txtId);
        $this->db->update('categoria', $array);
    }
    
    

    function updateEmpleado1($datos){
       
        $consulta = $this->db->where('id_empleado',$datos['id_empleado']);
        $this->db->update('empleado', $consulta);
    }








    function insertarArea($area)
    {
        //var_dump($empleado);exit;
       return $this->db->insert('area', $area);
    }



    function obtenerDpto1()
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
    
    
    
    
}
    ?>