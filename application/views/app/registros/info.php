<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">

  <input type="hidden" name="idperiodista" value="<?php echo $registros->id?>" id ="idperiodista">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Informacion del Registro</h4>
            <div id="accordion1" class="according">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#accordion11">Información de la Periodista</a>
                    </div>
                    <div id="accordion11" class="collapse show" data-parent="#accordion1">
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
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#accordion12">Información de la Agresión</a>
                    </div>
                    <div id="accordion12" class="collapse show" data-parent="#accordion1">
                        <div class="card-body">

                              <p><strong>Fecha del Incidente: </strong><small class="text-muted"> <?php echo $registros->fechaIncidente;?></small></p>
                              <p><strong>Estado: </strong><small class="text-muted"> <?php echo $registros->estadoIncidente;?></small></p>
                              <p><strong>Municipio: </strong><small class="text-muted"> <?php echo $registros->municipio;?></small></p>
                              <p><strong>Localidad: </strong><small class="text-muted"> <?php echo $registros->localidad;?></small></p>
                              <p><strong>Latitud: </strong><small class="text-muted"> <?php echo $registros->latitud;?></small></p>
                              <p><strong>Longitud: </strong><small class="text-muted"> <?php echo $registros->longitud;?></small></p>
                              <!-- Bordered Table start -->
                              <div class="col-lg-12 mt-5">
                                  <div class="card">
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
                              <!-- Bordered Table end -->
                              <!-- Bordered Table start -->
                              <div class="col-lg-12 mt-5">
                                  <div class="card">
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
                              <!-- Bordered Table end -->
                              <!-- Bordered Table start -->
                              <div class="col-lg-12 mt-5">
                                  <div class="card">
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
                              <!-- Bordered Table end -->
                              <!-- Bordered Table start -->
                              <div class="col-lg-12 mt-5">
                                  <div class="card">
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
                              <!-- Bordered Table end -->






                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <a href="<?php echo base_url()?>app/registros/edit/<?php echo $registros->id;?>" class="btn btn-outline-primary mb-3" role="button">Editar</a>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- accordion style 1 end -->
