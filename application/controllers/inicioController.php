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

  function eliminarCategoria(){
    $this->categoriaModel->borrarCategoria();
    redirect(base_url('index.php/inicioController/registrarCategoria'), 'refresh');
  }

  function edit($id_categoria = NULL){
    if($id_categoria != NULL){
        //mostrar datos
        $data['datosCategoria'] = $this->categoriaModel->obtenerCategoriaEspecifico($id_categoria);
        $this->load->view('Categoria/edit', $data);
    }else{
        //regresar y enviar parametro
        redirect ('');
    }

  }

  function updateCat(){
    $datos = $this->input->post();
    if(isset($datos)){
        $txtId = $datos['id_categoria'];
        $txtDescripcion = $datos['descripcion'];
        $this->categoriaModel->updateCategoria($txtId, $txtDescripcion);
        redirect ('');
    }
  }







  function editarCat(){  
    $this->CategoriaModel->borrarCategoria();
    redirect(base_url('index.php/CategoriaController/'), 'refresh');  
}

  function editarCategoria(){


    if($_POST){
        $this->CategoriaModel->editarCate($_POST);
    }
    $this->load->view('Categoria/editarCategoria');
}

function editCategoria()
  {

    var_dump($id_categoria);exit;
   echo $id_categoria;exit;
    $data['categoria'] = $this->categoriaModel->getCat($id_categoria);
    $data['title'] = "Editar Categoria";
    $this->load->view('Categoria/editarCategoria', $data['id_categoria']);     
  }

function update($id_categoria){
    $data['data-categoria']=$this->categoriaModel->get_categoria_byID();
    if(!empty($data['data-categoria'])){
        $this->load->view('Categoria/editarCategoria',$data);
    }else{
        redirect(site_url());
    }

}


function registrarCategoriaActualizada($id_categoria)
{
    //$data['permiso'] = $this->UsuarioModel->obtenerPermisoUsuario($this->session->userdata('id_usuario'));
    $datosCat = $this->input->post();
    var_dump($datosCat); exit;
    $this->categoriaModel->registroCategoria($datosCat);
    redirect(base_url('index.php/inicioController/'));
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


