<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
          <h4 class="header-title"><?php echo $titulo; ?></h4>
              <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Estado</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php if(!empty($menus)):?>
                            <?php foreach($menus as $menu):?>
                              <?php if ($menu->id > 1): ?>
                                <tr>
                                  <th scope="col"><?php echo $menu->id;?></th>
                                    <td><?php echo $menu->nombre ;?></td>
                                    <td><?php echo $menu->descripcion;?></td>
                                    <td><?php echo $menu->estatus;?></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <?php if($permisos->update == 1):?>
                                            <li class="mr-3"><a href="<?php echo base_url()?>administrador/configuracion/<?php echo $ruta;?>/<?php echo $menu->id;?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                          <?php endif ?>
                                            <?php if($permisos->delete == 1):?>
                                            <li><a href="<?php echo base_url()?>administrador/configuracion/<?php echo $delete;?>/<?php echo $menu->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                          <?php endif ?>
                                        </ul>
                                      </td>
                                </tr>
                              <?php endif; ?>

                          <?php endforeach;?>
                      <?php endif;?>

                        </tbody>
                    </table>
                </div>
            </div>
            <?php if($permisos->insert == 1):?>
            <div class="col-md-12"  align="right">
              <a href="<?php echo base_url();?>administrador/configuracion/<?php echo $agrega; ?>" class="btn btn-outline-primary mb-3"><span class="fa fa-plus"></span> Agregar Item</a>
            </div>
          <?php endif ?>
        </div>
    </div>
</div>
