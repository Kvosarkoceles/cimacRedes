 <!-- data table start -->

                    <div class="col-12 mt-5">
                        <div class="card">

                            <div class="card-body">
                              <div class="col-md-12">
                                  <a href="<?php echo base_url();?>administrador/usuarios/add" class="btn btn-outline-primary mb-3"><span class="fa fa-plus"></span> Agregar Usuario</a>
                              </div>
                                <h4 class="header-title">Usuarias</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                                <th>#</th>
                                                <th>Nombres</th>
                                                <th>Usuaria</th>
                                                <th>Rol</th>
                                                <th>opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($usuarios)):?>
                                                 <?php foreach($usuarios as $usuario):?>
                                                    <tr>
                                                        <td><?php echo $usuario->id;?></td>
                                                        <td><?php echo $usuario->nombre;?></td>
                                                        <td><?php echo $usuario->username;?></td>
                                                        <td><?php echo $usuario->rol;?></td>
                                                        <td><div class="btn-group">
                                                    
                                                    <a href="<?php echo base_url()?>administrador/usuarios/edit/<?php echo $usuario->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>administrador/usuarios/delete/<?php echo $usuario->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div></td>
                                                    </tr>
                                                <?php endforeach;?>
                                            <?php endif;?>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
