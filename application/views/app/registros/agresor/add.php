<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/agresor/store" method="POST">
  <input type="text" name="id_datosincidente" value="<?php echo $id_datosincidente?>" id ="id_datosincidente">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Agrega Agresor</h4>
            <div id="accordion1" class="according">
              <!-- Agresión start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion23">Agresor</a>
                    </div>
                    <div id="accordion23" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="card-body">
                              <div class="form-row align-items-center">
                                <div class="col-sm-3  my-1">
                                    <label for="sexoAgresor" class="col-form-label" align="center">Sexo del agresor:</label>
                                    <select class="custom-select col-sm-12" name="sexoAgresor" id="sexoAgresor">
                                      <option value="1">Selecciona un valor</option>
                                    <?php foreach($sexo as $sex):?>
                                      <?php if ($sex->id>1): ?>
                                        <option value="<?php echo $sex->id;?>"><?php echo $sex->nombre;?></option>
                                      <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                    <?php echo form_error("sexoAgresor","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                                </div>
                                <div class="col-sm-3  my-1">
                                    <label for="tipoagresor" class="col-form-label" align="center">Agresor:</label>
                                    <select class="custom-select col-sm-12" name="tipoagresor" id="tipoagresor">
                                      <option value="1">selecione un valor</option>
                                    <?php foreach($agresor as $agres):?>
                                      <?php if ($agres->id > 1): ?>
                                        <option value="<?php echo $agres->id;?>"><?php echo $agres->nombre;?></option>
                                      <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                    <?php echo form_error("tipoagresor","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                                </div>
                                <div class="col-sm-3  my-1">
                                    <label for="nivel" class="col-form-label" align="center">Nivel1:</label>
                                    <select class="custom-select col-sm-12" name="nivel1" id="nivel1" >
                                    <option value="1">selecione un valor</option>
                                    </select>
                                </div>
                                <div class="col-sm-3  my-1">
                                    <label for="nivel2" class="col-form-label" align="center">Nivel2:</label>
                                    <select class="custom-select col-sm-12" name="nivel2" id="nivel2" >

                                    <?php foreach($nivel2_Agresor as $nivelA):?>
                                      <option value="<?php echo $nivelA->id;?>"><?php echo $nivelA->nombre;?></option>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                              </div>
                              <div class="form-row align-items-center">
                                <div class="col-sm-5  my-1">
                                    <label for="nombreagresor" class="col-form-label" align="center">Nombre del agresor:</label>
                                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('nombreagresor');?>" id="nombreagresor" name="nombreagresor">
                                    <?php echo form_error("nombreagresor","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                                </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
              <!-- Agresión end -->


              <!-- Boton start -->
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
              </div>
              <!-- Boton end -->
            </div>
        </div>
    </div>
  </form>
</div>
<!-- accordion style 1 end -->
