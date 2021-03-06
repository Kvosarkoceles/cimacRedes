<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/configuracion/updateNivel1" method="POST">
      <input type="text" class="form-control" id="id_nivel1" name="id_nivel1" value="<?php echo $nivel->id?>">
    <div class="card">
      <div class="card-body">
        <h3 class="header-title">Edita Item Nivel 1</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6 my-1 ">
              <label for="rol">Tipo de agresor:</label>
              <select class="custom-select" name="tipoagresor" id="tipoagresor">
                <?php foreach($tipoagresor as $agresor):?>
                  <?php if ($agresor->id>1): ?>
                    <option value="<?php echo $agresor->id;?>" <?php echo $agresor->id==$nivel->id_tipoAgresor ? "selected":"";?> ><?php echo $agresor->nombre;?></option>
                  <?php endif; ?>
                <?php endforeach;?>
              </select>
              <?php echo form_error("tipodemedio","<span class='text-danger'>","</span>"); ?>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre_nivel1" name="nombre" value="<?php echo $nivel->nombre?>">
                <?php echo form_error("nombre","<span class='text-danger'>","</span>"); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="col-sm-6  my-1 ">
              <div class="form-group">
                <label for="nombres">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $nivel->descripcion?>">
                <?php echo form_error("descripcion","<span class='text-danger'>","</span>"); ?>
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
    </div>
  </form>
</div>
