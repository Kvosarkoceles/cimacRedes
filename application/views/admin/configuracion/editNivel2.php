<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/configuracion/updateNivel2" method="POST">
      <input type="hidden" class="form-control" id="id_nivel2" name="id_nivel2" value="<?php echo $nivel2->id?>">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Edita Item Nivel 2</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="tipoagresor">Tipo de agresor:</label>
                <select class="custom-select" name="tipoagresor" id="tipoagresor">
                  <?php foreach($tipoagresor as $agresor):?>
                    <?php if ($agresor->id>1): ?>
                      <option value="<?php echo $agresor->id;?>" <?php echo $agresor->id==$nivel2->id_tipoAgresor ? "selected":"";?> ><?php echo $agresor->nombre;?></option>
                    <?php endif; ?>
                  <?php endforeach;?>
                </select>
                <?php echo form_error("rol","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="nivel1">Nivel1:</label>
                <select class="custom-select" name="nivel1" id="nivel1">
                  <option value="<?php echo $nivel2->id_nivel1?>" selected="selected"> <?php echo $nivel2->nombreNivel1?> </option>
                </select>
                <?php echo form_error("rol","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nivel2->nombre?>">
                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $nivel2->descripcion?>">
                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="status">Estado:</label>
                <select class="custom-select" name="status" id="status">
                  <?php foreach($estatus as $agresor):?>
                      <option value="<?php echo $agresor->valor;?>" <?php echo $agresor->valor==$nivel2->id_estatus ? "selected":"";?> ><?php echo $agresor->nombre;?></option>
                  <?php endforeach;?>
                </select>
                <?php echo form_error("rol","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
