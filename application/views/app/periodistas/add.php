<!-- accordion style 1 start -->

                    <div class="col-lg-12 mt-5">
                        <form action="<?php echo base_url();?>app/periodistas/store" method="POST">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="header-title">Informacion de la periodista</h3>
                                <div id="accordion1" class="according">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link">Informacion Personal</a>
                                        </div>
                                        <div id="accordion11" class="collapse show" data-parent="#accordion1">
                                            <div class="card-body">
                                               <div class="form-row align-items-center">
                                                            <div class="col-sm-4  my-1">
                                                                <label for="nombres" class="col-form-label">Nombres</label>
                                                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="nombres" name="nombres">
                                                            </div>
                                                            <div class="col-sm-4 my-1">
                                                                <label for="apellidoPaterno" class="col-form-label">Primer Apellido</label>
                                                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="apellidoPaterno" name="apellidoPaterno">
                                                            </div>
                                                            <div class="col-sm-4 my-1">
                                                                <label for="apellidoMaterno" class="col-form-label">Segundo Apellido</label>
                                                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="apellidoMaterno" name="apellidoMaterno">
                                                            </div>
                                               </div>
                                               <div class="form-row align-items-center">
                                                            <div class="col-sm-2  my-1 ">
                                                                <label class="col-form-label">Edad</label>
                                                                <select class="custom-select" name="edad" id="edad">
                                                                <option selected="selected" value="0">Seleccione un valor</option>
                                                                <?php foreach($edades as $edad):?>
                                                                    <option value="<?php echo $edad->id;?>"><?php echo $edad->parametro;?></option>
                                                                <?php endforeach;?>
                                                                </select>
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
                                                            <div class="col-sm-4 my-1">
                                                               <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                                                                 <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="nommunicipiobres" name="municipio">
                                                            </div>
                                                            <div class="col-sm-3 my-1">
                                                               <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                                                                 <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="localidad" name="localidad">
                                                            </div>
                                               </div>
                                               <div class="form-row align-items-center">
                                                            <div class="col-sm-2  my-1 ">
                                                                <label class="col-form-label">Su casa es:</label>
                                                                <select class="custom-select" name="tiposdecasa" id="tiposdecasa">
                                                                <option selected="selected" value="0">Seleccione un valor</option>
                                                                <?php foreach($tiposdecasa as $tipo):?>
                                                                    <option value="<?php echo $tipo->id;?>"><?php echo $tipo->nombre;?></option>
                                                                <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4  my-1 ">
                                                                <label for="viveCon" class="col-form-label">Vive con:</label>
                                                                <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="viveCon" name="viveCon">
                                                            </div>
                                                            <div class="col-sm-4  my-1 ">
                                                                <label for="dependientesEconomicos" class="col-form-label">Dependientes económicos:</label>
                                                               <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="" id="dependientesEconomicos" name="dependientesEconomicos">
                                                            </div>
                                                            <div class="col-sm-2  my-1 ">
                                                                <label class="col-form-label">Estado civil:</label>
                                                                <select class="custom-select" name="estadoCivil" id="estadoCivil">
                                                                <option selected="selected" value="0">Seleccione un valor</option>
                                                                <?php foreach($estadocivil as $civil):?>
                                                                    <option value="<?php echo $civil->id;?>"><?php echo $civil->nombre;?></option>
                                                                <?php endforeach;?>
                                                                </select>
                                                            </div>
                                               </div>
                                               <div class="form-row align-items-center">
                                                    <div class="col-sm-4 my-1 ">
                                                        <label class="col-form-label col-sm-12">¿Pertenece a la alguna comunidad indigena?</label>
                                                        <select class="custom-select col-sm-8" name="comunidadindigena" id="comunidadindigena">

                                                        <?php foreach($comunidadindigena as $comunidad):?>
                                                            <option value="<?php echo $comunidad->id;?>"><?php echo $comunidad->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label class="col-form-label col-sm-12">¿Pertenece a la comunidad LGBTTTI?</label>
                                                        <select class="custom-select col-sm-8" name="   comunidadLGBTTTI" id="comunidadLGBTTTI">

                                                        <?php foreach($comunidadlgbttti as $comunidadlgbttti):?>
                                                            <option value="<?php echo $comunidadlgbttti->id;?>"><?php echo $comunidadlgbttti->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>

                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link">Informacion de contacto</a>
                                        </div>
                                        <div id="accordion12" class="collapse show" data-parent="#accordion1">
                                            <div class="card-body">
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="telefonoparticular" class="col-form-label" >Telefono Particular</label>
                                                         <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="" id="telefonoparticular" name="telefonoparticular">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                         <label for="telefonocelular" class="col-form-label">Telefono Celular</label>
                                                          <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="" id="telefonocelular" name="telefonocelular">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="email" class="col-form-label">Correo Electronico</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-8" type="email" value="" id="email" name="email"placeholder="name@example.com">
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="telegram" class="col-form-label"><i
                                                        class="fa fa-paper-plane"></i>Telegram</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="telegram" name="telegram">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="skype" class="col-form-label"><i
                                                        class="fa fa-skype"></i> Skype</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="skype" name="skype">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="facebook" class="col-form-label"><i
                                                        class="fa fa-facebook-official"></i>Facebook</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="facebook" name="facebook">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="twitter" class="col-form-label"><i
                                                        class="fa fa-twitter"></i> Twitter</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="twitter" name="twitter">
                                                    </div>
                                                </div>
                                                 <div class="form-row align-items-center">
                                                     <div class="col-sm-3 my-1 ">
                                                        <label for="instagram" class="col-form-label"><i
                                                        class="fa fa-instagram"></i> Instagram</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="instagram" name="instagram">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="youtube" class="col-form-label"><i
                                                        class="fa fa-youtube"></i> Youtube</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="youtube" name="youtube">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="snapchat" class="col-form-label">Snapchat</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="snapchat" name="snapchat">
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="otraredsocial" class="col-form-label"><i
                                                        class="fa fa-users"></i> Otra Red</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="otraredsocial" name="otraredsocial">
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link">Informacion Laboral</a>
                                        </div>
                                        <div id="accordion13" class="collapse show" data-parent="#accordion1">
                                            <div class="card-body">
                                                <div class="form-row align-items-center">
                                                   <div class="col-sm-2  my-1 ">
                                                        <label class="col-form-label">Tipo de medio</label>
                                                        <select class="custom-select col-sm-11" name="tipodemedio" id="tipodemedio">
                                                        <option selected="selected" value="0">Seleccione un valor</option>
                                                        <?php foreach($tipodemedio as $tipomedio):?>
                                                            <option value="<?php echo $tipomedio->id;?>"><?php echo $tipomedio->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3 my-1 ">
                                                        <label for="paracuantosmedioslabora" class="col-form-label"> ¿Para cuantos medios labora?</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="" id="paracuantosmedioslabora" name="paracuantosmedioslabora">
                                                    </div>
                                                    <div class="col-sm-2 my-1 ">
                                                        <label class="col-form-label">Tipo de contrato</label>
                                                        <select class="custom-select col-sm-12" name="tipodecontrato" id="tipodecontrato">
                                                        <option selected="selected" value="0">Seleccione un valor</option>
                                                        <?php foreach($tipodecontrato as $tipocontrato):?>
                                                            <option value="<?php echo $tipocontrato->id;?>"><?php echo $tipocontrato->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-5 my-1 ">
                                                        <label for="direcciondelmedio" class="col-form-label"> Direccion del medio</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="" id="direcciondelmedio" name="direcciondelmedio">
                                                    </div>
                                                 </div>
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-2  my-1 ">
                                                        <label class="col-form-label">Cargo en el medio</label>
                                                        <select class="custom-select col-sm-10" name="cargoenelmedio" id="cargoenelmedio">
                                                        <option selected="selected" value="0">Seleccione un valor</option>
                                                        <?php foreach($cargoenelmedio as $cargo):?>
                                                            <option value="<?php echo $cargo->id;?>"><?php echo $cargo->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-2  my-1 ">
                                                        <label class="col-form-label">Fuente</label>
                                                        <select class="custom-select col-sm-10" name="fuente" id="fuente">
                                                        <option selected="selected" value="0">Seleccione un valor</option>
                                                        <?php foreach($fuente as $fuente):?>
                                                            <option value="<?php echo $fuente->id;?>"><?php echo $fuente->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="Link1" class="col-form-label">Link 1</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="" id="Link1" name="Link1">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="Link2" class="col-form-label">Link 2</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="" id="Link2" name="Link2">
                                                    </div>

                                                </div>
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="Link3" class="col-form-label">Link 3</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="" id="Link3" name="Link3">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="Link4" class="col-form-label">Link 4</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="" id="Link4" name="Link4">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="Link5" class="col-form-label">Link 5</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="" id="Link5" name="Link5">
                                                    </div>
                                                </div>
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="AnosDeEjercerElPeriodismo" class="col-form-label">Años de ejercer el periodismo</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="" id="AnosDeEjercerElPeriodismo" name="AnosDeEjercerElPeriodismo">
                                                    </div>
                                                    <div class="col-sm-2 my-1 ">
                                                        <label class="col-form-label">Sexo del jefe inmediato</label>
                                                        <select class="custom-select col-sm-12" name="sexodeljefeinmediato" id="sexodeljefeinmediato">
                                                        <option selected="selected" value="0">Seleccione un valor</option>
                                                        <?php foreach($sexo as $sexo):?>
                                                            <option value="<?php echo $sexo->id;?>"><?php echo $sexo->nombre;?></option>
                                                        <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6 my-1 ">
                                                        <label for="cuantasreporterasyreporteroshayenelmedio" class="col-form-label">¿Cuantas reporteras y reporteros hay en el medio?</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-6" type="number" value="" id="cuantasreporterasyreporteroshayenelmedio" name="cuantasreporterasyreporteroshayenelmedio">
                                                    </div>



                                                </div>
                                                <div class="form-row align-items-center">
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="cuantasreporterashayenelmedio" class="col-form-label">¿Cuantas reporteras hay en el medio?</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-7" type="number" value="" id="cuantasreporterashayenelmedio" name="cuantasreporterashayenelmedio">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="cuantasreporterasyreporteroshayenlafuente" class="col-form-label">  ¿Cuantas reporteras y reporteros hay en la fuente?  </label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-9" type="number" value="" id="cuantasreporterasyreporteroshayenlafuente" name="cuantasreporterasyreporteroshayenlafuente">
                                                    </div>
                                                    <div class="col-sm-4 my-1 ">
                                                        <label for="cuantasreporterashayenlafuente" class="col-form-label">¿Cuantas reporteras hay en la fuente?</label>
                                                        <input class="form-control form-control-sm input-rounded col-sm-7" type="number" value="" id="cuantasreporterashayenlafuente" name="cuantasreporterashayenlafuente">
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                        </div>
                    </form>
                    </div>
                    <!-- accordion style 1 end -->
