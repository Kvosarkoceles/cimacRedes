<!-- nav tab start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="edades-tab" data-toggle="tab" href="#edades" role="tab" aria-controls="edades" aria-selected="false">Edades</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link " id="Tipocasa-tab" data-toggle="tab" href="#Tipocasa" role="tab" aria-controls="Tipocasa" aria-selected="true">Tipo de vivienda</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link " id="cargoenelmedio-tab" data-toggle="tab" href="#cargoenelmedio" role="tab" aria-controls="cargoenelmedio" aria-selected="true">Cargo en el medio</a>
                </li>
              <li class="nav-item">
                    <a class="nav-link" id="estadocivil-tab" data-toggle="tab" href="#estadocivil" role="tab"   aria-controls="estadocivil" aria-selected="false">Estado Civil</a>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
              <div class="tab-pane fade show active" id="edades" role="tabpanel" aria-labelledby="edades-tab">
                <!-- Tabla edades  start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                              <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-hover progress-table text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php if(!empty($edades)):?>
                                            <?php foreach($edades as $edad):?>
                                              <?php if ($edad->id > 1): ?>
                                                <tr>
                                                  <th scope="col"><?php echo $edad->id;?></th>

                                                    <td><?php echo $edad->parametro ;?></td>
                                                    <td><?php echo $edad->descripcion;?></td>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="<?php echo base_url()?>administrador/configuracion/editEdades/<?php echo $edad->id;?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="<?php echo base_url()?>administrador/configuracion/delete/<?php echo $edad->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
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
                        </div>
                    </div>
                </div>
                <!-- Tabla edadese end -->
              </div>
              <div class="tab-pane fade " id="Tipocasa" role="tabpanel" aria-labelledby="Tipocasa-tab">
                  <!-- Progress Table start -->
                  <div class="col-12 mt-5">
                      <div class="card">
                          <div class="card-body">
                                <div class="single-table">
                                  <div class="table-responsive">
                                      <table class="table table-hover progress-table text-center">
                                          <thead class="text-uppercase">
                                              <tr>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Nombre</th>
                                                  <th scope="col">Descripción</th>
                                                  <th scope="col">action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php if(!empty($tipocasa)):?>
                                              <?php foreach($tipocasa as $tipocasa):?>
                                                <?php if ($tipocasa->id > 1): ?>
                                                  <tr>
                                                    <th scope="col"><?php echo $tipocasa->id;?></th>
                                                      <td><?php echo $tipocasa->nombre;?></td>
                                                      <td><?php echo $tipocasa->descripcion;?></td>
                                                      <td>
                                                          <ul class="d-flex justify-content-center">
                                                              <li class="mr-3"><a href="<?php echo base_url()?>administrador/configuracion/editCasa/<?php echo $tipocasa->id;?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                              <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
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
                          </div>
                      </div>
                  </div>
                  <!-- Progress Table end -->
                </div>
              <div class="tab-pane fade " id="cargoenelmedio" role="tabpanel" aria-labelledby="cargoenelmedio-tab">
                  <!-- Progress Table start -->
                  <div class="col-12 mt-5">
                      <div class="card">
                          <div class="card-body">
                                <div class="single-table">
                                  <div class="table-responsive">
                                      <table class="table table-hover progress-table text-center">
                                          <thead class="text-uppercase">
                                              <tr>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Nombre</th>
                                                  <th scope="col">Descripción</th>
                                                  <th scope="col">action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php if(!empty($cargoenelmedio)):?>
                                              <?php foreach($cargoenelmedio as $cargo):?>
                                              <tr>
                                                <th scope="col"><?php echo $cargo->id;?></th>

                                                  <td><?php echo $cargo->nombre;?></td>
                                                  <td><?php echo $cargo->descripcion;?></td>
                                                  <td>
                                                      <ul class="d-flex justify-content-center">
                                                          <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                          <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                      </ul>
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
                  </div>
                  <!-- Progress Table end -->
                </div>
              <div class="tab-pane fade" id="estadocivil" role="tabpanel" aria-labelledby="estadocivil-tab">
                  <!-- Progress Table start -->
                  <div class="col-12 mt-5">
                      <div class="card">
                          <div class="card-body">
                                <div class="single-table">
                                  <div class="table-responsive">
                                      <table class="table table-hover progress-table text-center">
                                          <thead class="text-uppercase">
                                              <tr>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">Nombre</th>
                                                  <th scope="col">Descripción</th>
                                                  <th scope="col">action</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                            <?php if(!empty($estadocivil)):?>
                                              <?php foreach($estadocivil as $civil):?>
                                              <tr>
                                                <th scope="col"><?php echo $civil->id;?></th>

                                                  <td><?php echo $civil->nombre ;?></td>
                                                  <td><?php echo $civil->descripcion;?></td>
                                                  <td>
                                                      <ul class="d-flex justify-content-center">
                                                          <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                          <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                      </ul>
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
                  </div>
                  <!-- Progress Table end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- nav tab end -->
