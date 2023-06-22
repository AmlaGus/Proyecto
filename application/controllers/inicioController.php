<?php

class inicioController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('empleadoModel');
        $this->load->model('categoriaModel');
        $this->load->model('inventarioModel');
       // $this->load->model('administradorModel');

        /*verificar la session
        if (!$this->session->userdata('usuario')) {
            redirect(base_url() . 'Civik');
        }
        // var_dump($this->session->userdata('usuario'));*/
    }

    function index(){
        //$data['permiso'] = $this->UsuarioModel->obtenerPermisoUsuario($this->session->userdata('id_usuario'));
        $this->load->view('Plantilla/Menu');
        $this->load->view('Administrador/Bienvenido');
    }

    function registrArea(){
        $this->load->view('Area/insertarArea');
    }

    function registroArea(){
          $area = $this->input->post();
        //var_dump($empleado);exit;
        $respuesta = $this->empleadoModel->insertarArea($area);
        $this->load->view('Empleados/registroExitoso');
        $this->index();
    }

    function registrarEmpleado(){
        $area ['departamento'] = $this->empleadoModel->obtenerDpto();
        $area ['area'] = $this->empleadoModel->obtenerArea();
        $this->load->view('Empleados/insertarEmpleado',$area);
    }

    //CATEGORIAS
    function registrarCategoria(){
        $cat ['categoria'] = $this->categoriaModel->obtenerCatg();
        $this->load->view('Categoria/agregarCategoria',$cat);
    }

    function registroCategoria(){
        $categoria = $this->input->post();
      //var_dump($empleado);exit;
      $respuesta = $this->categoriaModel->insertarCategoria($categoria);
      $this->load->view('Empleados/registroExitoso');
      $this->index();
  }





  function registrarBienes(){

    $cat['categoria'] = $this->categoriaModel->obtenerCatg();
    $this->load->view('Inventario/ingresarBienes', $cat);
  }


function registroBien(){
    $bien = $this->input->post();

    //var_dump ($bien); exit;
    $respuesta = $this->inventarioModel->insertarProducto($bien);
    $this->load->view('Empleados/registroExitoso');
      $this->index();

}





    function registroEmplead(){


        if($this->input->post()){

            $nombre = $_POST["nombre"];
            $apellido_paterno = $_POST["apellido_paterno"];
            $apellido_materno = $_POST["apellido_materno"];
            $rfc = $_POST["rfc"];
            $cargo = $_POST["cargo"];
            $id_departamento = $_POST["id_departamento"];
            $id_area = $_POST["id_area"];
            $this->empleadoModel->insertarEmpleado($_POST);
            $this->load->view('Empleado/registroExitoso');
            $this->index();
        }       
    }

    function registroEmpleado(){

        $empleado = $this->input->post();
        //var_dump($empleado);exit;
        $respuesta = $this->empleadoModel->insertarEmpleado($empleado);
        $this->load->view('Empleado/registroExitoso');
        $this->index();
    }
}