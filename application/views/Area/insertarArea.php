<?php $this->load->view('Plantilla/Menu'); ?>

<div class='container'>
    <div class='well-lg'>
        <div class='row pe-1 pb-1'>
            <div class='container-fluid pt-1'>
                <div class='bs-secondary p-4'>
                    <div class='d-flex align-items-center justify-content-between mb-4'>
                        <a class='btn btn-outline-primary  mb-4' data-bs-toggle='modal' data-bs-target='#exampleModal'><i
                                class='fa fa-plus'></i> Nueva Área</a>
                    </div>
                    <div class='table-responsive'>
                        <table class='table text-start align-middle table-bordered table-hover mb-0'>
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Descripción</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ( $area as $key => $p ) : ?>
                                <tr>
                                    <td>
                                        <?=$p->id_area ?>
                                    </td>
                                    <td>
                                        <?=$p->descripcion ?>
                                    </td>
                                    <td>
                                
                                       <!-- <a data-bs-toggle='modal' data-bs-target='#exampleModal1' class='btn btn-alert-info' style="--bs-btn-padding-y: 
                                    .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" 
                                            href="" value="<">
                                            <i class="bi bi-pencil"> </i></a>-->

                                            <a class='btn btn-alert-info' 
                                            href="<?= base_url('index.php/areaController/eliminarArea') .'?id_area='.$p->id_area; ?>">
                                            <i class="bi bi-trash"> </i></a> 

                                            <a class='btn btn-alert-info' 
                                            href="<?= base_url('index.php/areaController/edit')."/".$p->id_area; ?>">
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



    <!-- Modal -->
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Área</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <div class='contenedor-formulario'>
                        <form method='post' action="<?= base_url('index.php/areaController/registroArea')?>"
                            enctype='multipart/form-data' class='formulario'>

                            <div class='mb-3'>
                                <label for='descripcion' class='form-label'>Área</label>
                                <input class='form-control' required='true' placeholder='Escribe el área' type='text'
                                    name='descripcion'>
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
    <?php $this->load->view( 'Plantilla/Footer' );?>