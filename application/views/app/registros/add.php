<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/registros/store" method="POST">
    <input type="hidden" name="idperiodista" value="<?php echo $periodista->id?>" id ="idperiodista">
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
                                                <td><?php echo $periodista->nombres." ".$periodista->apellidoPaterno." ".$periodista->apellidoMaterno;?>
                                                </td>
                                                <td><?php echo $periodista->edad;?></td>
                                                <td><?php echo $periodista->estado;?></td>
                                                <td><?php echo $periodista->localidad;?></td>
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
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="fechaIncidente" class="col-form-label">Fecha del Incidente</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="date" value="" id="fechaIncidente" name="fechaIncidente">
                              </div>
                              <div class="col-sm-3 my-1">
                                  <label class="col-form-label">Estado</label>
                                   <select class="custom-select" name="estado" id="estado">
                                  <option selected="selected" value="0">Seleccione un valor</option>
                                      <?php foreach($estados as $estado):?>
                                          <option value="<?php echo $estado->id;?>"><?php echo $estado->nombre;?></option>
                                      <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3 my-1">
                                 <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                                   <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="nommunicipiobres" name="municipio">
                              </div>
                              <div class="col-sm-3 my-1">
                                 <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                                   <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="localidad" name="localidad">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="latitud" class="col-form-label">Latitud</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="latitud" name="latitud" placeholder="19.4319274">
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="longitud" class="col-form-label">longitud</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="longitud" name="longitud" placeholder="-99.1477557">
                              </div>
                            </div>
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
                    <div id="accordion13" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-2  my-1">
                                  <label for="tipoDeViolenciaPsicologica" class="col-form-label">Psicologica</label>
                                  <select class="custom-select col-sm-9" name="tipoDeViolenciaPsicologica" id="tipoDeViolenciaPsicologica">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="tipodeViolenciaFisica" class="col-form-label">Física</label>
                                  <select class="custom-select col-sm-9" name="tipodeViolenciaFisica" id="tipodeViolenciaFisica">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="tipoDeViolenciaPatrimonial" class="col-form-label">Patrimonial</label>
                                  <select class="custom-select col-sm-9" name="tipoDeViolenciaPatrimonial" id="tipoDeViolenciaPatrimonial">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="tipodeViolenciaEconomica" class="col-form-label">Economica</label>
                                  <select class="custom-select col-sm-9" name="tipodeViolenciaEconomica" id="tipodeViolenciaEconomica">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="tipoDeViolenciaSexual" class="col-form-label">Sexual</label>
                                  <select class="custom-select col-sm-9" name="tipoDeViolenciaSexual" id="tipoDeViolenciaSexual">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="tipoDeViolenciaCibernetica" class="col-form-label">Cibernetica</label>
                                  <select class="custom-select col-sm-9" name="tipoDeViolenciaCibernetica" id="tipoDeViolenciaCibernetica">

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
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaLaboral" class="col-form-label">laboral:</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaLaboral" id="modalidadViolenciaLaboral">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaEnLaComunidad" class="col-form-label">En La Comunidad:</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaEnLaComunidad" id="modalidadViolenciaEnLaComunidad">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaInstitucional" class="col-form-label">Institucional</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaInstitucional" id="modalidadViolenciaInstitucional">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadViolenciaFeminicida" class="col-form-label">Feminicida</label>
                                  <select class="custom-select col-sm-9" name="modalidadViolenciaFeminicida" id="modalidadViolenciaFeminicida">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-2  my-1">
                                  <label for="modalidadDeViolenciaCibernetica" class="col-form-label">Cibernetica</label>
                                  <select class="custom-select col-sm-9" name="modalidadDeViolenciaCibernetica" id="modalidadDeViolenciaCibernetica">

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
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoAmenazas" class="col-form-label">Amenazas:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoAmenazas" id="manifestacionesDeTipoAmenazas">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoFeminicida" class="col-form-label">Feminicida:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoFeminicida" id="manifestacionesDeTipoFeminicida">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoDesaparcionesForzadas" class="col-form-label">Desaparciones forzada:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoDesaparcionesForzadas" id="manifestacionesDeTipoDesaparcionesForzadas">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoDetenciones" class="col-form-label">Detencion:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoDetenciones" id="manifestacionesDeTipoDetenciones">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" class="col-form-label">Detencion Arbitraria Extrajudicial:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" id="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia">
                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="manifestacionesDeTipoDifamacionCalumniaInjuria" class="col-form-label">Calumnia e injuria:</label>
                                  <select class="custom-select col-sm-9" name="manifestacionesDeTipoDifamacionCalumniaInjuria" id="manifestacionesDeTipoDifamacionCalumniaInjuria">

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
              <!-- Manifestaciones de la violencia end -->

              <!-- Consecuencias start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion16">Consecuencias</a>
                    </div>
                    <div id="accordion16" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="consecuenciaFueDespedida" class="col-form-label">Fue despedida:</label>
                                  <select class="custom-select col-sm-9" name="consecuenciaFueDespedida" id="consecuenciaFueDespedida">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="consecuenciasBajoPerfil" class="col-form-label">Bajo el perfil::</label>
                                  <select class="custom-select col-sm-9" name="consecuenciasBajoPerfil" id="consecuenciasBajoPerfil">
                                  <option selected="selected" value="0">No</option>
                                  <?php foreach($perfiles as $perfile):?>
                                      <option value="<?php echo $perfile->id;?>"><?php echo $perfile->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="consecuenciasCambioDeDomicilio" class="col-form-label">Cambió de domicilio:</label>
                                  <select class="custom-select col-sm-9" name="consecuenciasCambioDeDomicilio" id="consecuenciasCambioDeDomicilio">

                                  <?php foreach($sinos as $sino):?>
                                      <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                                  <?php endforeach;?>
                                  </select>
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="consecuenciasDesplazamiento" class="col-form-label">Desplazamiento:</label>
                                  <select class="custom-select col-sm-9" name="consecuenciasDesplazamiento" id="consecuenciasDesplazamiento">

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
