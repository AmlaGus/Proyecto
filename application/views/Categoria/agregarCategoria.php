<?php $this->load->view('Plantilla/Menu'); ?>


<div class="contenedor-formulario">
    <h3>Registro de Categoría</h3>
    <form method="post" action="<?= base_url('index.php/inicioController/registroCategoria')?>" enctype="multipart/form-data" class="formulario">    

    <div class="mb-3">
    <label for="categoria" class="form-label">Categoría</label>
    <input class="form-control" required="true" placeholder="Categoría" type="text" name="descripcion">
</div>     
      <div class="container">
            <input class="btn btn-success" type=submit value="Registrar">
            <input class="btn btn-danger" type="reset" value="Restablecer">
    </div>
    </form>
</div>


<div class="row">

<div class="col">
<a href="/people/new" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Crear</a>
 
 <table class="table table-responsive">
     <thead>
         <tr>
             <th>Id</th>
             <th>Descripción</th>
             <th>Opciones</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach ($categoria as $key => $p) : ?>
             <tr>
                 <td><?= $p->id_categoria ?></td>
                 <td><?= $p->descripcion ?></td>
                 <td><input class="btn btn-success" type="submit" value="Editar">
                 <input class="btn btn-danger" type="submit" value="Eliminar"></td>
                 

             </tr>
         <?php endforeach ?>
     </tbody>
 </table>
 
 </div>
</div>
</div>
</div>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título del modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>El texto del cuerpo modal va aquí.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('Plantilla/Footer'); ?>
