<!-- accordion style 2 start -->

<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>administrador/permisos/update" method="POST"   autocomplete="off" >
      <input type="hidden" name="idpermiso" value="<?php echo $permiso->id?>">
  <!--  <input type="hidden" name="idperiodista" value="<?php echo $periodista->id?>" id ="idperiodista">
    <input type="hidden" name="idtrabajo" value="<?php echo $trabajo ->id?>" id ="idtrabajo">-->
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Edita permiso</h4>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="roles">Roles:</label>
                  <select name="rol" id="rol" class="form-control" disabled="disabled" >
                      <?php foreach($roles as $rol):?>
                          <option value="<?php echo $rol->id;?>"<?php   echo $rol->id == $permiso->id_rol ?"selected":"" ?> ><?php echo $rol->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="menu">Menus:</label>
                  <select name="menu" id="rol" class="form-control" disabled="disabled">
                      <?php foreach($menus as $menu):?>
                          <option value="<?php echo $menu->id;?>"<?php   echo $menu->id == $permiso->menu_id ?"selected":"" ?>><?php echo $menu->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="acceder">Acceder:</label>
                  <select name="acceder" id="acceder" class="form-control">
                      <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>"<?php   echo $sino->valor == $permiso->acceso ?"selected":"" ?>><?php echo $sino->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="read">Leer:</label>
                  <select name="read" id="read" class="form-control">
                      <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>"<?php   echo $sino->valor == $permiso->read ?"selected":"" ?>><?php echo $sino->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="insert">Agregar:</label>
                  <select name="insert" id="insert" class="form-control">
                      <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>"<?php   echo $sino->valor == $permiso->insert ?"selected":"" ?>><?php echo $sino->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="update">Editar:</label>
                  <select name="update" id="update" class="form-control">
                      <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>"<?php   echo $sino->valor == $permiso->update ?"selected":"" ?>><?php echo $sino->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-3 mt-5">
              <div class="form-group">
                  <label for="delete">Eliminar:</label>
                  <select name="delete" id="delete" class="form-control">
                      <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>"<?php   echo $sino->valor == $permiso->delete ?"selected":"" ?>><?php echo $sino->nombre;?></option>
                      <?php endforeach;?>
                  </select>
              </div>
            </div>
            <div class="col-lg-4 mt-5">

              <div class="form-group">
                  <button type="submit" class="btn btn-success btn-flat">Guardar</button>
              </div>

            </div>
        </div>
    </div>
  </form>
</div>

<!-- accordion style 2 end -->
