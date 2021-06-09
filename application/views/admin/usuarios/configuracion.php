<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/usuarios/nickUpdate" method="POST" autocomplete="off" >
    <input type="hidden" name="idusuario" value="<?php echo $usuario->id?>" id ="idusuario">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Configuracion: <?php echo $usuario->nombre;?></h3>

        <div class="form-row align-items-center">
          <div class="col-sm-4  my-1 ">
            <div class="form-group <?php echo !empty(form_error('username'))? 'has-error':'';  ?>">
              <label for="nick">Nick Usuaria:</label>
              <input type="text" class="form-control" id="nick" name="nick" value="<?php echo $usuario->username;?>">
              <?php echo form_error("nick","<span class='text-danger'>","</span>"); ?>
            </div>
            <div class="form_group">
              <ul>
                <li> <a href="<?php echo base_url();?>administrador/usuarios/password/<?php echo $usuario->id?>"> <i class="fa fa-refresh"></i> Cambiar contraseña</a>
                </li>
                <li> <a href="#"> <i class="fa fa-photo"></i> Cambiar Abatar</a>
                </li>
              </ul>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-flat">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
<!-- accordion style 1 end -->
