<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/registros/store" method="POST">
    <input type="hidden" name="idperiodista" value="<?php echo $registros->id?>" id ="idperiodista">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Informacion del Registro</h4>
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
                                                <td><?php echo $registros->localidadPeriodista;?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                  <!-- Informacion de la Periodista end -->

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
                        </div>
                    </div>
                </div>
              <!-- Ubicación de la Agresión end -->

              <!-- Tipo de violencia start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion13">Tipo de violencia</a>
                    </div>
                    <div id="accordion13" class="collapse show" data-parent="#accordion1">
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
                    <div id="accordion14" class="collapse show" data-parent="#accordion1">
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
                                                <td>Cibernetica</td>
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
                        <a class="collapsed card-link" data-toggle="collapse show" href="#accordion15">Manifestaciones de la violencia</a>
                    </div>
                    <div id="accordion15" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col" colspan="6">Manifestación:</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amenazas</th>
                                                <td>Feminicida</td>
                                                <td>Desaparciones Forzadas</td>
                                                <td>Detenciones</td>
                                                <td>Detenciones Arbitrarias Extrajudicia</td>
                                                <td>Difamacion Calumnia e Injuria</td>
                                              </tr>
                                              <tr>
                                                <td><?php	if ($registros->manifestacionesDeTipoAmenazas > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->manifestacionesDeTipoFeminicida > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->manifestacionesDeTipoDesaparcionesForzadas > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->manifestacionesDeTipoDetenciones > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->manifestacionesDeTipoDetencionesArbitrariasExtrajudicia > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->manifestacionesDeTipoDifamacionCalumniaInjuria > 0){echo "X";}?></td>
                                              </tr>

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
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion16">Consecuencias</a>
                    </div>
                    <div id="accordion16" class="collapse show" data-parent="#accordion1">
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
                                                <td>Cambio De Domicilio</td>
                                                <td>Desplazamiento</td>

                                              </tr>
                                              <tr>
                                                <td><?php	if ($registros->consecuenciaFueDespedida > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->consecuenciasBajoPerfil > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->consecuenciasCambioDeDomicilio > 0){echo "X";}?></td>
                                                <td><?php	if ($registros->consecuenciasDesplazamiento > 0){echo "X";}?></td>
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

              <!-- Atención Recibida< start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion17">Atención Recibida</a>
                    </div>
                    <div id="accordion17" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
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

              <!-- Denuncias start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion18">Denuncias</a>
                    </div>
                    <div id="accordion18" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="agresionAnterior" class="col-form-label">Agresion anterior:</label>
                                  <input class="form-control" type="url" value="" id="agresionAnterior" name="agresionAnterior">

                              </div>
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
                              <div class="col-sm-6  my-1">
                                  <label for="relatoriaDelHecho" class="col-form-label">Relatoria de los hechos:</label>
                                  <textarea name="relatoriaDelHecho" id="relatoriaDelHecho" style="width:100%; height:100px;"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              <!-- Denuncias end -->

              <!-- Imagenes start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion19">Imagenes</a>
                    </div>
                    <div id="accordion19" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-lg-4 mt-5">
                                <td><label for="imagen1" class="col-form-label">Imágen1</label></td>
                                <td> <input type="file" name="imagen1" class="form-control-file .form-control-sm" id="imagen1" /></td>

                              </div>
                              <div class="col-lg-4 mt-5">
                                <td><label for="imagen1" class="col-form-label">Imágen2</label></td>
                                <td> <input type="file" name="imagen1" class="form-control-file .form-control-sm" id="imagen1"  /></td>

                              </div>
                              <div class="col-lg-4 mt-5">
                                <td><label for="Imágen3" class="col-form-label">Imágen3</label></td>
                                <td> <input type="file" name="Imágen3" class="form-control-file .form-control-sm" id="Imágen3"/></td>

                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-lg-6 mt-5">
                                <td><label for="Imágen4" class="col-form-label">Imágen4</label></td>
                                <td> <input type="file" name="Imágen4" class="form-control-file .form-control-sm" id="Imágen4" /></td>

                              </div>
                              <div class="col-lg-6 mt-5">
                                <td><label for="Imágen5" class="col-form-label">Imágen5</label></td>
                                <td> <input type="file" name="Imágen5" class="form-control-file .form-control-sm" id="Imágen5"  /></td>

                              </div>

                            </div>
                          </div>

                        </div>
                    </div>
                </div>
              <!-- Imagenes end -->

              <!-- Documentos start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion20">Documentos</a>
                    </div>
                    <div id="accordion20" class="collapse" data-parent="#accordion1">
                      <div class="card-body">
                        <div class="form-row align-items-center">
                          <div class="col-lg-12 mt-5">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="single-table">
                                          <div class="table-responsive">
                                              <table class="table table-bordered text-center">
                                                  <tbody>
                                                      <tr>
                                                          <td><label for="textos1" class="col-form-label">Documento1</label></td>
                                                          <td><input class="form-control form-control-sm input-rounded col-sm-9" type="text" value="" id="textos1" name="textos1"></td>
                                                          <td> <input type="button" name="button" class="btn btn-outline-primary mb-3" id="button" value="Insertar archivo" onClick="javascript:subirimagen1();"/></td>
                                                      </tr>
                                                      <tr>
                                                        <td><label for="textos2" class="col-form-label">Documento2</label></td>
                                                        <td><input class="form-control form-control-sm input-rounded col-sm-9" type="text" value="" id="textos2" name="textos2"></td>
                                                        <td> <input type="button" name="button" class="btn btn-outline-primary mb-3" id="button" value="Insertar archivo" onClick="javascript:subirimagen1();"/></td>
                                                      </tr>
                                                      <tr>
                                                        <td><label for="textos3" class="col-form-label">Documento3</label></td>
                                                        <td><input class="form-control form-control-sm input-rounded col-sm-9" type="text" value="" id="textos3" name="textos3"></td>
                                                        <td> <input type="button"class="btn btn-outline-primary mb-3" name="button" id="button" value="Insertar archivo" onClick="javascript:subirimagen1();"/></td>
                                                      </tr>
                                                      <tr>
                                                        <td><label for="textos4" class="col-form-label">Documento4</label></td>
                                                        <td><input class="form-control form-control-sm input-rounded col-sm-9" type="text" value="" id="textos4" name="textos4"></td>
                                                        <td> <input type="button" class="btn btn-outline-primary mb-3" name="button" id="button" value="Insertar archivo" onClick="javascript:subirimagen1();"/></td>
                                                      </tr>
                                                      <tr>
                                                        <td><label for="textos5" class="col-form-label">Documento5</label></td>
                                                        <td><input class="form-control form-control-sm input-rounded col-sm-9" type="text" value="" id="textos5" name="textos5"></td>
                                                        <td> <input type="button" class="btn btn-outline-primary mb-3" name="button" id="button" value="Insertar archivo" onClick="javascript:subirimagen1();"/></td>
                                                      </tr>
                                                  </tbody>
                                              </table>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              <!-- Documentos end -->

              <!-- Links start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion21">Links</a>
                    </div>
                    <div id="accordion21" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-4  my-1">
                                  <label for="link1" class="col-form-label">link1:</label>
                                  <input class="form-control" type="url" value="" id="link1" name="link1">
                              </div>
                              <div class="col-sm-4  my-1">
                                  <label for="link2" class="col-form-label">link2:</label>
                                  <input class="form-control" type="url" value="" id="link2" name="link2">
                              </div>
                              <div class="col-sm-4  my-1">
                                  <label for="link3" class="col-form-label">link3:</label>
                                  <input class="form-control" type="url" value="" id="link3" name="link3">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-4  my-1">
                                  <label for="link4" class="col-form-label">link4:</label>
                                  <input class="form-control" type="url" value="" id="link4" name="link4">
                              </div>
                              <div class="col-sm-4  my-1">
                                  <label for="link5" class="col-form-label">link5:</label>
                                  <input class="form-control" type="url" value="" id="link5" name="link5">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              <!-- Links end -->

              <!-- Analisis start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">Analisis</a>
                    </div>
                    <div id="accordion22" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="analisisDeContexto" class="col-form-label">Analisis de contexto:</label>
                                  <textarea name="analisisDeContexto" id="analisisDeContexto" style="width:100%; height:100px;"></textarea>
                              </div>
                              <div class="col-sm-6  my-1">
                                  <label for="analisisDeRiesgo" class="col-form-label">Analisis de riesgo:</label>
                                  <textarea name="analisisDeRiesgo" id="analisisDeRiesgo" style="width:100%; height:100px;"></textarea>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-6  my-1">
                                  <label for="observaciones" class="col-form-label">Observaciones:</label>
                                  <textarea name="observaciones" id="observaciones" style="width:100%; height:100px;"></textarea>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="cimacHaceAcompanamientoAnteElMecanismo" class="col-form-label" align="center">Cimac hace acompanamiento ante el mecanismo:</label>
                                  <select class="custom-select col-sm-12" name="cimacHaceAcompanamientoAnteElMecanismo" id="cimacHaceAcompanamientoAnteElMecanismo">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="queOtraOrganizacionLasAcompana" class="col-form-label" align="center">Que otra organizacion las acompaña:</label>
                                  <input class="form-control" type="text" value="" id="queOtraOrganizacionLasAcompana" name="queOtraOrganizacionLasAcompana">
                              </div>
                            </div>
                          </div>

                        </div>
                    </div>
                </div>
              <!-- Analisis end -->

              <!-- Agresor start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion23">Agresor</a>
                    </div>
                    <div id="accordion23" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                        </div>
                    </div>
                </div>
              <!-- Agresor end -->

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
