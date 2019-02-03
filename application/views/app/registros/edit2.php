<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
<form action="<?php echo base_url();?>app/registros/update" method="POST">
  <input type="hidden" name="idregistro" value="<?php echo $registros->id?>" id ="idregistro">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Editar Registro</h4>
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
                                              <td><?php echo $registros->localidad;?></td>
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
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="fechaIncidente" class="col-form-label">Fecha del Incidente</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="date" value="<?php echo $registros->fechaIncidente;?>" id="fechaIncidente" name="fechaIncidente">
                              </div>
                              <div class="col-sm-3 my-1">
                                  <label class="col-form-label">Estado</label>
                                  <select class="custom-select" name="estado" id="estado">
                                 <option selected="selected" value="0">Seleccione un valor</option>
                                     <?php foreach($estados as $estado):?>
                                         <option value="<?php echo $estado->id;?>" <?php echo $estado->id==$registros->id_estados ? "selected":"";?> ><?php echo $estado->nombre;?></option>
                                     <?php endforeach;?>
                                 </select>
                              </div>
                              <div class="col-sm-3 my-1">
                                 <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                                   <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->municipio;?>" id="nommunicipiobres" name="municipio">
                              </div>
                              <div class="col-sm-3 my-1">
                                 <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                                   <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->localidad;?>" id="localidad" name="localidad">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-3  my-1">
                                  <label for="latitud" class="col-form-label">Latitud</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->latitud;?>" id="latitud" name="latitud" placeholder="19.4319274">
                              </div>
                              <div class="col-sm-3  my-1">
                                  <label for="longitud" class="col-form-label">longitud</label>
                                  <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->longitud;?>" id="longitud" name="longitud" placeholder="-99.1477557">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                                <!-- Tabla tipo de violencia -->
                                <div class="col-lg-6 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                              <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table text-center">
                                                        <thead class="text-uppercase bg-light">
                                                            <tr>
                                                                <th scope="col">Tipo de violencia</th>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Si</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td align="right">Violencia psicologica:</td>
                                                                <td><input type="radio" id="tipoDeViolenciaPsicologica" name="tipoDeViolenciaPsicologica" value="0" <?php if (!(strcmp( $registros->tipoDeViolenciaPsicologica,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="tipoDeViolenciaPsicologica" name="tipoDeViolenciaPsicologica" value="1" <?php if (!(strcmp($registros->tipoDeViolenciaPsicologica,1))) {echo "checked=\"checked\"";} ?>></td>

                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia Física:</td>
                                                                <td><input type="radio" id="tipodeViolenciaFisica" name="tipodeViolenciaFisica" value="0" <?php if (!(strcmp($registros->tipodeViolenciaFisica,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="tipodeViolenciaFisica" name="tipodeViolenciaFisica" value="1" <?php if (!(strcmp($registros->tipodeViolenciaFisica,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia patrimonial:</td>
                                                                <td><input type="radio" id="tipoDeViolenciaPatrimonial" name="tipoDeViolenciaPatrimonial" value="0" <?php if (!(strcmp($registros->tipoDeViolenciaPatrimonial,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="tipoDeViolenciaPatrimonial" name="tipoDeViolenciaPatrimonial" value="1" <?php if (!(strcmp($registros->tipoDeViolenciaPatrimonial,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia economica:</td>
                                                                <td align="center"><input type="radio" id = "tipodeViolenciaEconomica" name="tipodeViolenciaEconomica" value="0" <?php if (!(strcmp($registros->tipodeViolenciaEconomica,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id = "tipodeViolenciaEconomica" name="tipodeViolenciaEconomica" value="1" <?php if (!(strcmp($registros->tipodeViolenciaEconomica,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia sexual:</td>
                                                                <td align="center"><input type="radio" id="tipoDeViolenciaSexual" name="tipoDeViolenciaSexual" value="0" <?php if (!(strcmp($registros->tipoDeViolenciaSexual,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id="tipoDeViolenciaSexual" name="tipoDeViolenciaSexual" value="1" <?php if (!(strcmp($registros->tipoDeViolenciaSexual,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia cibernetica:</td>
                                                                <td align="center"><input type="radio" id="tipoDeViolenciaCibernetica" name="tipoDeViolenciaCibernetica" value="0" <?php if (!(strcmp($registros->tipoDeViolenciaCibernetica,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id="tipoDeViolenciaCibernetica" name="tipoDeViolenciaCibernetica" value="1" <?php if (!(strcmp($registros->tipoDeViolenciaCibernetica,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabla tipo de violencia end -->
                                <!-- Tabla Modalidad de violencia -->
                                <div class="col-lg-6 mt-5">
                                    <div class="card">
                                        <div class="card-body">
                                              <div class="single-table">
                                                <div class="table-responsive">
                                                    <table class="table text-center">
                                                        <thead class="text-uppercase bg-light">
                                                            <tr>
                                                                <th scope="col">Modalidad de violencia</th>
                                                                <th scope="col">No</th>
                                                                <th scope="col">Si</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td align="right">Violencia Familiar:</td>
                                                                <td><input type="radio" id="modalidadViolenciaFamiliar" name="modalidadViolenciaFamiliar" value="0" <?php if (!(strcmp($registros->modalidadViolenciaFamiliar,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="modalidadViolenciaFamiliar" name="modalidadViolenciaFamiliar" value="1" <?php if (!(strcmp($registros->modalidadViolenciaFamiliar,1))) {echo "checked=\"checked\"";} ?>></td>

                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia laboral:</td>
                                                                <td><input type="radio" id="modalidadViolenciaLaboral" name="modalidadViolenciaLaboral" value="0" <?php if (!(strcmp($registros->modalidadViolenciaLaboral,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="modalidadViolenciaLaboral" name="modalidadViolenciaLaboral" value="1" <?php if (!(strcmp($registros->modalidadViolenciaLaboral,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia En La Comunidad:</td>
                                                                <td><input type="radio" id="modalidadViolenciaEnLaComunidad" name="modalidadViolenciaEnLaComunidad" value="0" <?php if (!(strcmp($registros->modalidadViolenciaEnLaComunidad,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td><input type="radio" id="modalidadViolenciaEnLaComunidad" name="modalidadViolenciaEnLaComunidad" value="1" <?php if (!(strcmp($registros->modalidadViolenciaEnLaComunidad,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia Institucional:</td>
                                                                <td align="center"><input type="radio" id="modalidadViolenciaInstitucional" name="modalidadViolenciaInstitucional" value="0" <?php if (!(strcmp($registros->modalidadViolenciaInstitucional,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id="modalidadViolenciaInstitucional" name="modalidadViolenciaInstitucional" value="1" <?php if (!(strcmp($registros->modalidadViolenciaInstitucional,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia Feminicida:</td>
                                                                <td align="center"><input type="radio" id="modalidadViolenciaFeminicida" name="modalidadViolenciaFeminicida" value="0" <?php if (!(strcmp($registros->modalidadViolenciaFeminicida,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id="modalidadViolenciaFeminicida" name="modalidadViolenciaFeminicida" value="1" <?php if (!(strcmp($registros->modalidadViolenciaFeminicida,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                            <tr>
                                                                <td align="right">Violencia Cibernetica:</td>
                                                                <td align="center"><input type="radio" id="modalidadDeViolenciaCibernetica" name="modalidadDeViolenciaCibernetica" value="0" <?php if (!(strcmp($registros->modalidadDeViolenciaCibernetica,0))) {echo "checked=\"checked\"";} ?>></td>
                                                                <td align="center"><input type="radio" id="modalidadDeViolenciaCibernetica" name="modalidadDeViolenciaCibernetica" value="1" <?php if (!(strcmp($registros->modalidadDeViolenciaCibernetica,1))) {echo "checked=\"checked\"";} ?>></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabla Modalidad de violencia end -->
                            </div>
                            <div class="form-row align-items-center">
                              <!-- Tabla Manifestaciones de la violenciaa -->
                              <div class="col-lg-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                          <div class="single-table">
                                            <div class="table-responsive">
                                                <table class="table text-center">
                                                    <thead class="text-uppercase bg-light">
                                                        <tr>
                                                            <th scope="col">Manifestaciones de la violencia</th>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Si</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td align="right">Amenazas:</td>
                                                            <td><input type="radio" id="manifestacionesDeTipoAmenazas" name="manifestacionesDeTipoAmenazas" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoAmenazas,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td><input type="radio" id="manifestacionesDeTipoAmenazas" name="manifestacionesDeTipoAmenazas" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoAmenazas,1))) {echo "checked=\"checked\"";} ?>></td>

                                                        </tr>
                                                        <tr>
                                                            <td align="right">Feminicida:</td>
                                                            <td><input type="radio" id="manifestacionesDeTipoFeminicida" name="manifestacionesDeTipoFeminicida" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoFeminicida,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td><input type="radio" id="manifestacionesDeTipoFeminicida" name="manifestacionesDeTipoFeminicida" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoFeminicida,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Desaparciones forzada:</td>
                                                            <td><input type="radio" id="manifestacionesDeTipoDesaparcionesForzadas" name="manifestacionesDeTipoDesaparcionesForzadas" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoDesaparcionesForzadas,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td><input type="radio" id="manifestacionesDeTipoDesaparcionesForzadas" name="manifestacionesDeTipoDesaparcionesForzadas" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoDesaparcionesForzadas,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Detencion:</td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDetenciones" name="manifestacionesDeTipoDetenciones" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoDetenciones,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDetenciones" name="manifestacionesDeTipoDetenciones" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoDetenciones,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Detencion Arbitraria Extrajudicial:</td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" name="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoDetencionesArbitrariasExtrajudicia,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" name="manifestacionesDeTipoDetencionesArbitrariasExtrajudicia" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoDetencionesArbitrariasExtrajudicia,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Calumnia e injuria:</td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDifamacionCalumniaInjuria" name="manifestacionesDeTipoDifamacionCalumniaInjuria" value="0" <?php if (!(strcmp($registros->manifestacionesDeTipoDifamacionCalumniaInjuria,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td align="center"><input type="radio" id="manifestacionesDeTipoDifamacionCalumniaInjuria" name="manifestacionesDeTipoDifamacionCalumniaInjuria" value="1" <?php if (!(strcmp($registros->manifestacionesDeTipoDifamacionCalumniaInjuria,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Tabla Manifestaciones de la violencia end -->
                              <!-- Tabla Consecuencias -->
                              <div class="col-lg-6 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                          <div class="single-table">
                                            <div class="table-responsive">
                                                <table class="table text-center">
                                                    <thead class="text-uppercase bg-light">
                                                        <tr>
                                                            <th scope="col">Consecuencias</th>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Si</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td align="right">Fue despedida:</td>
                                                            <td><input type="radio" id="consecuenciaFueDespedida" name="consecuenciaFueDespedida" value="0" <?php if (!(strcmp($registros->consecuenciaFueDespedida,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td><input type="radio" id="consecuenciaFueDespedida" name="consecuenciaFueDespedida" value="1" <?php if (!(strcmp($registros->consecuenciaFueDespedida,1))) {echo "checked=\"checked\"";} ?>></td>

                                                        </tr>
                                                        <tr>
                                                          <td align="right">Bajo el perfil:</td>
                                                          <td class="col-sm-3 my-1">

                                                              <select class="custom-select" name="consecuenciasBajoPerfil" id="consecuenciasBajoPerfil">
                                                             <option selected="selected" value="0">Seleccione un valor</option>
                                                                 <?php foreach($perfiles as $perfil):?>
                                                                     <option value="<?php echo $perfil->id;?>" <?php echo $perfil->id==$registros->consecuenciasBajoPerfil ? "selected":"";?> ><?php echo $perfil->nombre;?></option>
                                                                 <?php endforeach;?>
                                                             </select>
                                                          </td>
                                                                                                                </tr>
                                                        <tr>
                                                            <td align="right">Cambió de domicilio:</td>
                                                            <td><input type="radio" id="consecuenciasCambioDeDomicilio" name="consecuenciasCambioDeDomicilio" value="0" <?php if (!(strcmp($registros->consecuenciasCambioDeDomicilio,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td><input type="radio" id="consecuenciasCambioDeDomicilio" name="consecuenciasCambioDeDomicilio" value="1" <?php if (!(strcmp($registros->consecuenciasCambioDeDomicilio,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Desplazamiento:</td>
                                                            <td align="center"><input type="radio" id="consecuenciasDesplazamiento" name="consecuenciasDesplazamiento" value="0" <?php if (!(strcmp($registros->consecuenciasDesplazamiento,0))) {echo "checked=\"checked\"";} ?>></td>
                                                            <td align="center"><input type="radio" id="consecuenciasDesplazamiento" name="consecuenciasDesplazamiento" value="1" <?php if (!(strcmp($registros->consecuenciasDesplazamiento,1))) {echo "checked=\"checked\"";} ?>></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Tabla Consecuencias end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<!-- accordion style 1 end -->
