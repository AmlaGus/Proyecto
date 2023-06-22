<?php $this->load->view('Plantilla/Menu'); ?>

<div class="container">
    <h3>Registro de Empleado</h3>

    <form method="post" action="<?= base_url('index.php/inicioController/registroBien')?>" enctype=""
    ="multipart/form-data" class="formulario">

  <div class="mb-3">
    <label for="nombre" class="form-label">Tipo</label>
    <input class="form-control" required="true" placeholder="tipo" type="text" name="productos[tipo]">
  </div>

  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <input class="form-control" required="true" placeholder="Descripción del Bien" type="text" name="productos[descripcion]">
  </div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input class="form-control" required="true" placeholder="Marca del bien" type="text" name="productos[marca]">
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
