<!-- accordion style 1 start -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>app/registros/store" method="POST">
    <input type="text" name="idperiodista" value="<?php echo $registros->id?>" id ="idperiodista">
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
            <div id="accordion12" class="collapse" data-parent="#accordion1">
              <div class="card-body">
                <div class="card-body">
                  <div class="form-row align-items-center">
                    <div class="col-sm-3  my-1">
                      <label for="fechaIncidente" class="col-form-label">Fecha del Incidente</label>
                      <input class="form-control form-control-sm input-rounded col-sm-12" type="date" value="<?php echo $registros->fechaIncidente;?>" id="fechaIncidente" name="fechaIncidente">
                      <?php echo form_error("fechaIncidente","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                    <div class="col-sm-3 my-1">
                      <label class="col-form-label">Estado</label>
                      <select class="custom-select" name="estado" id="estado">
                        <option selected="selected" value="0">Seleccione un valor</option>
                        <?php foreach($estados as $estado):?>
                          <?php if ($estado->id>1): ?>
                            <option value="<?php echo $estado->id;?>" <?php echo $estado->id==$registros->id_estados ? "selected":"";?> ><?php echo $estado->nombre;?></option>
                          <?php endif; ?>
                        <?php endforeach;?>
                      </select>
                      <?php echo form_error("estado","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                    <div class="col-sm-3 my-1">
                      <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                      <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->municipio;?>" id="municipio" name="municipio">
                      <?php echo form_error("municipio","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                    <div class="col-sm-3 my-1">
                      <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                      <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->localidad;?>" id="localidad" name="localidad">
                      <?php echo form_error("localidad","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                  </div>
                  <div class="form-row align-items-center">
                    <div class="col-sm-3  my-1">
                      <label for="latitud" class="col-form-label">Latitud</label>
                      <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->latitud;?>" id="latitud" name="latitud" placeholder="19.4319274">
                      <?php echo form_error("latitud","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="longitud" class="col-form-label">longitud</label>
                      <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $registros->longitud;?>" id="longitud" name="longitud" placeholder="-99.1477557">
                      <?php echo form_error("longitud","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                  </div>
                  <div class="form-row align-items-center">
                    <div class="col-sm-12  my-1">
                      <label for="relatoriaDelHecho" class="col-form-label">Relatoria de los hechos:</label>
                      <textarea name="relatoriaDelHecho" id="relatoriaDelHecho" style="width:100%; height:300px;"><?php echo $registros->relatoriaDelHecho;?></textarea>
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
                        <option value="1">Selecciona un valor</option>
                        <?php foreach($motivodelasgresion as $motivo):?>
                          <?php if ($motivo->id>1): ?>
                            <option value="<?php echo $motivo->id;?>" <?php echo $motivo->id==$registros->id_motivodelasgresion ? "selected":"";?> ><?php echo $motivo->nombre;?></option>
                          <?php endif; ?>
                        <?php endforeach;?>
                      </select>
                      <?php echo form_error("motivodelasgresion","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                    <div class="col-sm-4  my-1">
                      <label for="tipoDeInvestigacion" class="col-form-label" align="center">Tipo de investigacion:</label>
                      <select class="custom-select col-sm-12" name="tipoDeInvestigacion" id="tipoDeInvestigacion">
                        <option value="1">Selecciona un valor</option>
                        <?php foreach($tipoDeInvestigacion as $tipo):?>
                          <?php if ($tipo->id>1): ?>
                            <option value="<?php echo $tipo->id;?>" <?php echo $tipo->id==$registros->id_tipoDeInvestigacion ? "selected":"";?> ><?php echo $tipo->nombre;?></option>
                          <?php endif; ?>
                        <?php endforeach;?>
                      </select>
                      <?php echo form_error("tipoDeInvestigacion","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                    </div>
                  </div>
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                          <tr>
                            <th scope="col">#</th>
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
                                <td><?php echo $agresor->id;?></td>
                                <td><?php echo $agresor->sexo;?></td>
                                <td><?php echo $agresor->tipoAgresor;?></td>
                                <td><?php echo $agresor->nivel1;?></td>
                                <td><?php echo $agresor->nivel2;?></td>
                                <td><?php echo $agresor->nombre;?></td>
                                <td>
                                  <ul class="d-flex justify-content-center">
                                    <li class="mr-3"><a href="<?php echo base_url()?>app/agresor/edit/<?php echo $agresor->id;?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                                    <li><a href="<?php echo base_url()?>app/agresor/delete/<?php echo $agresor->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                  </ul>
                                </td>
                              </tr>
                            <?php endforeach;?>
                          <?php endif;?>
                        </tbody>
                      </table>
                      <a href="<?php echo base_url();?>app/agresor/add/<?php echo $registros->id;?>" class="btn btn-outline-primary mb-3"><span class="fa fa-plus"></span> Agregar Agresor</a>
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
                      <textarea name="analisisDeContexto" id="analisisDeContexto" style="width:100%; height:300px;" ><?php echo $registros->analisisDeContexto;?></textarea>
                    </div>
                    <div class="col-sm-12 my-1">
                      <label for="analisisDeRiesgo" class="col-form-label">Analisis de riesgo:</label>
                      <textarea name="analisisDeRiesgo" id="analisisDeRiesgo" style="width:100%; height:300px;"><?php echo $registros->analisisDeRiesgo;?></textarea>
                    </div>
                  </div>
                  <div class="form-row align-items-center">
                    <div class="col-sm-12  my-1">
                      <label for="observaciones" class="col-form-label">Observaciones:</label>
                      <textarea name="observaciones" id="observaciones" style="width:100%; height:300px;"><?php echo $registros->observaciones;?></textarea>
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
                  <div class="form-row align-items-center">
                    <div class="col-sm-2  my-1">
                      <label for="tipoDeViolenciaPsicologica" class="col-form-label">Psicologica</label>
                      <select class="custom-select col-sm-11" name="tipoDeViolenciaPsicologica" id="tipoDeViolenciaPsicologica">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipoDeViolenciaPsicologica ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="tipodeViolenciaFisica" class="col-form-label">Física</label>
                      <select class="custom-select col-sm-11" name="tipodeViolenciaFisica" id="tipodeViolenciaFisica">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipodeViolenciaFisica ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="tipoDeViolenciaPatrimonial" class="col-form-label">Patrimonial</label>
                      <select class="custom-select col-sm-11" name="tipoDeViolenciaPatrimonial" id="tipoDeViolenciaPatrimonial">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipoDeViolenciaPatrimonial ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="tipodeViolenciaEconomica" class="col-form-label">Economica</label>
                      <select class="custom-select col-sm-11" name="tipodeViolenciaEconomica" id="tipodeViolenciaEconomica">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipodeViolenciaEconomica ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="tipoDeViolenciaSexual" class="col-form-label">Sexual</label>
                      <select class="custom-select col-sm-11" name="tipoDeViolenciaSexual" id="tipoDeViolenciaSexual">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipoDeViolenciaSexual ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="tipoDeViolenciaCibernetica" class="col-form-label">Violencia en línea</label>
                      <select class="custom-select col-sm-11" name="tipoDeViolenciaCibernetica" id="tipoDeViolenciaCibernetica">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->tipoDeViolenciaCibernetica ? "selected":"";?> ><?php echo $sino->nombre;?></option>
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
                      <select class="custom-select col-sm-11" name="modalidadViolenciaFamiliar" id="modalidadViolenciaFamiliar">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadViolenciaFamiliar ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="modalidadViolenciaLaboral" class="col-form-label">laboral:</label>
                      <select class="custom-select col-sm-11" name="modalidadViolenciaLaboral" id="modalidadViolenciaLaboral">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadViolenciaLaboral ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="modalidadViolenciaEnLaComunidad" class="col-form-label">En La Comunidad:</label>
                      <select class="custom-select col-sm-11" name="modalidadViolenciaEnLaComunidad" id="modalidadViolenciaEnLaComunidad">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadViolenciaEnLaComunidad ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="modalidadViolenciaInstitucional" class="col-form-label">Institucional</label>
                      <select class="custom-select col-sm-11" name="modalidadViolenciaInstitucional" id="modalidadViolenciaInstitucional">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadViolenciaInstitucional ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="modalidadViolenciaFeminicida" class="col-form-label">Feminicida</label>
                      <select class="custom-select col-sm-11" name="modalidadViolenciaFeminicida" id="modalidadViolenciaFeminicida">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadViolenciaFeminicida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-2  my-1">
                      <label for="modalidadDeViolenciaCibernetica" class="col-form-label">Violencia en línea</label>
                      <select class="custom-select col-sm-11" name="modalidadDeViolenciaCibernetica" id="modalidadDeViolenciaCibernetica">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->modalidadDeViolenciaCibernetica ? "selected":"";?> ><?php echo $sino->nombre;?></option>
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
                  <div class="single-table">
                    <div class="table-responsive">
                      <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Observaciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if(!empty($manifestaciones)):?>
                            <?php foreach($manifestaciones as $manifesta):?>
                              <tr>
                                <td><?php echo $manifesta->id;?></td>
                                <td><?php echo $manifesta->manifestacion;?></td>
                                <td><?php echo $manifesta->observaciones;?></td>
                                <td>
                                  <ul class="d-flex justify-content-center">
                                    <li class="mr-3"><a href="<?php echo base_url()?>app/manifestacion/edit/<?php echo $manifesta->id;?>" class="text-success"><i class="fa fa-edit"></i></a></li>
                                    <li><a href="<?php echo base_url()?>app/manifestacion/delete/<?php echo $manifesta->id;?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                  </ul>
                                </td>
                              </tr>
                            <?php endforeach;?>
                          <?php endif;?>
                        </tbody>
                      </table>
                      <a href="<?php echo base_url();?>app/manifestacion/add/<?php echo $registros->id;?>" class="btn btn-outline-primary mb-3"><span class="fa fa-plus"></span> Agregar Manifestacion</a>
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
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->consecuenciaFueDespedida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="consecuenciasBajoPerfil" class="col-form-label">Bajo el perfil::</label>
                      <select class="custom-select col-sm-9" name="consecuenciasBajoPerfil" id="consecuenciasBajoPerfil">
                        <?php foreach($perfiles as $perfile):?>
                          <option value="<?php echo $perfile->id;?>" <?php echo $perfile->id==$registros->consecuenciasBajoPerfil ? "selected":"";?> ><?php echo $perfile->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="consecuenciasDesplazamiento" class="col-form-label">Desplazamiento:</label>
                      <select class="custom-select col-sm-9" name="consecuenciasDesplazamiento" id="consecuenciasDesplazamiento">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->consecuenciasDesplazamiento ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="Judicializacion" class="col-form-label">Judicializacion:</label>
                      <select class="custom-select col-sm-9" name="Judicializacion" id="Judicializacion">
                        <option value="1">Seleccione una opción</option>
                        <?php foreach($Judicializacion as $Judicial):?>
                          <?php if ($Judicial->id >1): ?>
                            <option value="<?php echo $Judicial->id;?>" <?php echo $Judicial->id==$registros->id_consecuenciajudicializacion ? "selected":"";?> ><?php echo $Judicial->nombre;?></option>
                          <?php endif; ?>
                        <?php endforeach;?>
                      </select>
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
            <div id="accordion17" class="collapse" data-parent="#accordion1">
              <div class="card-body">
                <div class="card-body">
                  <div class="form-row align-items-center">
                    <div class="col-sm-3  my-1">
                      <label for="cimacHaceAcompanamientoAnteElMecanismo" class="col-form-label" align="center">Cimac hace acompanamiento ante el mecanismo:</label>
                      <select class="custom-select col-sm-12" name="cimacHaceAcompanamientoAnteElMecanismo" id="cimacHaceAcompanamientoAnteElMecanismo">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->cimacHaceAcompanamientoAnteElMecanismo ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-9  my-1">
                      <label for="queOtraOrganizacionLasAcompana" class="col-form-label" align="center">Que otra organizacion las acompaña:</label>
                      <input class="form-control  col-sm-8" type="text" value="<?php echo $registros->queOtraOrganizacionLasAcompana;?>" id="queOtraOrganizacionLasAcompana" name="queOtraOrganizacionLasAcompana">
                    </div>
                  </div>
                  <div class="form-row align-items-center">
                    <div class="col-sm-3  my-1">
                      <label for="atencionMedicaRecibida" class="col-form-label">Médica</label>
                      <select class="custom-select col-sm-11" name="atencionMedicaRecibida" id="atencionMedicaRecibida">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->atencionMedicaRecibida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="atencionPsicologicaRecibida" class="col-form-label">Psicológica:</label>
                      <select class="custom-select col-sm-11" name="atencionPsicologicaRecibida" id="atencionPsicologicaRecibida">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->atencionPsicologicaRecibida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="atencionJuridicaRecibida" class="col-form-label">Jurídica:</label>
                      <select class="custom-select col-sm-11" name="atencionJuridicaRecibida" id="atencionJuridicaRecibida">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->atencionJuridicaRecibida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
                        <?php endforeach;?>
                      </select>
                    </div>
                    <div class="col-sm-3  my-1">
                      <label for="ningunaAtencionRecibida" class="col-form-label">Ningúna:</label>
                      <select class="custom-select col-sm-11" name="ningunaAtencionRecibida" id="ningunaAtencionRecibida">
                        <?php foreach($sinos as $sino):?>
                          <option value="<?php echo $sino->valor;?>" <?php echo $sino->valor==$registros->ningunaAtencionRecibida ? "selected":"";?> ><?php echo $sino->nombre;?></option>
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
            <div id="accordion18" class="collapse show" data-parent="#accordion1">
              <div class="card-body">
                <div class="card-body">
                  <div class="form-row align-items-center">
                    <div class="col-sm-4  my-1">
                      <label for="beneficiariaDelMecanismoDeProtecion" class="col-form-label">Beneficiaria del mecanismo de protecion:</label>
                        <select class="custom-select col-sm-11" name="beneficiariaDelMecanismoDeProtecion" id="beneficiariaDelMecanismoDeProtecion">
                          <option selected="selected" value="0">Seleccione una opción</option>
                          <?php foreach($niveles as $nivel):?>
                            <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                      <div class="col-sm-4  my-1">
                        <label for="carpetaDeInvestigacionEnAlgunaProcuraduria" class="col-form-label">Carpeta de investigacion en alguna procuraduria:</label>
                        <select class="custom-select col-sm-11" name="carpetaDeInvestigacionEnAlgunaProcuraduria" id="carpetaDeInvestigacionEnAlgunaProcuraduria">
                          <option selected="selected" value="0">Seleccione una opción</option>
                          <?php foreach($niveles as $nivel):?>
                            <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                      <div class="col-sm-4  my-1">
                        <label for="quejaAnteComisionDeDerechosHumanos" class="col-form-label">Queja ante comisión de derechos humanos:</label>
                        <select class="custom-select col-sm-11" name="quejaAnteComisionDeDerechosHumanos" id="quejaAnteComisionDeDerechosHumanos">
                          <option selected="selected" value="0">Seleccione una opción</option>
                          <?php foreach($niveles as $nivel):?>
                            <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                    </div>
                    <div class="form-row align-items-center">
                      <div class="col-sm-3  my-1">
                        <label for="renavi" class="col-form-label">Ingreso cuenta de RENAVI:</label>
                        <select class="custom-select col-sm-10" name="renavi" id="renavi">
                          <option selected="selected" value="0">Seleccione una opción</option>
                          <?php foreach($niveles as $nivel):?>
                            <option value="<?php echo $nivel->id;?>"><?php echo $nivel->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                      <div class="col-sm-3  my-1">
                        <label for="norenavi" class="col-form-label" align="center">No.RENAVI:</label>
                        <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('norenavi');?>" id="norenavi" name="norenavi">
                        <?php echo form_error("norenavi","<div class='alert alert-danger alert-dismissible fade show' role='aler't><button type='button' class='close' data-dismiss='alert'>&times;</button> ","</div>"); ?>
                      </div>
                      <div class="col-sm-3  my-1">
                        <label for="estasDeAcuedoConElMecanismoDeProteccion" class="col-form-label">Estas de acuedo con el mecanismo de proteccion:</label>
                        <select class="custom-select col-sm-11" name="estasDeAcuedoConElMecanismoDeProteccion" id="estasDeAcuedoConElMecanismoDeProteccion">
                          <?php foreach($sinos as $sino):?>
                            <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                      <div class="col-sm-3  my-1">
                        <label for="esasMedidasTePermitenSeguirHaciendoTuTrabajo" class="col-form-label">Esas medidas te permiten seguir haciendo tu trabajo:</label>
                        <select class="custom-select col-sm-10" name="esasMedidasTePermitenSeguirHaciendoTuTrabajo" id="esasMedidasTePermitenSeguirHaciendoTuTrabajo">
                          <?php foreach($sinos as $sino):?>
                            <option value="<?php echo $sino->valor;?>"><?php echo $sino->nombre;?></option>
                          <?php endforeach;?>
                        </select>
                      </div>
                    </div>
                    <div class="form-row align-items-center">
                      <div class="col-sm-12 my-1">
                        <label for="porQue" class="col-form-label">¿Por que?:</label>
                        <textarea name="porQue"  id="porQue" style="width:100%; height:200px;" ></textarea>
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
          </div>
          <!-- Acciones de seguimiento end -->
          <!-- Boton start -->
          <div class="form-group">
            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
          </div>
          <!-- Boton end -->
        </div>
      </div>
  </form>
</div>
  <!-- accordion style 1 end -->
