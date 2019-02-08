<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Edita Item Nivel 2</h3>
                                <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
                                    <div class="form-row align-items-center">
                                        <div class="col-sm-6  my-1 ">
                                          <div class="col-sm-6  my-1 ">
                                            <div class="form-group">
                                              <label for="rol">Tipo de agresor:</label>
                                              <select class="custom-select" name="Nivel1" id="Nivel1">
                                                <?php foreach($tipoagresor as $agresor):?>
                                                  <option value="<?php echo $agresor->id;?>" <?php echo $agresor->id == $nivel->id_tipoAgresor ?"selected":"" ?> ><?php echo $agresor->nombre;?></option>
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
                                            <label for="nombres">Nombres:</label>
                                            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nivel->nombre?>">
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

                                </form>




                            </div>

                    </form>
                    </div>
                    <!-- accordion style 1 end -->
