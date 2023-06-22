<?php $this->load->view('Plantilla/Menu'); ?>

<div class="container">
    <h3>Registro de Bienes Muebles</h3>

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
    <label for="modelo" class="form-label">Modelo</label>
    <input class="form-control" required="true" placeholder="RFC" type="text" name="productos[modelo]">
  </div>

  <div class="mb-3">
    <label for="serie" class="form-label">Serie</label>
    <input class="form-control" required="true" placeholder="Serie" type="text" name="productos[serie]">
  </div>

  <div class="mb-3">
    <label for="id_categoria" class="form-label">Categoría</label>
          <select required="true" class="form-control" name="productos[id_categoria]">
            <option value="">Seleccione</option>
            <?php foreach ($categoria as $cat): ?>
                <option value="<?= $cat->id_categoria ?>"><?= $cat->descripcion ?></option>
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
