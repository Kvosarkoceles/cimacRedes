<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">

                        <form action="<?php echo base_url();?>app/archivos/subirImagen" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Agrega Archivo</h3>
                                <form action="<?php echo base_url();?>administrador/usuarios/store" method="POST">
                                    <div class="form-row align-items-center">
                                      <div class="col-sm-4  my-1 ">
                                        <div class="form-group">
                                          <label for="titulo">Titulo:</label>
                                          <input type="text" name=titulo_imagen id=titulo_imagen class="form-control">

                                        </div>
                                        <div class="form-group">
                                          <label for="imagen">Imagen:</label>
                                          <input type="file" name=archivo_imagen id=archivo_imagen class="form-control">
                                        </div>

                                        <div class="form-group">
                                          <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                        </div>

                                      </div>

                                    </div>
                                </form>




                            </div>

                    </form>
                    </div>
                    <!-- accordion style 1 end -->
