<?php

class categoriaModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

//CONSULTAS PARA MODULO CATEGORIA


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


function borrarCategoria(){
    $id_categoria = $_GET['id_categoria'];
    $this->db->delete('categoria', array('id_categoria'=>$id_categoria));
}

function obtenerCategoriaEspecifico($id_categoria){
    $this->db->where("id_categoria","$id_categoria");
    $consulta = $this->db->get ('categoria');
    if($consulta->num_rows()>0) return $consulta->row();
    else return false;
}

function updateCategoria($txtId, $txtDescripcion){
    $array = array(
        'id_categoria' => $txtId,
        'descripcion' => $txtDescripcion
    );
    $this->db->where('id_categoria',$txtId);
    $this->db->update('categoria', $array);
}


//--------------------------- TERMINA MODULO CATEGORIA-----------
function updateCat($id_categoria) 
{
    $data = ['descripcion' => $this->input->post('descripcion')];

    $result = $this->db->where('id_categoria',$id_categoria)->update('categoria',$data);
    return $result;
             
}









    function guardarCat($post){
        $datosCategoria = array();        
        $datosCategoria['id_categoria'] = $post['id_categoria'];
        $datosCategoria['descripcion'] = $post['descripcion'];

        if($datosCategoria['id_categoria']>0){
            //actualizar
            $this->db->where('id_categoria', $datosCategoria['id_categoria']);
            $this->db->update('categoria',$datosCategoria);
            $ruta = base_url('index.php/CrudCategoriaController');
            echo "<script>
            alert('Categoria modificada, satisfactoriamente.');
            window.location = '{$ruta}';
            </script>";
        }else{
            //guardar
            $this->db->insert('categoria', $datosCategoria);
            $ruta = base_url('index.php/CrudCategoriaController');
            echo "<script>
            alert('Categoria guardada, satisfactoriamente.');
            window.location = '{$ruta}';
            </script>";

        }
    }

    

    






    public function editCategoria($id_categoria){

        $categoria = $this->db->get_where('categoria', ['id_categoria' => $id_categoria ])->result();
        return $categoria;

    }

        function borra1($get){
            $id_categoria = $_GET['id_categoria'];
            $this->db->delete('categoria', array('id_categoria'=>$id_categoria));
        }
       function borrar($get){
            $this->db->where('id_categoria', $get['id_categoria']);
            $this->db->delete('categoria');
        }


        function editarCate($post){
            $datosCategoria = array();        
            $datosCategoria['id_categoria'] = $post['id_categoria'];
            $datosCategoria['descripcion'] = $post['descripcion'];

            $this->db->where('id_categoria', $datosCategoria['id_categoria']);
            $this->db->update('categoria',$datosCategoria);
            $ruta = base_url('index.php/inicioController');
            echo "<script>
            alert('Categoria modificada, satisfactoriamente.');
            window.location = '{$ruta}';
            </script>";
    
        }
    






   

 function getCat($id_categoria)
    {
        $categoria = $this->db->get_where('categoria', ['id_categoria' => $id_categoria ])->row();
        return $categoria;
    }


   
 



   

    function get_categoria_byID($id_categoria){
        $query = $this->db->query("select * from categoria where id_categoria='$id_categoria'");
        return $query->row();
    }

    function modificarCategoriaId(){
        $this->db->where('id_categoria');
        $query = $this->db->get('categoria');
        return $query->row();
    }

    function registroCategoria($datosCategoria)
    {
        $this->db->update('categoria', $datosCategoria);
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