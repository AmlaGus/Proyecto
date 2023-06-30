<?php $this->load->view('Plantilla/Menu'); ?>

<h3 class="text-center">Registro de Empleado</h3>
  <form method="post" action="<?= base_url('index.php/empleadoController/registroEmpleado')?>" enctype=""
    ="multipart/form-data" class="formulario">
<div class="row">
  
  <div class="col-md-3">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input class="form-control" required="true" placeholder="Nombre" type="text" name="empleado[nombre]">
  </div>  

  </div>
  <div class="col-md-3">
  <div class="mb-3">
    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
    <input class="form-control" required="true" placeholder="Apellido Paterno" type="text" name="empleado[apellido_paterno]">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-3">
    <label for="apellido_materno" class="form-label">Apellido Materno</label>
    <input class="form-control" required="true" placeholder="Apellido Materno" type="text" name="empleado[apellido_materno]">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-3">
    <label for="rfc" class="form-label">RFC</label>
    <input class="form-control" required="true" placeholder="RFC" type="text" name="empleado[rfc]">
  </div>
  </div>
  
</div>

<div class="row">
  <div class="col-md-3">
  <div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input class="form-control" required="true" placeholder="Cargo" type="text" name="empleado[cargo]">
  </div>
  </div>
  <div class="col-md-3">
  <div class="mb-3">
    <label for="id_departamento" class="form-label">Departamento</label>
          <select required="true" class="form-control" name="empleado[id_departamento]">
            <option value="">Seleccione</option>
            <?php foreach ($departamento as $ge): ?>
                <option value="<?= $ge->id_departamento ?>"><?= $ge->descripcion ?></option>
            <?php endforeach; ?>
        </select>
</div>
  </div>

  <div class="col-md-3">
  <div class="mb-3">
    <label for="id_area" class="form-label">Área</label>
          <select required="true" class="form-control" name="empleado[id_area]">
          <option value="">Seleccione</option>
            <?php foreach ($area as $ar): ?>
                <option value="<?= $ar->id_area ?>"><?= $ar->descripcion ?></option>
            <?php endforeach; ?>
        </select>
</div>

  </div>
  <div class="col-md-3">
 
  <button type="submit" class="btn btn-success">Registrar</button><br>
  <br>
  <button type="reset" class="btn btn-primary">Cancelar</button>
  </div>
  </form>
</div>
<div class="divider"></div>


<div class='container-fluid'>
    <div class='well-lg'>
        <div class='row pe-1 pb-1'>
            <div class='container-fluid pt-1'>
                <div class='bs-secondary p-4'>    </div>
                    <div class='table-responsive'>
                        <table class='table text-start align-middle table-bordered table-hover mb-0'>
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>RFC</th>
                                    <th>Cargo</th>
                                    <th>Departamento</th>
                                    <th>Área</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $empleado as $key => $p ) : ?>
                                <tr>
                                    <td>
                                        <?=$p->id_empleado ?>
                                    </td>
                                    <td>
                                        <?=$p->nombre ?>
                                    </td>
                                    <td>
                                        <?=$p->apellido_paterno ?>
                                    </td>
                                    <td>
                                        <?=$p->apellido_materno ?>
                                    </td>
                                    <td>
                                        <?=$p->rfc ?>
                                    </td>
                                    <td>
                                        <?=$p->cargo ?>
                                    </td>
                                    <td>
                                        <?=$p->descripcion ?>
                                    </td>
                                    <td>
                                        <?=$p->descripcion_area ?>
                                    </td>
                                    <td>
                                
                                       <!-- <a data-bs-toggle='modal' data-bs-target='#exampleModal1' class='btn btn-alert-info' style="--bs-btn-padding-y: 
                                    .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" 
                                            href="" value="<">
                                            <i class="bi bi-pencil"> </i></a>-->

                                            <a class='btn btn-alert-info' 
                                            href="<?= base_url('index.php/empleadoController/eliminarEmpleado') .'?id_empleado='.$p->id_empleado; ?>">
                                            <i class="bi bi-trash"> </i></a> 

                                            <a class='btn btn-alert-info' 
                                            href="<?= base_url('index.php/empleadoController/edit_empleado')."/".$p->id_empleado; ?>">
                                            <i class="bi bi-pencil"> </i></a>                                 
                                    </td>                                
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Modificar Categoría Bienes</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <div class='contenedor-formulario'>
                        <form method='post' action="<?= base_url('index.php/inicioController/registrarCategoriaActualizada')?>"
                            enctype='multipart/form-data' class='formulario'>

                            <div class='mb-3'>

                                <label for='categoria' class='form-label'>Categoría</label>
                                
                                <input class="form-control" value="<?= $p->id_categoria; ?>"  name="descripcion">
                                
                                <input class="form-control" value="<?= $p->descripcion; ?>"  name="descripcion">
                            </div>
                            <div class='container'>
                                <input class='btn btn-success' type=submit value='Registrar'>
                                <input class='btn btn-danger' type='reset' value='Restablecer'>
                            </div>
                        </form>
                    </div>
                </div>
                <div class='modal-footer'>
                   <!-- <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'>Save changes</button>-->
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('Plantilla/Footer');?>