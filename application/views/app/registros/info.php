<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <input type="hidden" name="id_registro" value="<?php echo $registros->id?>" id ="id_registro">
  <div class="card">
    <div class="card-body">
      <h4 class="header-title">Información del Registro</h4>
      <p>Fecha de modificación:<small class="text-muted"><?php echo $registros->fechaultimamodificacion ?></small></p>
      <p>por:<small class="text-muted"><?php echo $registros->usuario ?></small></p>
      <div id="accordion1" class="according">
        <!-- Informacion de la Periodista start -->
        <div class="card">
          <div class="card-header">
            <a class="card-link" data-toggle="collapse" href="#accordion11">Información de la Periodista</a>
          </div>
          <div id="accordion11" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table progress-table text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col">Nombre:</th>
                          <th scope="col">Edad:</th>
                          <th scope="col">Estado:</th>
                          <th scope="col">Localidad</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $registros->nombres." ".$registros->apellidoPaterno." ".$registros->apellidoMaterno;?>
                          </td>
                          <td><?php echo $registros->edad;?></td>
                          <td><?php echo $registros->estado;?></td>
                          <td><?php echo $registros->localidad_periodista;?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- iformacion de la Periodista start -->
        <!-- Ubicación de la Agresión start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion12">Ubicación de la Agresión</a>
          </div>
          <div id="accordion12" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <p><strong>Fecha del Incidente: </strong><small class="text-muted"> <?php echo $registros->fechaIncidente;?></small></p>
                <p><strong>Estado: </strong><small class="text-muted"> <?php echo $registros->estadoIncidente;?></small></p>
                <p><strong>Municipio: </strong><small class="text-muted"> <?php echo $registros->municipio;?></small></p>
                <p><strong>Localidad: </strong><small class="text-muted"> <?php echo $registros->localidad;?></small></p>
                <p><strong>Latitud: </strong><small class="text-muted"> <?php echo $registros->latitud;?></small></p>
                <p><strong>Longitud: </strong><small class="text-muted"> <?php echo $registros->longitud;?></small></p>
              </div>
              <div class="card-body">
                <div class="form-row align-items-center">
                  <div class="col-sm-12  my-1">
                    <label for="relatoriaDelHecho" class="col-form-label">Relatoria de los hechos:</label>
                    <textarea name="relatoriaDelHecho" id="relatoriaDelHecho" style="width:100%; height:200px;" readonly=”readonly”> <?php echo $registros->relatoriaDelHecho;?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Ubicación de la Agresión end -->
        <!-- Agresión start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion13">Agresión</a>
          </div>
          <div id="accordion13" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <p><strong>Motivo de las gresiones: </strong><small class="text-muted"> <?php echo $registros->motivodelasgresion;?></small></p>
                <p><strong>Tipo de investigacion: </strong><small class="text-muted"> <?php echo $registros->tipoDeInvestigacion;?></small></p>
                <br>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col">Sexo del agresor</th>
                          <th scope="col">Agresor</th>
                          <th scope="col">Nivel1</th>
                          <th scope="col">Nivel2</th>
                          <th scope="col">Nombre</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($agresor)):?>
                          <?php foreach($agresor as $agresor):?>
                            <tr>
                              <td><?php echo $agresor->sexo;?></td>
                              <td><?php echo $agresor->tipoAgresor;?></td>
                              <td><?php echo $agresor->nivel1;?></td>
                              <td><?php echo $agresor->nivel2;?></td>
                              <td><?php echo $agresor->nombre;?></td>
                              <td>
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
        </div>
        <!-- Agresión end -->
        <!-- Analisis start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion14">Analisis</a>
          </div>
          <div id="accordion14" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="form-row align-items-center">
                  <div class="col-sm-12  my-1">
                    <label for="analisisDeContexto" class="col-form-label">Analisis de contexto:</label>
                    <textarea name="analisisDeContexto" id="analisisDeContexto" style="width:100%; height:300px;" readonly=”readonly”> <?php echo $registros->analisisDeContexto;?></textarea>
                  </div>
                  <div class="col-sm-12 my-1">
                    <label for="analisisDeRiesgo" class="col-form-label">Analisis de riesgo:</label>
                    <textarea name="analisisDeRiesgo" id="analisisDeRiesgo" style="width:100%; height:300px;" readonly=”readonly”> <?php echo $registros->analisisDeRiesgo;?></textarea>
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-12  my-1">
                    <label for="observaciones" class="col-form-label">Observaciones:</label>
                    <textarea name="observaciones" id="observaciones" style="width:100%; height:300px;" readonly=”readonly”> <?php echo $registros->observaciones;?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Analisis end -->
        <!-- Tipo de violencia start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion15">Tipo de violencia</a>
          </div>
          <div id="accordion15" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col" colspan="6">Tipo De Violencia:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Psicologica</td>
                          <td>Fisica</td>
                          <td>Patrimonial</td>
                          <td>Economica</td>
                          <td>Sexual</td>
                          <td>Cibernetica</td>
                        </tr>
                        <tr>
                          <td><?php	if ($registros->tipoDeViolenciaPsicologica > 0){echo "X";}?></td>
                          <td><?php	if ($registros->tipodeViolenciaFisica > 0){echo "X";}?></td>
                          <td><?php	if ($registros->tipoDeViolenciaPatrimonial > 0){echo "X";}?></td>
                          <td><?php	if ($registros->tipodeViolenciaEconomica > 0){echo "X";}?></td>
                          <td><?php	if ($registros->tipoDeViolenciaSexual > 0){echo "X";}?></td>
                          <td><?php	if ($registros->tipoDeViolenciaCibernetica > 0){echo "X";}?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tipo de violencia end -->
        <!-- Modalidad de violencia< start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion16">Modalidad de violencia</a>
          </div>
          <div id="accordion16" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col" colspan="6">Modalidad:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Familiar</th>
                          <td>Laboral</td>
                          <td>En la comunidad</td>
                          <td>Institucional</td>
                          <td>Feminicida</td>
                          <td>Violencia en línea</td>
                        </tr>
                        <tr>
                          <td><?php	if ($registros->modalidadViolenciaFamiliar > 0){echo "X";}?></td>
                          <td><?php	if ($registros->modalidadViolenciaLaboral > 0){echo "X";}?></td>
                          <td><?php	if ($registros->modalidadViolenciaEnLaComunidad > 0){echo "X";}?></td>
                          <td><?php	if ($registros->modalidadViolenciaInstitucional > 0){echo "X";}?></td>
                          <td><?php	if ($registros->modalidadViolenciaFeminicida > 0){echo "X";}?></td>
                          <td><?php	if ($registros->modalidadDeViolenciaCibernetica > 0){echo "X";}?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modalidad de violencia< end -->
        <!-- Manifestaciones de la violencia start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion17">Manifestaciones de la violencia</a>
          </div>
          <div id="accordion17" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col">Tipo</th>
                          <th scope="col">Observaciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($manifestaciones)):?>
                          <?php foreach($manifestaciones as $manifesta):?>
                            <tr>
                              <td><?php echo $manifesta->manifestacion;?></td>
                              <td><?php echo $manifesta->observaciones;?></td>
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
        </div>
        <!-- Manifestaciones de la violencia end -->
        <!-- Consecuencias start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion18">Consecuencias</a>
          </div>
          <div id="accordion18" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col" colspan="6">Consecuencias:</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Fue Despedida</th>
                          <td>Bajo Perfil</td>
                          <td>Desplazamiento</td>
                          <td>Judicializacion</td>
                        </tr>
                        <tr>
                          <td><?php	if ($registros->consecuenciaFueDespedida > 0){echo "X";}?></td>
                          <td><?php echo $registros->bajoPerfil;?></td>
                          <td><?php	if ($registros->consecuenciasDesplazamiento > 0){echo "X";}?></td>
                          <td><?php echo $registros->judicializacion;?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Consecuencias end -->
        <!-- Atención Recibida por cimac start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion19">Atención Recibida Por CIMAC</a>
          </div>
          <div id="accordion19" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <p><strong>Cimac hace acompanamiento ante el mecanismo: </strong><small class="text-muted"> <?php echo $registros->acompanamientocimac;?></small></p>
                <p><strong>Que otra organizacion las acompaña: </strong><small class="text-muted"> <?php echo $registros->queOtraOrganizacionLasAcompana;?></small></p>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-bordered text-center">
                      <tbody>
                        <tr>
                          <td>Médica</th>
                          <td>Psicológica</td>
                          <td>Jurídica</td>
                          <td>Ningúna</td>
                        </tr>
                        <tr>
                          <td><?php	if ($registros->atencionMedicaRecibida > 0){echo "X";}?></td>
                          <td><?php	if ($registros->atencionPsicologicaRecibida > 0){echo "X";}?></td>
                          <td><?php	if ($registros->atencionJuridicaRecibida > 0){echo "X";}?></td>
                          <td><?php	if ($registros->ningunaAtencionRecibida > 0){echo "X";}?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Atención Recibida< end -->
        <!-- Acciones de seguimiento start -->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion20">Acciones de seguimiento</a>
          </div>
          <div id="accordion20" class="collapse show" data-parent="#accordion1">
            <div class="card-body">
              <div class="card-body">
                <div class="card-body">
                  <p><strong>Beneficiaria del mecanismo de protecion: </strong><small class="text-muted"> <?php echo $registros->beneficiariaDelMecanismo;?></small></p>
                  <p><strong>Carpeta de investigacion en alguna procuraduria: </strong><small class="text-muted"> <?php echo $registros->carpetaDeInvestigacion;?></small></p>
                  <p><strong>Queja ante comisión de derechos humanos: </strong><small class="text-muted"> <?php echo $registros->quejaAnteDerechosHumanos;?></small></p>
                  <p><strong>Ingreso cuenta de RENAVI: </strong><small class="text-muted"> <?php echo $registros->renvi;?></small></p>
                  <p><strong>No.RENAVI: </strong><small class="text-muted"> <?php echo $registros->numeroregistrorenavi;?></small></p>
                  <p><strong>Estas de acuedo con el mecanismo de proteccion:</strong><small class="text-muted"> <?php echo $registros->estasDeAcuedoConElMecanismo;?></small></p>
                  <p><strong>Esas medidas te permiten seguir haciendo tu trabajo:</strong><small class="text-muted"> <?php echo $registros->tePermitenSeguirHaciendoTuTrabajo;?></small></p>
                  <p><strong>¿Por que?:</strong>
                  <div class="col-sm-6  my-1">
                    <textarea name="porQue"  id="porQue" style="width:100%; height:100px;" readonly=”readonly”><?php echo $registros->porQue;?></textarea>
                  </div>
                  <p><strong>Has tenido resultados la carpeta de investigacion:</strong><small class="text-muted"> <?php echo $registros->tenidoResultadosLaCarpetaDeInvestigacion;?></small></p>
                  <p><strong>¿Cuales resultados?:</strong>
                  <div class="col-sm-6  my-1">
                    <textarea name="cuales" id="cuales" style="width:100%; height:100px;" readonly=”readonly”><?php echo $registros->cuales;?></textarea>
                  </div>
                  <p><strong>¿Qué a hecho la comisión de derechos humanos?:</strong>
                  <div class="col-sm-6  my-1">
                    <textarea name="queAHechoLaComisionDeDerechosHumanos" id="queAHechoLaComisionDeDerechosHumanos" style="width:100%; height:100px;" readonly=”readonly”><?php echo $registros->queAHechoLaComisionDeDerechosHumanos;?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Acciones de seguimiento end -->
        <!--Archivos start-->
        <div class="card">
          <div class="card-header">
            <a class="collapsed card-link" data-toggle="collapse" href="#accordion21">Archivos</a>
          </div>
          <div id="accordion21" class="collapse show" data-parent="#accordion1">
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
                                      <img src="<?php echo base_url();?>./assets/uploads/registros/imagenes/thumbs/<?php echo $imagen->ruta?>" alt="<?php echo $imagen->titulo?>" />
                                    </a>
                                    <!-- Button trigger modal -->                                                        <!-- Modal -->
                                    <div class="modal fade" id="example_<?php echo $imagen->id?>">
                                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <!--      <h5 class="modal-title">Modal title</h5>-->
                                              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                              <a title="<?php echo $imagen->titulo?>" target="_blank"><img src="<?php echo base_url();?>./assets/uploads/registros/imagenes/<?php echo $imagen->ruta?>" width="700px" height="700px" alt="<?php echo $imagen->ruta?>" />
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
              <!-- Progress Ta  ble end -->
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
        <!-- Archivos end-->
        <!-- Boton start -->
        <div class="col-md-12">
          <a href="<?php echo base_url();?>app/registros/edit/<?php echo $registros->id;?>" class="btn btn-outline-secondary mb-3 float-right"><span class="fa fa-pencil"></span> Editar</a>
        </div>
        <!-- Boton end -->
      </div>
    </div>



  </div>
</div>
<!-- accordion style 1 end -->
