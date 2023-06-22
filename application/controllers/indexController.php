<?php

class indexController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model('UsuarioModel');
        $this->load->model('AdministradorModel');

        //verificar la session
        if (!$this->session->userdata('usuario')) {
            redirect(base_url() . 'Civik');
        }
        // var_dump($this->session->userdata('usuario'));
    }

    function index(){
        $data['permiso'] = $this->UsuarioModel->obtenerPermisoUsuario($this->session->userdata('id_usuario'));
        $this->load->view('Plantilla/Menu',$data);
        $this->load->view('Administrador/Bienvenido');
    }

    //APARTADO DOCENTES

    function AdminDocentes(){
        $datosUsuario['ArchivoJs'] = array(
            //SCRIPTS PARA MODALES
            base_url('informacion/js/jquery.min.js'),
            base_url('informacion/css/bootstrap.min.js')
        );
        $data['permiso'] = $this->UsuarioModel->obtenerPermisoUsuario($this->session->userdata('id_usuario'));
        $datosUsuario ['Usuarios'] = $this->AdministradorModel->obtenerUsuarios();
        $this->load->view('Plantilla/Menu',$data);
        $this->load->view('Administrador/AdministrarDocentes/AdminDocente', $datosUsuario);
    }

    function registrarUsuarioDocente(){
        $datosUsuario = $this->input->post();
        $respuesta = $this->AdministradorModel->insertarUsuarioRegistro($datosUsuario);
        redirect(base_url('Administrador/AdminDocentes'));
    }

    function eliminarUsuarioD(){
        $this->AdministradorModel->borrarUsuarioDocente();
        redirect(base_url('Administrador/AdminDocentes'), 'refresh');
    }

    function editarUsuario($id_usuario){
        $datos['UsuarioEditar'] = $this->AdministradorModel->modificarUsuarioid($id_usuario);
        $this->load->view('Administrador/AdministrarDocentes/AdminDocente', $datos);
    }
}

?>