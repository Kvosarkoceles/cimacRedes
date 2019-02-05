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
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('nombres');?>" id="nombres" name="nombres">
                    <?php echo form_error("nombres","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-4 my-1">
                    <label for="apellidoPaterno" class="col-form-label">Primer Apellido</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('apellidoPaterno');?>" id="apellidoPaterno" name="apellidoPaterno">
                    <?php echo form_error("apellidoPaterno","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-4 my-1">
                    <label for="apellidoMaterno" class="col-form-label">Segundo Apellido</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('apellidoMaterno');?>" id="apellidoMaterno" name="apellidoMaterno">
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
                          <option value="<?php echo $edad->id;?>"<?php echo set_select('edad',$edad->id); ?>><?php echo $edad->parametro;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("edad","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-3 my-1">
                    <label class="col-form-label">Estado</label>
                    <select class="custom-select" name="estado" id="estado">
                      <option selected="selected" value="">Seleccione un valor</option>
                      <?php foreach($estados as $estado):?>
                        <?php if ($estado->id>1): ?>
                          <option value="<?php echo $estado->id;?>"<?php echo set_select('estado',$estado->id); ?>><?php echo $estado->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("estado","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-4 my-1">
                    <label for="municipio" class="col-form-label form-control-sm input-rounded">Municipio</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('municipio');?>" id="nommunicipiobres" name="municipio">
                  </div>
                  <div class="col-sm-3 my-1">
                    <label for="localidad" class="col-form-label form-control-sm input-rounded">Localidad</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('localidad');?>" id="localidad" name="localidad">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-2  my-1 ">
                    <label class="col-form-label">Su casa es:</label>
                    <select class="custom-select" name="tiposdecasa" id="tiposdecasa">
                      <option selected="selected" value="1">Seleccione un valor</option>
                      <?php foreach($tiposdecasa as $tipo):?>
                        <?php if ($tipo->id>1): ?>
                          <option value="<?php echo $tipo->id;?>"><?php echo $tipo->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("tiposdecasa","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-4  my-1 ">
                    <label for="viveCon" class="col-form-label">Vive con:</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('viveCon');?>" id="viveCon" name="viveCon">
                  </div>
                  <div class="col-sm-4  my-1 ">
                    <label for="dependientesEconomicos" class="col-form-label">Dependientes económicos:</label>
                    <input class="form-control form-control-sm input-rounded col-sm-12" type="text" value="<?php echo set_value('dependientesEconomicos');?>" id="dependientesEconomicos" name="dependientesEconomicos">
                  </div>
                  <div class="col-sm-2  my-1 ">
                    <label class="col-form-label">Estado civil:</label>
                    <select class="custom-select" name="estadoCivil" id="estadoCivil">
                      <option selected="selected" value="1">Seleccione un valor</option>
                      <?php foreach($estadocivil as $civil):?>
                        <?php if ($civil->id >1): ?>
                          <option value="<?php echo $civil->id;?>"<?php echo set_select('estadoCivil',$civil->id);?>><?php echo $civil->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("estadoCivil","<span class='text-danger'>","</span>"); ?>
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-4 my-1 ">
                    <label class="col-form-label col-sm-12">¿Pertenece a la alguna comunidad indigena?</label>
                    <select class="custom-select col-sm-8" name="comunidadindigena" id="comunidadindigena">
                      <?php foreach($comunidadindigena as $comunidad):?>
                        <option value="<?php echo $comunidad->id;?>"<?php echo set_select('comunidadindigena',$comunidad->id);?>><?php echo $comunidad->nombre;?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label class="col-form-label col-sm-12">¿Pertenece a la comunidad LGBTTTI?</label>
                    <select class="custom-select col-sm-8" name="comunidadLGBTTTI" id="comunidadLGBTTTI">
                      <?php foreach($comunidadlgbttti as $comunidadlgbttti):?>
                        <option value="<?php echo $comunidadlgbttti->id;?>"<?php echo set_select('comunidadLGBTTTI',$comunidadlgbttti->id);?>><?php echo $comunidadlgbttti->nombre;?></option>
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
                    <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="<?php echo set_value('telefonoparticular');?>" id="telefonoparticular" name="telefonoparticular">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="telefonocelular" class="col-form-label">Telefono Celular</label>
                    <input class="form-control form-control-sm input-rounded col-sm-8" type="tel" value="<?php echo set_value('telefonocelular');?>" id="telefonocelular" name="telefonocelular">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="email" class="col-form-label">Correo Electronico</label>
                    <input class="form-control form-control-sm input-rounded col-sm-8" type="email" value="<?php echo set_value('email');?>" id="email" name="email"placeholder="name@example.com">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-3 my-1 ">
                    <label for="telegram" class="col-form-label"><i class="fa fa-paper-plane"></i>Telegram</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('telegram');?>" id="telegram" name="telegram">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="skype" class="col-form-label"><i class="fa fa-skype"></i> Skype</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('skype');?>" id="skype" name="skype">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="facebook" class="col-form-label"><i class="fa fa-facebook-official"></i>Facebook</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('facebook');?>" id="facebook" name="facebook">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="twitter" class="col-form-label"><i class="fa fa-twitter"></i> Twitter</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('twitter');?>" id="twitter" name="twitter">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-3 my-1 ">
                    <label for="instagram" class="col-form-label"><i class="fa fa-instagram"></i> Instagram</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('instagram');?>" id="instagram" name="instagram">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="youtube" class="col-form-label"><i class="fa fa-youtube"></i> Youtube</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('youtube');?>" id="youtube" name="youtube">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="snapchat" class="col-form-label">Snapchat</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('snapchat');?>" id="snapchat" name="snapchat">
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="otraredsocial" class="col-form-label"><i class="fa fa-users"></i> Otra Red</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('otraredsocial');?>" id="otraredsocial" name="otraredsocial">
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
                  <div class="col-sm-2 my-1 ">
                    <label for="rol">Tipo de medio:</label>
                    <select class="custom-select" name="tipodemedio" id="tipodemedio">
                      <option value="" selected="selected">Seleccione un valor</option>
                      <?php foreach($tipodemedio as $tipomedio):?>
                        <?php if ($tipomedio->id>1): ?>
                          <option value="<?php echo $tipomedio->id;?>" <?php echo set_select('tipodemedio',$tipomedio->id); ?>><?php echo $tipomedio->nombre;?></option>
                        <?php endif; ?>
                       <?php endforeach;?>
                     </select>
                     <?php echo form_error("tipodemedio","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-3 my-1 ">
                    <label for="paracuantosmedioslabora" class="col-form-label"> ¿Para cuantos medios labora?</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="<?php echo set_value('paracuantosmedioslabora');?>" id="paracuantosmedioslabora" name="paracuantosmedioslabora">
                  </div>
                  <div class="col-sm-2 my-1 ">
                    <label for="rol">Tipo de contrato:</label>
                    <select class="custom-select" name="tipodecontrato" id="tipodecontrato">
                      <option value="" selected="selected">Seleccione un valor</option>
                      <?php foreach($tipodecontrato as $tipocontrato):?>
                        <?php if ($tipocontrato->id>1): ?>
                          <option value="<?php echo $tipocontrato->id;?>" <?php echo set_select('tipodecontrato',$tipocontrato->id); ?>><?php echo $tipocontrato->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("tipodecontrato","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-5 my-1 ">
                    <label for="direcciondelmedio" class="col-form-label"> Direccion del medio</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="text" value="<?php echo set_value('direcciondelmedio');?>" id="direcciondelmedio" name="direcciondelmedio">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-2 my-1 ">
                    <label for="rol">Cargo en el medio:</label>
                    <select class="custom-select" name="cargoenelmedio" id="cargoenelmedio">
                      <option value="" selected="selected">Seleccione un valor</option>
                      <?php foreach($cargoenelmedio as $cargo):?>
                        <?php if ($cargo->id>1): ?>
                          <option value="<?php echo $cargo->id;?>" <?php echo set_select('cargoenelmedio',$cargo->id); ?>><?php echo $cargo->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("cargoenelmedio","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-2 my-1 ">
                    <label for="rol">Fuente:</label>
                    <select class="custom-select" name="fuente" id="fuente">
                      <option value="" selected="selected">Seleccione un valor</option>
                      <?php foreach($fuente as $fuente):?>
                        <?php if ($fuente->id>1): ?>
                          <option value="<?php echo $fuente->id;?>" <?php echo set_select('fuente',$fuente->id); ?>><?php echo $fuente->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                    <?php echo form_error("fuente","<span class='text-danger'>","</span>"); ?>
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="Link1" class="col-form-label">Link 1</label>
                    <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo set_value('Link1');?>" id="Link1" name="Link1">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="Link2" class="col-form-label">Link 2</label>
                    <input class="form-control form-control-sm input-rounded col-sm-11" type="url" value="<?php echo set_value('Link2');?>" id="Link2" name="Link2">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-4 my-1 ">
                    <label for="Link3" class="col-form-label">Link 3</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="<?php echo set_value('Link3');?>" id="Link3" name="Link3">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="Link4" class="col-form-label">Link 4</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="<?php echo set_value('Link4');?>" id="Link4" name="Link4">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="Link5" class="col-form-label">Link 5</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="url" value="<?php echo set_value('Link5');?>" id="Link5" name="Link5">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-4 my-1 ">
                    <label for="AnosDeEjercerElPeriodismo" class="col-form-label">Años de ejercer el periodismo</label>
                    <input class="form-control form-control-sm input-rounded col-sm-10" type="number" value="<?php echo set_value('AnosDeEjercerElPeriodismo');?>" id="AnosDeEjercerElPeriodismo" name="AnosDeEjercerElPeriodismo">
                  </div>
                  <div class="col-sm-2 my-1 ">
                    <label class="col-form-label">Sexo del jefe inmediato</label>
                    <select class="custom-select col-sm-12" name="sexodeljefeinmediato" id="sexodeljefeinmediato">
                      <option selected="selected" value="1">Seleccione un valor</option>
                      <?php foreach($sexo as $sexo):?>
                        <?php if ($sexo->id>1): ?>
                          <option value="<?php echo $sexo->id;?>"><?php echo $sexo->nombre;?></option>
                        <?php endif; ?>
                      <?php endforeach;?>
                    </select>
                  </div>
                  <div class="col-sm-6 my-1 ">
                    <label for="cuantasreporterasyreporteroshayenelmedio" class="col-form-label">¿Cuantas reporteras y reporteros hay en el medio?</label>
                    <input class="form-control form-control-sm input-rounded col-sm-6" type="number" value="<?php echo set_value('cuantasreporterasyreporteroshayenelmedio');?>"id="cuantasreporterasyreporteroshayenelmedio" name="cuantasreporterasyreporteroshayenelmedio">
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <div class="col-sm-4 my-1 ">
                    <label for="cuantasreporterashayenelmedio" class="col-form-label">¿Cuantas reporteras hay en el medio?</label>
                    <input class="form-control form-control-sm input-rounded col-sm-7" type="number" value="<?php echo set_value('cuantasreporterashayenelmedio');?>" id="cuantasreporterashayenelmedio" name="cuantasreporterashayenelmedio">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="cuantasreporterasyreporteroshayenlafuente" class="col-form-label">  ¿Cuantas reporteras y reporteros hay en la fuente?  </label>
                    <input class="form-control form-control-sm input-rounded col-sm-9" type="number" value="<?php echo set_value('cuantasreporterasyreporteroshayenlafuente');?>" id="cuantasreporterasyreporteroshayenlafuente" name="cuantasreporterasyreporteroshayenlafuente">
                  </div>
                  <div class="col-sm-4 my-1 ">
                    <label for="cuantasreporterashayenlafuente" class="col-form-label">¿Cuantas reporteras hay en la fuente?</label>
                    <input class="form-control form-control-sm input-rounded col-sm-7" type="number" value="<?php echo set_value('cuantasreporterashayenlafuente');?>" id="cuantasreporterashayenlafuente" name="cuantasreporterashayenlafuente">
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
