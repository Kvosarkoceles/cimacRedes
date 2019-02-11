<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Edita Item Nivel 2</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="rol">Tipo de agresor:</label>
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
                <label for="rol">Nivel1:</label>
                <select class="custom-select" name="province" id="province">
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
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nivel2->nombre?>">
                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="nombres">Descripción:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nivel2->descripcion?>">
                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
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
