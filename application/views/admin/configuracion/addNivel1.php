<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/configuracion/storeNivel1" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Agrega Item Nivel 1</h3>

                                    <div class="form-row align-items-center">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="col-sm-6  my-1 ">
                                            <div class="form-group">
                                              <label for="tipoagresor">Tipo de agresor:</label>
                                              <select class="custom-select" name="tipoagresor" id="tipoagresor">
                                              <option value="" selected="selected">Seleccione un valor</option>
                                              <?php foreach($tipoagresor as $agresor):?>
                                                <?php if ($agresor->id>1): ?>
                                                  <option value="<?php echo $agresor->id;?>" <?php echo set_select('tipoagresor',$agresor->id); ?>><?php echo $agresor->nombre;?></option>
                                                <?php endif; ?>

                                              <?php endforeach;?>
                                              </select>
                                              <?php echo form_error("tipoagresor","<span class='text-danger'>","</span>"); ?>
                                            </div>
                                        </div>
                                          </div>
                                        </div>

                                    <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="form-group">
                                            <label for="nombre">Nombres:</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre');?>">
                                            <?php echo form_error("nombre","<span class='text-danger'>","</span>"); ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="form-group">
                                            <label for="nombre">Descripcion:</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo set_value('descripcion');?>">
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
                    <!-- accordion style 1 end -->
