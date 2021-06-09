<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>administrador/usuarios/update" method="POST">
                            <input type="hidden" name="idusuario" value="<?php echo $usuario->id?>" id ="idusuario">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Agrega Usuaria</h3>

                                    <div class="form-row align-items-center">
                                      <div class="col-sm-4  my-1 ">
                                        <div class="form-group">
                                          <label for="nombres">Nombres:</label>
                                          <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $usuario->nombre;?>">
                                          <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
                                        </div>
                                        <div class="form-group <?php echo !empty(form_error('username'))? 'has-error':'';  ?>">
                                          <label for="nick">Usuario:</label>
                                          <input type="text" class="form-control" id="nick" name="nick" value="<?php echo $usuario->username;?>">
                                          <?php echo form_error("nick","<span class='text-danger'>","</span>"); ?>
                                        </div>

                                        <div class="form-group">
                                          <label for="rol">Roles:</label>
                                          <select class="custom-select" name="rol" id="rol">
                                          
                                          <?php foreach($roles as $rol):?>

                                              <option value="<?php echo $rol->id;?>" <?php echo $rol->id == $usuario->id_rol ?"selected":"" ?> ><?php echo $rol->nombre;?></option>
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
