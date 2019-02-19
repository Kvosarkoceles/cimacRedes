<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/manifestacion/store" method="POST">
  <input type="text" name="id_datosincidente" value="<?php echo $id_datosincidente?>" id ="id_datosincidente">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Agrega Registro</h4>
            <div id="accordion1" class="according">
              <!-- Manifestaciones de la violencia start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion15">Manifestaciones de la violencia</a>
                    </div>
                    <div id="accordion15" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="tipodemanifestacion" class="col-form-label">Tipo de manifestaciones:</label>
                                  <select class="custom-select col-sm-11" name="tipodemanifestacion" id="tipodemanifestacion">
                                    <option value="">Seleccione una opción</option>
                                  <?php foreach($tipodemanifestaciones as $manifestaciones):?>
                                    <?php if ($manifestaciones->id >1): ?>
                                      <option value="<?php echo $manifestaciones->id;?>"><?php echo $manifestaciones->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                  </select>
                              </div>

                              <div class="col-sm-6 my-1">
                                 <label for="observacionesmanifestacion" class="col-form-label form-control-sm input-rounded">Observaciones</label>
                                  <textarea name="observacionesmanifestacion" id="observacionesmanifestacion" style="width:100%; height:100px;"></textarea>
                              </div>
                            </div>

                          </div>
                        </div>
                    </div>
                </div>
              <!-- Manifestaciones de la violencia end -->


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
