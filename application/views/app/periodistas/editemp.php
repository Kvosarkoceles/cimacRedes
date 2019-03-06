<!-- accordion style 2 start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Edita periodista</h4>
            <div id="accordion2" class="according accordion-s2">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#accordion21">Informacion Personal</a>
                    </div>
                    <div id="accordion21" class="collapse show" data-parent="#accordion2">
                        <div class="card-body">
                          <div class="card-body">
                            <div class="form-row align-items-center">
                              <div class="col-sm-4  my-1">
                                <label for="nombres" class="col-form-label">Nombres</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->nombres;?>" id="nombres" name="nombres">
                                <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-4 my-1">
                                <label for="apellidoPaterno" class="col-form-label">Primer Apellido</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->apellidoPaterno;?>" id="apellidoPaterno" name="apellidoPaterno">
                                <?php echo form_error("apellidoPaterno","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-4 my-1">
                                <label for="apellidoMaterno" class="col-form-label">Segundo Apellido</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->apellidoMaterno;?>" id="apellidoMaterno" name="apellidoMaterno">
                                <?php echo form_error("apellidoMaterno","<span class='text-danger'>","</span>"); ?>
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-2  my-1 ">
                                <label class="col-form-label">Edad</label>
                                <select class="custom-select" name="edad" id="edad">
                                    <option selected="selected" value="">Seleccione un valor</option>
                                  <?php foreach($edades as $edad):?>
                                    <?php if ($edad->id>1): ?>
                                      <option value="<?php echo $edad->id;?>"<?php echo $edad->id==$periodista->id_Edad ? "selected":"";?>><?php echo $edad->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                </select>
                                <?php echo form_error("edad","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-3 my-1">
                                <label class="col-form-label">Estado</label>
                                <select class="custom-select" name="estado" id="estado">
                                  <?php foreach($estados as $estado):?>
                                    <?php if ($estado->id>1): ?>
                                      <option value="<?php echo $estado->id;?>" <?php echo $estado->id==$periodista->id_estados ? "selected":"";?> ><?php echo $estado->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                </select>
                                <?php echo form_error("estado","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-4 my-1">
                                <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->municipio;?>" id="municipio" name="municipio">
                              </div>
                              <div class="col-sm-3 my-1">
                                <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->localidad;?>" id="localidad" name="localidad">
                              </div>
                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-2  my-1 ">
                                <label class="col-form-label">Su casa es:</label>
                                <select class="custom-select" name="tiposdecasa" id="tiposdecasa">
                                  <?php foreach($tiposdecasa as $tipo):?>
                                    <?php if ($tipo->id>0): ?>
                                      <option value="<?php echo $tipo->id;?>" <?php echo $tipo->id==$periodista->id_tipodecasa ? "selected":"";?> ><?php echo $tipo->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                </select>
                                <?php echo form_error("tiposdecasa","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-4  my-1 ">
                                <label for="viveCon" class="col-form-label">Vive con:</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->viveCon;?>" id="viveCon" name="viveCon">
                              </div>
                              <div class="col-sm-3  my-1 ">
                                <label for="dependientesEconomicos" class="col-form-label">Dependientes económicos:</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $periodista->dependientesEconomicos;?>" id="dependientesEconomicos" name="dependientesEconomicos">
                              </div>
                              <div class="col-sm-3  my-1 ">
                                <label for="hijos" class="col-form-label">Hijas/Hijos:</label>
                                <input class="form-control form-control-sm input-rounded col-sm-12" type="number" value="<?php echo $periodista->hijos;?>" id="hijos" name="hijos">
                              </div>

                            </div>
                            <div class="form-row align-items-center">
                              <div class="col-sm-4  my-1 ">
                                <label class="col-form-label">Estado civil:</label>
                                <select class="custom-select col-sm-11" name="estadoCivil" id="estadoCivil">
                                  <?php foreach($estadocivil as $civil):?>
                                    <?php if ($civil->id >0): ?>
                                      <option value="<?php echo $civil->id;?>"<?php echo $civil->id==$periodista->id_estadocivil ? "selected":"";?> ><?php echo $civil->nombre;?></option>
                                    <?php endif; ?>
                                  <?php endforeach;?>
                                </select>
                                <?php echo form_error("estadoCivil","<span class='text-danger'>","</span>"); ?>
                              </div>
                              <div class="col-sm-4 my-1 ">
                                <label class="col-form-label col-sm-12">¿Pertenece a la alguna comunidad indigena?</label>
                                <select class="custom-select col-sm-11" name="comunidadindigena" id="comunidadindigena">
                                  <?php foreach($comunidadindigena as $comunidad):?>
                                    <option value="<?php echo $comunidad->id;?>" <?php echo $comunidad->id==$periodista->comunidadIndigena ? "selected":"";?> ><?php echo $comunidad->nombre;?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                              <div class="col-sm-4 my-1 ">
                                <label class="col-form-label col-sm-12">¿Pertenece a la comunidad LGBTTTI?</label>
                                <select class="custom-select col-sm-11" name="comunidadLGBTTTI" id="comunidadLGBTTTI">
                                  <?php foreach($comunidadlgbttti as $comunidadlgbttti):?>
                                    <option value="<?php echo $comunidadlgbttti->id;?>" <?php echo $comunidadlgbttti->id==$periodista->comunidadLGBTTTI ? "selected":"";?> ><?php echo $comunidadlgbttti->nombre;?></option>
                                  <?php endforeach;?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion22">Informacion de contacto</a>
                    </div>
                    <div id="accordion22" class="collapse show" data-parent="#accordion2">
                        <div class="card-body">
                          <div class="form-row align-items-center">
                            <div class="col-sm-4 my-1 ">
                              <label for="telefonoparticular" class="col-form-label" >Telefono Particular</label>
                              <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="<?php echo $periodista->telefonoparticular;?>" id="telefonoparticular" name="telefonoparticular">
                            </div>
                            <div class="col-sm-4 my-1 ">
                              <label for="telefonocelular" class="col-form-label">Telefono Celular</label>
                              <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="<?php echo $periodista->telefonocelular;?>" id="telefonocelular" name="telefonocelular">
                            </div>
                            <div class="col-sm-4 my-1 ">
                              <label for="email" class="col-form-label">Correo Electronico</label>
                              <input class="form-control form-control-sm input-rounded col-sm-8" type="email" value="<?php echo $periodista->email;?>" id="email" name="email"placeholder="name@example.com">
                            </div>
                          </div>
                          <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1 ">
                              <label for="telegram" class="col-form-label"><i class="fa fa-paper-plane"></i>Telegram</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->telegram;?>" id="telegram" name="telegram">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="skype" class="col-form-label"><i class="fa fa-skype"></i> Skype</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->skype;?>" name="skype">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="facebook" class="col-form-label"><i class="fa fa-facebook-official"></i>Facebook</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->facebook;?>" id="facebook" name="facebook">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="twitter" class="col-form-label"><i class="fa fa-twitter"></i> Twitter</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->twitter;?>" id="twitter" name="twitter">
                            </div>
                          </div>
                          <div class="form-row align-items-center">
                            <div class="col-sm-3 my-1 ">
                              <label for="instagram" class="col-form-label"><i class="fa fa-instagram"></i> Instagram</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->instagram;?>" id="instagram" name="instagram">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="youtube" class="col-form-label"><i class="fa fa-youtube"></i> Youtube</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->youtube;?>" id="youtube" name="youtube">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="snapchat" class="col-form-label">Snapchat</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->snapchat;?>" id="snapchat" name="snapchat">
                            </div>
                            <div class="col-sm-3 my-1 ">
                              <label for="otraredsocial" class="col-form-label"><i class="fa fa-users"></i> Otra Red</label>
                              <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo $periodista->otraredsocial;?>" id="otraredsocial" name="otraredsocial">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion23">Informacion Laboral</a>
                    </div>
                    <div id="accordion23" class="collapse show" data-parent="#accordion2">
                      <div class="card-body">
                        <div class="form-row align-items-center">
                          <div class="col-sm-4 my-1 ">
                            <label for="nombreDelMedio">Nombre del medio:</label>
                            <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $trabajo->nombreDelMedio?>" id="nombreDelMedio" name="nombreDelMedio">
                             <?php echo form_error("nombreDelMedio","<span class='text-danger'>","</span>"); ?>
                          </div>
                          <div class="col-sm-3 my-1 ">
                            <label for="rol">Tipo de medio:</label>
                            <select class="custom-select" name="tipodemedio" id="tipodemedio">
                              <?php foreach($tipodemedio as $tipomedio):?>
                                <?php if ($tipomedio->id>1): ?>
                                  <option value="<?php echo $tipomedio->id;?>" <?php echo $tipomedio->id==$trabajo->id_tipodemedio ? "selected":"";?> ><?php echo $tipomedio->nombre;?></option>
                                <?php endif; ?>
                               <?php endforeach;?>
                             </select>
                             <?php echo form_error("tipodemedio","<span class='text-danger'>","</span>"); ?>
                          </div>
                          <div class="col-sm-3 my-1 ">
                            <label for="paracuantosmedioslabora" class="col-form-label"> ¿Para cuantos medios labora?</label>
                            <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="<?php echo $trabajo->paracuantosmedioslabora;?>" id="paracuantosmedioslabora" name="paracuantosmedioslabora">
                          </div>
                          <div class="col-sm-2 my-1 ">
                            <label for="rol">Tipo de contrato:</label>
                            <select class="custom-select" name="tipodecontrato" id="tipodecontrato">
                              <?php foreach($tipodecontrato as $tipocontrato):?>
                                <?php if ($tipocontrato->id>0): ?>
                                  <option value="<?php echo $tipocontrato->id;?>" <?php echo $tipocontrato->id==$trabajo->id_tipodecontrato ? "selected":"";?> ><?php echo $tipocontrato->nombre;?></option>
                                <?php endif; ?>
                              <?php endforeach;?>
                            </select>
                            <?php echo form_error("tipodecontrato","<span class='text-danger'>","</span>"); ?>
                          </div>
                        </div>
                        <div class="form-row align-items-center">
                          <div class="col-sm-5 my-1 ">
                            <label for="direcciondelmedio" class="col-form-label"> Direccion del medio</label>
                            <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo $trabajo->DireccionDelMedio;?>" id="direcciondelmedio" name="direcciondelmedio">
                          </div>
                          <div class="col-sm-4 my-1 ">
                            <label for="rol">Cargo en el medio:</label>
                            <select class="custom-select" name="cargoenelmedio" id="cargoenelmedio">
                              <?php foreach($cargoenelmedio as $cargo):?>
                                <?php if ($cargo->id>1): ?>
                                  <option value="<?php echo $cargo->id;?>" <?php echo $cargo->id==$trabajo->id_cargoenelmedio	 ? "selected":"";?> ><?php echo $cargo->nombre;?></option>
                                <?php endif; ?>
                              <?php endforeach;?>
                            </select>
                            <?php echo form_error("cargoenelmedio","<span class='text-danger'>","</span>"); ?>
                          </div>
                          <div class="col-sm-3 my-1 ">
                            <label for="rol">Fuente:</label>
                            <select class="custom-select" name="fuente" id="fuente">
                              <?php foreach($fuente as $fuente):?>
                                <?php if ($fuente->id>1): ?>
                                  <option value="<?php echo $fuente->id;?>" <?php echo $fuente->id==$trabajo->id_fuente	 ? "selected":"";?> ><?php echo $fuente->nombre;?></option>
                                <?php endif; ?>
                              <?php endforeach;?>
                            </select>
                            <?php echo form_error("fuente","<span class='text-danger'>","</span>"); ?>
                          </div>
                        </div>
                        <div class="form-row align-items-center">
                          <div class="col-sm-6 my-1 ">
                            <label for="Link1" class="col-form-label">Medio de la agresión</label>
                            <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo $trabajo->Links1;?>" id="Link1" name="Link1">
                          </div>
                          <div class="col-sm-6 my-1 ">
                            <label for="Link2" class="col-form-label">Link del medio</label>
                            <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo $trabajo->Links2;?>" id="Link2" name="Link2">
                          </div>
                        </div>
                        <div class="form-row align-items-center">
                          <div class="col-sm-6 my-1 ">
                            <label for="Link3" class="col-form-label">Medio donde labora</label>
                            <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo $trabajo->Links3;?>" id="Link3" name="Link3">
                          </div>
                          <div class="col-sm-6 my-1 ">
                            <label for="Link4" class="col-form-label">Medio donde labora</label>
                            <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo $trabajo->Links4;?>" id="Link4" name="Link4">
                          </div>
                        </div>
                        <div class="form-row align-items-center">
                          <div class="col-sm-6 my-1 ">
                            <label for="Link5" class="col-form-label">Medio donde labora</label>
                            <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo $trabajo->Links5;?>" id="Link5" name="Link5">
                          </div>
                          <div class="col-sm-4 my-1 ">
                            <label for="AnosDeEjercerElPeriodismo" class="col-form-label">Años de ejercer el periodismo</label>
                            <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="<?php echo $trabajo->AnosDeEjercerElPeriodismo;?>" id="AnosDeEjercerElPeriodismo" name="AnosDeEjercerElPeriodismo">
                          </div>
                          <div class="col-sm-2 my-1 ">
                            <label class="col-form-label">Sexo del jefe inmediato</label>
                            <select class="custom-select col-sm-12" name="sexodeljefeinmediato" id="sexodeljefeinmediato">
                              <?php foreach($sexo as $sexo):?>
                                <?php if ($sexo->id>0): ?>
                                  <option value="<?php echo $sexo->id;?>" <?php echo $sexo->id==$trabajo->id_SexoDelJefeInmediato ? "selected":"";?> ><?php echo $sexo->nombre;?></option>
                                <?php endif; ?>
                              <?php endforeach;?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion25">Archivos</a>
                    </div>
                    <div id="accordion25" class="collapse show" data-parent="#accordion2">
                      <div class="card-body">
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
                          <div class="row justify-content-end">
                             <div class="col-2">
                               <a href="<?php echo base_url();?>app/archivos/add/<?php echo $periodista->id;?>" class="btn btn-outline-secondary mb-3"><span class="fa fa-plus"></span> Agregar</a>
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
                          </div>
                        </div>

                      </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#accordion26">Informacion de Incidentes</a>
                    </div>
                    <div id="accordion26" class="collapse show" data-parent="#accordion2">
                      <div class="card-body">
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
                                    <th scope="col">Opciones</th>
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
                        <div class="row justify-content-end">
                           <div class="col-2">
                             <a href="<?php echo base_url();?>app/archivos/add/<?php echo $periodista->id;?>" class="btn btn-outline-secondary mb-3"><span class="fa fa-plus"></span> Agregar</a>
                           </div>
                         </div>
                      </div>
                    </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="row justify-content-end">
                         <div class="col-2">
                           <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                         </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accordion style 2 end -->
