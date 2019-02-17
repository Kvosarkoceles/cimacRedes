<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/registros/store" method="POST">
    <input type="hidden" name="idperiodista" value="<?php echo $registros->id?>" id ="idperiodista">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Agrega Registro</h4>
            <div id="accordion1" class="according">
              <!-- Informacion de la Periodista start -->
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#accordion11">Información de la Periodista</a>
                    </div>
                    <div id="accordion11" class="collapse" data-parent="#accordion1">
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
                                                <td><?php echo $registros->localidad;?></td>
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
                    <div id="accordion12" class="collapse" data-parent="#accordion1">
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion23">Agresión</a>
                    </div>
                    <div id="accordion23" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                            <div class="card-body">
                              <div class="form-row align-items-center">
                                <div class="col-sm-4  my-1">
                                    <label for="motivodelasgresion" class="col-form-label" align="center">Motivo de las gresiones</label>
                                    <select class="custom-select col-sm-12" name="motivodelasgresion" id="motivodelasgresion">
                                      <option value="">Selecciona un valor</option>
                                    <?php foreach($motivodelasgresion as $motivo):?>
                                      <?php if ($motivo->id>1): ?>
                                        <option value="<?php echo $motivo->id;?><?php echo set_select('motivodelasgresion',$motivo->id); ?>"><?php echo $motivo->nombre;?></option>
                                      <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-sm-4  my-1">
                                    <label for="tipoDeInvestigacion" class="col-form-label" align="center">Tipo de investigacion:</label>
                                    <select class="custom-select col-sm-12" name="tipoDeInvestigacion" id="tipoDeInvestigacion">
                                      <option value="">Selecciona un valor</option>
                                    <?php foreach($tipoDeInvestigacion as $tipo):?>
                                        <?php if ($tipo->id>1): ?>
                                          <option value="<?php echo $tipo->id;?>"><?php echo $tipo->nombre;?></option>
                                        <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-sm-4  my-1">
                                    <label for="sexoAgresor" class="col-form-label" align="center">Sexo del agresor:</label>
                                    <select class="custom-select col-sm-12" name="sexoAgresor" id="sexoAgresor">
                                      <option value="">Selecciona un valor</option>
                                    <?php foreach($sexo as $sex):?>
                                      <?php if ($sex->id>1): ?>
                                        <option value="<?php echo $sex->id;?>"><?php echo $sex->nombre;?></option>
                                      <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-sm-4  my-1">
                                    <label for="tipoagresor" class="col-form-label" align="center">Agresor:</label>
                                    <select class="custom-select col-sm-12" name="tipoagresor" id="tipoagresor">
                                      <option value="">selecione un valor</option>
                                    <?php foreach($agresor as $agres):?>
                                      <?php if ($agres->id > 1): ?>
                                        <option value="<?php echo $agres->id;?>"><?php echo $agres->nombre;?></option>
                                      <?php endif; ?>
                                    <?php endforeach;?>
                                    </select>
                                </div>
                                <div class="col-sm-4  my-1">
                                    <label for="nivel" class="col-form-label" align="center">Nivel1:</label>
                                    <select class="custom-select col-sm-12" name="nivel1" id="nivel1" disabled>
                                    <option value="">selecione un valor</option>
                                    </select>
                                </div>
                                <div class="col-sm-4  my-1">
                                    <label for="nivel2" class="col-form-label" align="center">Nivel2:</label>
                                    <select class="custom-select col-sm-12" name="nivel2" id="nivel2" disabled="true">

                                    <?php foreach($nivel2_Agresor as $nivelA):?>
                                      <option value="<?php echo $nivelA->id;?>"><?php echo $nivelA->nombre;?></option>
                                    <?php endforeach;?>
                                    </select>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">Analisis</a>
                    </div>
                    <div id="accordion22" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-12  my-1">
                                  <label for="analisisDeContexto" class="col-form-label">Analisis de contexto:</label>
                                  <textarea name="analisisDeContexto" id="analisisDeContexto" style="width:100%; height:200px;" readonly=”readonly”> <?php echo $registros->analisisDeContexto;?></textarea>
                              </div>
                              <div class="col-sm-12 my-1">
                                  <label for="analisisDeRiesgo" class="col-form-label">Analisis de riesgo:</label>
                                  <textarea name="analisisDeRiesgo" id="analisisDeRiesgo" style="width:100%; height:200px;" readonly=”readonly”> <?php echo $registros->analisisDeRiesgo;?></textarea>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-12  my-1">
                                  <label for="observaciones" class="col-form-label">Observaciones:</label>
                                  <textarea name="observaciones" id="observaciones" style="width:100%; height:200px;" readonly=”readonly”> <?php echo $registros->observaciones;?></textarea>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion13">Tipo de violencia</a>
                    </div>
                    <div id="accordion13" class="collapse" data-parent="#accordion1">
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
                                                <td>Psicologica</th>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion14">Modalidad de violencia</a>
                    </div>
                    <div id="accordion14" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaFamiliar" class="col-form-label">Familiar:</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaFamiliar" id="modalidadViolenciaFamiliar">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"<?php echo set_select('modalidadViolenciaFamiliar',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaLaboral" class="col-form-label">laboral:</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaLaboral" id="modalidadViolenciaLaboral">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"<?php echo set_select('modalidadViolenciaLaboral',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaEnLaComunidad" class="col-form-label">En La Comunidad:</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaEnLaComunidad" id="modalidadViolenciaEnLaComunidad">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"<?php echo set_select('modalidadViolenciaEnLaComunidad',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaInstitucional" class="col-form-label">Institucional</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaInstitucional" id="modalidadViolenciaInstitucional">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"<?php echo set_select('modalidadViolenciaInstitucional',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaFeminicida" class="col-form-label">Feminicida</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaFeminicida" id="modalidadViolenciaFeminicida">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>" <?php echo set_select('modalidadViolenciaFeminicida',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadDeViolenciaCibernetica" class="col-form-label">Violencia en línea</label>
                                  <select class="custom-select col-sm-9" name="modalidadDeViolenciaCibernetica" id="modalidadDeViolenciaCibernetica">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>" <?php echo set_select('modalidadDeViolenciaCibernetica',$sino->valor); ?>><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion15">Manifestaciones de la violencia</a>
                    </div>
                    <div id="accordion15" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="tipodemanifestacion" class="col-form-label">Tipo de manifestaciones:</label>
                                  <select class="custom-select col-sm-11" name="tipodemanifestacion" id="tipodemanifestacion">
                                    <option value="">Seleccione una opción</option>
                                  <?php foreach($tipodemanifestaciones as $manifestaciones):?>
                                    <?php if ($manifestaciones->id >1): ?>
                                      <option value="<?php echo $manifestaciones->id;?>"><?php echo $manifestaciones->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                  </select>
                              </div>

                              <div class="col-sm-6 my-1">
                                 <label for="observacionesmanifestacion" class="col-form-label form-control-sm input-rounded">Observaciones</label>
                                  <textarea name="observacionesmanifestacion" id="observacionesmanifestacion" style="width:100%; height:100px;"></textarea>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion16">Consecuencias</a>
                    </div>
                    <div id="accordion16" class="collapse" data-parent="#accordion1">
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion17">Atención Recibida Por CIMAC</a>
                    </div>
                    <div id="accordion17" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
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
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="cimacHaceAcompanamientoAnteElMecanismo" class="col-form-label" align="center">Cimac hace acompanamiento ante el mecanismo:</label>
                                  <select class="custom-select col-sm-6" name="cimacHaceAcompanamientoAnteElMecanismo" id="cimacHaceAcompanamientoAnteElMecanismo">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-6  my-1">
                                  <label for="queOtraOrganizacionLasAcompana" class="col-form-label" align="center">Que otra organizacion las acompaña:</label>
                                  <input class="form-control  col-sm-8" type="text" value="" id="queOtraOrganizacionLasAcompana" name="queOtraOrganizacionLasAcompana">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="atencionMedicaRecibida" class="col-form-label">Médica</label>
                                  <select class="custom-select col-sm-10" name="atencionMedicaRecibida" id="atencionMedicaRecibida">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="atencionPsicologicaRecibida" class="col-form-label">Psicológica:</label>
                                  <select class="custom-select col-sm-10" name="atencionPsicologicaRecibida" id="atencionPsicologicaRecibida">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="atencionJuridicaRecibida" class="col-form-label">Jurídica:</label>
                                  <select class="custom-select col-sm-10" name="atencionJuridicaRecibida" id="atencionJuridicaRecibida">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="ningunaAtencionRecibida" class="col-form-label">Ningúna:</label>
                                  <select class="custom-select col-sm-10" name="ningunaAtencionRecibida" id="ningunaAtencionRecibida">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion18">Acciones de seguimiento</a>
                    </div>
                    <div id="accordion18" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">

                              <div class="col-sm-6  my-1">
                                  <label for="beneficiariaDelMecanismoDeProtecion" class="col-form-label">Beneficiaria del mecanismo de protecion:</label>
                                  <select class="custom-select col-sm-10" name="beneficiariaDelMecanismoDeProtecion" id="beneficiariaDelMecanismoDeProtecion">
                                  <option selected="selected" value="0">Seleccione una opción</option>
                                  <?php foreach($niveles as $nivel):?>
                                      <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="carpetaDeInvestigacionEnAlgunaProcuraduria" class="col-form-label">Carpeta de investigacion en alguna procuraduria:</label>
                                  <select class="custom-select col-sm-10" name="carpetaDeInvestigacionEnAlgunaProcuraduria" id="carpetaDeInvestigacionEnAlgunaProcuraduria">
                                  <option selected="selected" value="0">Seleccione una opción</option>
                                  <?php foreach($niveles as $nivel):?>
                                      <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-6  my-1">
                                  <label for="quejaAnteComisionDeDerechosHumanos" class="col-form-label">Queja ante comisión de derechos humanos:</label>
                                  <select class="custom-select col-sm-10" name="quejaAnteComisionDeDerechosHumanos" id="quejaAnteComisionDeDerechosHumanos">
                                  <option selected="selected" value="0">Seleccione una opción</option>
                                  <?php foreach($niveles as $nivel):?>
                                      <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="estasDeAcuedoConElMecanismoDeProteccion" class="col-form-label">Estas de acuedo con el mecanismo de proteccion:</label>
                                  <select class="custom-select col-sm-10" name="estasDeAcuedoConElMecanismoDeProteccion" id="estasDeAcuedoConElMecanismoDeProteccion">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-6  my-1">
                                  <label for="esasMedidasTePermitenSeguirHaciendoTuTrabajo" class="col-form-label">Esas medidas te permiten seguir haciendo tu trabajo:</label>
                                  <select class="custom-select col-sm-10" name="esasMedidasTePermitenSeguirHaciendoTuTrabajo" id="esasMedidasTePermitenSeguirHaciendoTuTrabajo">
                                    <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-12  my-1">
                                  <label for="porQue" class="col-form-label">¿Por que?:</label>
                                  <textarea name="porQue"  id="porQue" style="width:100%; height:100px;"></textarea>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="tenidoResultadosLaCarpetaDeInvestigacion" class="col-form-label">Has tenido resultados la carpeta de investigacion:</label>
                                  <select class="custom-select col-sm-10" name="tenidoResultadosLaCarpetaDeInvestigacion" id="tenidoResultadosLaCarpetaDeInvestigacion">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>

                              </div>
                              <div class="col-sm-6  my-1">
                                  <label for="cuales" class="col-form-label">¿Cuales resultados?:</label>
                                  <textarea name="cuales" id="cuales" style="width:100%; height:100px;"></textarea>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="queAHechoLaComisionDeDerechosHumanos" class="col-form-label">¿Qué a hecho la comisión de derechos humanos?:</label>
                                  <textarea name="queAHechoLaComisionDeDerechosHumanos" id="queAHechoLaComisionDeDerechosHumanos" style="width:100%; height:100px;"></textarea>
                              </div>

                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              <!-- Acciones de seguimiento end -->

              <!-- Boton start -->
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
              </div>
              <!-- Boton end -->
            </div>
        </div>
    </div>
  </form>
</div>
<!-- accordion style 1 end -->
