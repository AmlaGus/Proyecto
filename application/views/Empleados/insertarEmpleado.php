<?php $this->load->view('Plantilla/Menu'); ?>

<div class="container">
    <h3>Registro de Empleado</h3>

    <form method="post" action="<?= base_url('index.php/inicioController/registroEmpleado')?>" enctype=""
    ="multipart/form-data" class="formulario">

  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input class="form-control" required="true" placeholder="Nombre" type="text" name="empleado[nombre]">
  </div>

  <div class="mb-3">
    <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
    <input class="form-control" required="true" placeholder="Apellido Paterno" type="text" name="empleado[apellido_paterno]">
  </div>

  <div class="mb-3">
    <label for="apellido_materno" class="form-label">Apellido Materno</label>
    <input class="form-control" required="true" placeholder="Apellido Materno" type="text" name="empleado[apellido_materno]">
  </div>

  <div class="mb-3">
    <label for="rfc" class="form-label">RFC</label>
    <input class="form-control" required="true" placeholder="RFC" type="text" name="empleado[rfc]">
  </div>

  <div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input class="form-control" required="true" placeholder="Cargo" type="text" name="empleado[cargo]">
  </div>

  <div class="mb-3">
    <label for="id_departamento" class="form-label">Departamento</label>
          <select required="true" class="form-control" name="empleado[id_departamento]">
            <option value="">Seleccione</option>
            <?php foreach ($departamento as $ge): ?>
                <option value="<?= $ge->id_departamento ?>"><?= $ge->descripcion ?></option>
            <?php endforeach; ?>
        </select>
</div>

<div class="mb-3">
    <label for="id_area" class="form-label">Área</label>
          <select required="true" class="form-control" name="empleado[id_area]">
          <option value="">Seleccione</option>
            <?php foreach ($area as $ar): ?>
                <option value="<?= $ar->id_area ?>"><?= $ar->descripcion ?></option>
            <?php endforeach; ?>
        </select>
</div>

  
  <button type="submit" class="btn btn-success">Registrar</button>
  <button type="reset" class="btn btn-primary">Cancelar</button>
</form>
    
    
</div>
</div>
</div>

<?php $this->load->view('Plantilla/Footer'); ?>
