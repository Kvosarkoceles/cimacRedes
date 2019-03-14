<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/usuarios/passwordUpdate/<?php echo $usuario->id?>" method="POST" autocomplete="off" >
    <input type="hidden" name="idusuario" value="<?php echo $usuario->id?>" id ="idusuario">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Cambiar contraseña</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-4  my-1 ">
            <div class="form-group">
              <label for="nick">Contraseña Actual:</label>
              <input type="password" class="form-control" id="password_old" name="password_old" value="" placeholder="Ingrese password">
                <label for="validacionPass" id="validacionPass" style="color:#FF0000";><?php echo $estadoContraseña ?></label>
                  <?php echo form_error("password_old","<span class='text-danger'>","</span>"); ?>
            </div>
            <div class="form-group">
              <label for="nick">Contraseña nueva:</label>
              <input type="password" class="form-control" id="password_Nuevo" name="password_Nuevo" value="" placeholder="Ingrese password nuevo">
              <i id="see" class="fa fa-eye"></i>
            </div>
              <?php echo form_error("password_Nuevo","<span class='text-danger'>","</span>"); ?>
            <label for="validaciontamañominimo" id="validaciontamañominimo" class="" type='hidden'></label>
            <label for="validaciontamañomaximo" id="validaciontamañomaximo" class="" type='hidden'></label>
            <label for="validacionDigitos" id="validacionDigitos" class="" type='hidden'></label>
            <label for="validacionCaracter" id="validacionCaracter" class="" type='hidden'></label>
            <div class="form-group">
              <label for="rol">Confirmacion de contraseña:</label>
              <input type="password" class="form-control" id="password_Confirmacion" name="password_Confirmacion" value="" placeholder="Repita password nuevo ">
            </div>
            <?php echo form_error("password_Confirmacion","<span class='text-danger'>","</span>"); ?>
            <div class="form-group">
              <button type="password" class="btn btn-success btn-flat">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>              <!-- accordion style 1 end -->
