<!-- accordion style 2 start -->
<div class="col-lg-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h4 class="header-title">Informacion de la periodista</h4>
      <p>Fecha de modificación:<small class="text-muted"><?php echo $periodista->fechaultimamodificacion ?></small></p>
      <p>por:<small class="text-muted"><?php echo $periodista->usuario ?></small></p>
      <div id="accordion2" class="according accordion-s2">
        <div class="card">
          <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#accordion21">Informacion Personal</a>
          </div>
          <div id="accordion21" class="collapse show" data-parent="#accordion2">
            <div class="card-body">
              <p><strong>Nombre:</strong><small class="text-muted"><?php echo $periodista->nombres." ".$periodista->apellidoPaterno." ".$periodista->apellidoMaterno;?></small></p>
              <p><strong>Edad:</strong><small class="text-muted"><?php echo $periodista->edad;?></small></p>
              <p><strong>Estado:</strong><small class="text-muted"><?php echo $periodista->estado;?></small></p>
              <p><strong>Localidad:</strong><small class="text-muted"><?php echo $periodista->localidad;?></small></p>
              <p><strong>Tipo de casa:</strong><small class="text-muted"><?php echo $periodista->casa;?></small></p>
              <p><strong>Vive con:</strong><small class="text-muted"> <?php echo $periodista->viveCon;?></small></p>
              <p><strong>Dependientes economicos:</strong><small class="text-muted"><?php echo $periodista->dependientesEconomicos;?></small></p>
              <p><strong>Hijas/Hijos:</strong><small class="text-muted"><?php echo $periodista->hijos;?></small></p>
              <p><strong>Estado civil:</strong><small class="text-muted"> <?php echo $periodista->estadocivil;?></small></p>
              <p><strong>¿Pertenece a la alguna comunidad indigena?</strong><small class="text-muted"><?php echo $periodista->indigena;?></small></p>
              <p><strong>¿Pertenece a la comunidad LGBTTTI?</strong><small class="text-muted"><?php echo $periodista->LGBTTTI;?></small></p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">Informacion de contacto</a>
          </div>
          <div id="accordion22" class="collapse show" data-parent="#accordion2">
            <div class="card-body">
              <p><strong>Telefono particular :</strong><small class="text-muted"><?php echo $periodista->telefonoparticular;?></small></p>
              <p><strong>Telefono celular :</strong><small class="text-muted"><?php echo $periodista->telefonocelular;?></small></p>
              <p><strong>Correo electronico:</strong><small class="text-muted"><?php echo $periodista->email;?></small></p>
              <p><strong>Telegram :</strong><small class="text-muted"><?php echo $periodista->telegram ;?></small></p>
              <p><strong>Skype:</strong><small class="text-muted"><?php echo $periodista->skype;?></small></p>
              <p><strong>Facebook :</strong><small class="text-muted"> <?php echo $periodista->facebook;?></small></p>
              <p><strong>Twitter:</strong><small class="text-muted"><?php echo $periodista->twitter;?></small></p>
              <p><strong>Instagram:</strong><small class="text-muted"> <?php echo $periodista->instagram;?></small></p>
              <p><strong>Youtube:</strong><small class="text-muted"><?php echo $periodista->youtube;?></small></p>
              <p><strong>Snapchat:</strong><small class="text-muted"><?php echo $periodista->snapchat;?></small></p>
              <p><strong>Otra red social:</strong><small class="text-muted"><?php echo $periodista->otraredsocial;?></small></p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion23">Informacion Laboral</a>
          </div>
          <div id="accordion23" class="collapse show" data-parent="#accordion2">
            <div class="card-body">
              <p><strong>Nombre del medio :</strong><small class="text-muted"><?php echo $trabajo->nombreDelMedio;?></small></p>
              <p><strong>Tipo de medio :</strong><small class="text-muted"><?php echo $trabajo->tipodemedio;?></small></p>
              <p><strong>Para cuantos medios labora:</strong><small class="text-muted"><?php echo $trabajo->paracuantosmedioslabora ;?></small></p>
              <p><strong>Tipo de contrato:</strong><small class="text-muted"><?php echo $trabajo->tipodecontrato ;?></small></p>
              <p><strong>Direccion del medio:</strong><small class="text-muted"><?php echo $trabajo->DireccionDelMedio ;?></small></p>
              <p><strong>Cargo en el medio:</strong><small class="text-muted"><?php echo $trabajo->cargoenelmedio ;?></small></p>
              <p><strong>Fuente:</strong><small class="text-muted"><?php echo $trabajo->fuente;?></small></p>
              <p><strong>Medio de la agresión:</strong><small class="text-muted"> <?php echo $trabajo->Links1;?></small></p>
              <p><strong>Medio donde labora:</strong><small class="text-muted"><?php echo $trabajo->Links2;?></small></p>
              <p><strong>Medio donde labora:</strong><small class="text-muted"> <?php echo $trabajo->Links3;?></small></p>
              <p><strong>Medio donde labora:</strong><small class="text-muted"><?php echo $trabajo->Links4;?></small></p>
              <p><strong>Medio donde labora:</strong><small class="text-muted"><?php echo $trabajo->Links5;?></small></p>
              <p><strong>Años de ejercer el periodismo:</strong><small class="text-muted"><?php echo $trabajo->AnosDeEjercerElPeriodismo;?></small></p>
              <p><strong>Sexo del jefe imediato:</strong><small class="text-muted"><?php echo $trabajo->sexo;?></small></p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion25">Archivos</a>
          </div>
          <div id="accordion25" class="collapse show" data-parent="#accordion2">
            <div class="card-body">
              <!-- Progress Table start -->
              <div class="col-12 mt-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title">Imagenes</h4>
                    <div class="single-table">
                      <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                          <thead class="text-uppercase">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombre del archivo</th>
                              <th scope="col">Descripción</th>
                              <th scope="col">Fecha de subida</th>
                              <th scope="col"></th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($imagenes)):?>
                              <?php foreach($imagenes as $imagen):?>
                                <tr>
                                  <td scope="col"><?php echo $imagen->id?></td>
                                  <td scope="col"><?php echo $imagen->titulo?></td>
                                  <td scope="col"><?php echo $imagen->descripcion?></td>
                                  <td scope="col" ><?php echo $imagen->fechaRegistro?></td>
                                  <td valign="middle">
                                    <a data-toggle="modal" data-target="#example_<?php echo $imagen->id?>"  title="<?php echo $imagen->titulo?>">
                                      <img src="<?php echo base_url();?>./assets/uploads/periodista/imagenes/thumbs/<?php echo $imagen->ruta?>" alt="<?php echo $imagen->titulo?>" /></a>
                                      <!-- Button trigger modal -->                                                        <!-- Modal -->
                                      <div class="modal fade" id="example_<?php echo $imagen->id?>">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <!--      <h5 class="modal-title">Modal title</h5>-->
                                              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                              <a title="<?php echo $imagen->titulo?>" target="_blank"><img src="<?php echo base_url();?>./assets/uploads/periodista/imagenes/<?php echo $imagen->ruta?>" width="700px" height="700px" alt="<?php echo $imagen->ruta?>" />
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Vertically centered modal end -->
                                    </td>
                                    <td valign="middle">
                                      <ul class="d-flex justify-content-center">
                                        <li class="mr-1">  <a href="<?php echo base_url();?>./assets/uploads/periodista/imagenes/<?php echo $imagen->ruta?>" download="<?php echo $imagen->ruta?>"><i class="fa fa-cloud-download"></i></a></li>
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
                <!-- Progress Table start -->
                <div class="col-12 mt-5">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="header-title">Documentos</h4>
                      <div class="single-table">
                        <div class="table-responsive">
                          <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre del archivo</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Fecha de subida</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php if(!empty($archivos)):?>
                                <?php foreach($archivos as $archivo):?>
                                  <tr>
                                    <td scope="col"><?php echo $archivo->id?></td>
                                    <td scope="col"><?php echo $archivo->titulo?></td>
                                    <td scope="col"><?php echo $archivo->descripcion?></td>
                                    <td scope="col" ><?php echo $archivo->fechaRegistro?></td>

                                      <td valign="middle">
                                        <ul class="d-flex justify-content-center">
                                          <li class="mr-1">
                                             <a href="<?php echo base_url();?>app/archivos/downloads/<?php echo $archivo->ruta ?>"> <i class="fa fa-cloud-download"></i></a>
                                           </li>
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
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#accordion24">Informacion de Incidentes</a>
              </div>
              <div id="accordion24" class="collapse show" data-parent="#accordion2">
                <div class="card-body">
                  <!-- Progress Table start -->
                  <div class="col-12 mt-5">
                    <div class="card">
                      <div class="card-body">
                        <div class="single-table">
                          <div class="table-responsive">
                            <table class="table table-hover progress-table text-center">
                              <thead class="text-uppercase">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Fecha</th>
                                  <th scope="col">Lugar</th>
                                  <th scope="col">Tipo de violencia</th>
                                </tr>

                              </thead>
                              <tbody>
                                <?php if(!empty($registros)):?>
                                  <?php foreach($registros as $registro):?>
                                    <tr>
                                      <td><?php echo $registro->registroID;?></td>
                                      <td><?php echo $registro->fechaIncidente;?></td>
                                      <td><?php echo $registro->estado;?></td>
                                      <td><ul class="list-inline">
                                        <li><?php	if ($registro->tipoDeViolenciaPsicologica > 0){echo "Psicologica";}?></li>
                                        <li><?php	if ($registro->tipodeViolenciaFisica > 0){echo "Fisica";}?></li>
                                        <li><?php	if ($registro->tipoDeViolenciaPatrimonial > 0){echo "Patrimonial";}?></li>
                                        <li><?php	if ($registro->tipodeViolenciaEconomica > 0){echo "Economica";}?></li>
                                        <li><?php	if ($registro->tipoDeViolenciaSexual > 0){echo "Sexual";}?></li>
                                        <li><?php	if ($registro->tipoDeViolenciaCibernetica > 0){echo "Cibernetica";}?></li>
                                      </ul></td>
                                      <td align="center">
                                        <a href="<?php echo base_url()?>app/registros/info/<?php echo $registro->registroID;?>" class="text-primary"><i class="fa fa-eye"></i></a>
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
        <div class="col-md-12">
          <a href="<?php echo base_url();?>app/periodistas/edit/<?php echo $periodista->id;?>" class="btn btn-outline-secondary mb-3 float-right"><span class="fa fa-pencil"></span> Editar</a>
        </div>
      </div>
    </div>
<!-- accordion style 2 end -->
