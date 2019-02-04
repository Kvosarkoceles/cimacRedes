<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Informacion del Registro</h4>
            <div id="accordion1" class="according">
                <!-- 11-Informacion de la Periodista start -->
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

                <!-- 12-Ubicación de la Agresión start -->
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
                        </div>
                    </div>
                </div>
                <!-- Ubicación de la Agresión end -->

                <!-- 13-Tipo de violencia start -->
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

                <!-- 14 Modalidad de violencia start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion14">Modalidad de violencia</a>
                    </div>
                    <div id="accordion14" class="collapse" data-parent="#accordion1">
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
                <!-- Modalidad de violencia end -->

                <!--15- Manifestaciones de la violencia start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion15">Manifestaciones de la violencia</a>
                    </div>
                    <div id="accordion15" class="collapse" data-parent="#accordion1">
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

                <!-- 16-Consecuencias start -->
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
              <!-- Consecuencias end -->

              <!-- 17-Atención Recibida< start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion17">Atención Recibida</a>
                    </div>
                    <div id="accordion17" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="single-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col" colspan="6">Atención Recibida:</th>

                                            </tr>
                                        </thead>
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
              <!--18- Denuncias start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion18">Denuncias</a>
                    </div>
                    <div id="accordion18" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <?php if ( $registros->agresionAnterior=="") {

                            }else {
                              echo "<p>
                              <strong>Agresion anterior:</strong>
                              <small>
                              <a href=$registros->agresionAnterior>ver...</a>
                              </small>
                              </p>";
                            } ?>

                              <p><strong>Beneficiaria del mecanismo de protecion:</strong><small class="text-muted"> <?php echo $registros->beneficiariaDelMecanismo;?></small></p>
                              <p><strong>Carpeta de investigacion en alguna procuraduria: </strong><small class="text-muted"> <?php echo $registros->carpetaDeInvestigacion;?></small></p>
                              <p><strong>Queja ante comisión de derechos humanos: </strong><small class="text-muted"> <?php echo $registros->quejaAnteComision;?></small></p>
                              <p><strong>Estas de acuedo con el mecanismo de proteccion: </strong><small class="text-muted"> <?php echo $registros->estasDeAcuedoConElMecanismo;?></small></p>
                              <p><strong>Esas medidas te permiten seguir haciendo tu trabajo:</strong><small class="text-muted"> <?php echo $registros->tePermitenSeguirHaciendoTuTrabajo;?></small></p>
                              <p><strong>¿Por que?:</strong></p><small class="text-muted"><p><?php echo $registros->porQue;?></small></p>
                              <p><strong>Has tenido resultados la carpeta de investigacion:</strong><small class="text-muted"> <?php echo $registros->resultadosLaCarpetaDeInvestigacion;?></small></p>
                              <p><strong>¿Cuales resultados?:</strong></p><small class="text-muted"><p><?php echo $registros->cuales;?></small></p>
                              <p><strong>Qué a hecho la comisión de derechos humanos?:</strong></p><small class="text-muted"><p><?php echo $registros->queAHechoLaComisionDeDerechosHumanos;?></small></p>
                              <p><strong>¿Relatoria de los hechos?:</strong></p><small class="text-muted"><p><?php echo $registros->relatoriaDelHecho;?></small></p>
                          </div>
                        </div>
                    </div>
                </div>
              <!-- Denuncias end -->
              <!-- 19-Links start -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion19">Links</a>
                    </div>
                    <div id="accordion19" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">
                          <div class="card-body">
                            <?php if ( $registros->link1=="") {

                            }else {
                              echo "<p>
                              <strong>Link1:</strong>
                              <small>
                              <a href=$registros->link1>ver...</a>
                              </small>
                              </p>";
                            } ?>
                          </div>
                        </div>


                    </div>
                </div>
              <!-- Links end -->
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion19">Collapsible
                            Group Item #3</a>
                    </div>
                    <div id="accordion19" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque porro alias assumenda accusamus incidunt odio molestiae maxime quo atque in et quaerat, vel unde aliquam aperiam quidem consectetur omnis dicta officiis? Dolorum, error dolorem!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accordion style 1 end -->
