<!-- data table start -->
<div class="col-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h4 class="header-title">  Permisos
        <small>Listado</small></h4>
        <div class="row">
           <?php if($permisos->insert == 1):?>
          <div class="col-md-12">
            <a href="<?php echo base_url();?>administrador/permisos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Permiso</a>
          </div>
        <?php endif ?>
        </div>
        <br>
        <div class="data-tables">
          <table id="dataTable" class="text-center">
            <thead class="bg-light text-capitalize">
              <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Rol</th>
                <th>Acceder</th>
                <th>Leer</th>
                <th>Insertar</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
                <th>opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($permisoslista)):?>
                <?php foreach($permisoslista as $permiso):?>
                  <tr>
                    <td><?php echo $permiso->id;?></td>
                    <td><?php echo $permiso->menu;?></td>
                    <td><?php echo $permiso->rol;?></td>
                    <td>
                      <?php if($permiso->acceso == 0):?>
                        <span class="fa fa-times"></span>
                      <?php else: ?>
                        <span class="fa fa-check"></span>
                      <?php endif;?>
                    </td>
                    <td>
                      <?php if($permiso->read == 0):?>
                        <span class="fa fa-times"></span>
                      <?php else: ?>
                        <span class="fa fa-check"></span>
                      <?php endif;?>
                    </td>
                    <td>
                      <?php if($permiso->insert == 0):?>
                        <span class="fa fa-times"></span>
                      <?php else: ?>
                        <span class="fa fa-check"></span>
                      <?php endif;?>
                    </td>
                    <td>
                      <?php if($permiso->update == 0):?>
                        <span class="fa fa-times"></span>
                      <?php else: ?>
                        <span class="fa fa-check"></span>
                      <?php endif;?>
                    </td>
                    <td>
                      <?php if($permiso->delete == 0):?>
                        <span class="fa fa-times"></span>
                      <?php else: ?>
                        <span class="fa fa-check"></span>
                      <?php endif;?>
                    </td>
                    <td>
                      <div class="btn-group">
                         <?php if($permisos->update == 1):?>
                        <a href="<?php echo base_url()?>administrador/permisos/edit/<?php echo $permiso->id;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                      <?php endif ?>
                        <!--<a href="<?php echo base_url();?>administrador/permisos/delete/<?php echo $permiso->id;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>-->
                      </div>
                    </td>
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
