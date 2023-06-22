<?php $this->load->view('Plantilla/Menu'); ?>

<div class="contenedor-formulario">
    <h3>Registro de Empleado</h3>

    <form method="post" action="<?= base_url('index.php/inicioController/registroArea')?>" enctype=""
    ="multipart/form-data" class="formulario">
    <div class="formu" aling="center">
    
        <input class="put" required="true" placeholder="descripcion" type="text" name="descripcion">
        <br/>
        <br/>
        
      <div class="contenido">
            <input class="boton" type=submit value="Registrar">
            <input class="boton" type="reset" value="Restablecer">

        </p>
    </div>
    </form>
</div>
</div>
</div>
</div>

<?php $this->load->view('Plantilla/Footer'); ?>
