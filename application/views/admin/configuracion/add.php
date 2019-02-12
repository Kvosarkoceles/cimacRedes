<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/configuracion/store" method="POST">
                          <input type="text" class="form-control" id="tabla" name="tabla" value="<?php echo $tabla?>">
                          <input type="text" class="form-control" id="destino" name="destino" value="<?php echo $destino?>">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title"><?php echo $titulo ?></h3>
                                  <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="form-group">
                                            <label for="nombre">Nombres:</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombres');?>">
                                            <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-row align-items-center">
                                      <div class="col-sm-6  my-1 ">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="form-group">
                                            <label for="nombre">Descripcion:</label>
                                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo set_value('nombres');?>">
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
