<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/configuracion/storeContrato" method="POST" id="agregaitems">
                          <input type="hidden" class="form-control" id="tabla" name="tabla" value="<?php echo $tabla?>">
                          <input type="hidden" class="form-control" id="destino" name="destino" value="<?php echo $destino?>">
                          <input type="hidden" class="form-control" id="metodo" name="metodo" value="<?php echo $metodo?>">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title"><?php echo $titulo ?></h3>
                                  <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-12  my-1 ">
                                          <div class="form-group">
                                            <label for="nombre">Nombres:</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre');?>">
                                            <?php echo form_error("nombre","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>

                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-12  my-1 ">
                                          <div class="form-group">
                                            <label for="descripcion">Descripcion:</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo set_value('descripcion');?>">
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

                    </form>
                    </div>
                    <!-- accordion style 1 end -->
