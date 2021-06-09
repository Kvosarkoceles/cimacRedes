<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/configuracion/<?php echo $base ?>" method="POST">

                            <input type="hidden" name="idmenu" value="<?php echo $nombres->id?>" id ="idmenu">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Edita menu</h3>
                                    <div class="form-row align-items-center">
                                      <div class="col-sm-4  my-1 ">
                                        <div class="form-group">
                                          <label for="nombres">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre" name="nombres" value="<?php echo $nombres->nombre?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="descripcion">descripcion:</label>
                                          <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $nombres->descripcion?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="status">Estado:</label>
                                          <select class="custom-select" name="status" id="status">
                                            <?php foreach($estatus as $agresor):?>
                                                <option value="<?php echo $agresor->valor;?>" <?php echo $agresor->valor==$nombres->id_estatus ? "selected":"";?> ><?php echo $agresor->nombre;?></option>
                                            <?php endforeach;?>
                                          </select>
                                          <?php echo form_error("rol","<span class='text-danger'>","</span>"); ?>
                                        </div>
                                        <div class="form-group">
                                          <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                        </div>

                                      </div>

                                    </div>





                            </div>

                    </form>
                    </div>
                    <!-- accordion style 1 end -->
