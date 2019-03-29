<div class="col-lg-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h4 align ="center">Informe anual <label for="total" id="año"></label></h4>
      <h5 align="center">Número total de casos registrados:
      <label for="total" id="total"><?php echo $total->monto ?></label></h5>
      <div class="col-lg-12 mt-5">
        <div class="pull-right">
          <select class="form-control" name="year" id="year">
            <?php foreach($años as $año):?>
              <option value="<?php echo $año->year;?>"><?php echo $año->year;?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <!-- accordion style 2 start -->
      <div class="col-lg-12 mt-5">
        <div class="card">
          <div class="card-body">
            <div id="accordion2" class="according accordion-s2">
              <!-- General start -->
              <div class="card">
                <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#accordion3">General</a>
                </div>
                <div id="accordion3" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                    <div class="col-lg-12  mt-5">
                      <h4 class="header-title" align="center">Número de casos registrados</h4>
                      <div id="graficaPorAño" style="height: 500px; width: 100%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- General end -->
              <!-- Informacion de la périodista start -->
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#accordion4">Información de la Periodista</a>
                </div>
                <div id="accordion4" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                    <!--Grafica edades-->
                    <div class="form-row align-items-center ">
                      <div class="col-lg-1  mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <div class="card-body center-block">
                          <h4 class="header-title" align="center">Número de casos registrados por edades de la periodista</h4>
                          <div id="graficaPorEdades" style="height: 500px; width: 100%" ></div>
                        </div>
                      </div>
                      <div class="col-lg-1  mt-5"></div>
                    </div>
                    <!--Grafica tipo de medio-->
                    <div class="form-row align-items-center">
                      <div class="col-lg-1  mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <div class="card-body center-block">
                          <h4 class="header-title" align="center">Número de casos registrados por tipo de medio donde labora la periodista</h4>
                          <div id="graficaTipodeMedio" style="height: 500px; width: 100%"></div>
                        </div>
                      </div>
                      <div class="col-lg-1  mt-5"></div>
                    </div>
                    <!--Grafica cargo en el medio-->
                    <div class="form-row align-items-center">
                      <div class="col-lg-1  mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <div class="card-body center-block">
                          <h4 class="header-title" align="center">Número de casos registrados por cargo en el medio donde labora la periodista</h4>
                          <div id="graficaCargoMedio" style="height: 500px; width: 100%"></div>
                        </div>
                      </div>
                      <div class="col-lg-1  mt-5"></div>
                    </div>
                    <!--Grafica tipo de fuente-->
                    <div class="form-row align-items-center">
                      <div class="col-lg-1  mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <div class="card-body center-block">
                          <h4 class="header-title" align="center">Número de casos registrados por tipo de fuente</h4>
                          <div id="graficaFuente" style="height: 500px; width: 100%"></div>
                        </div>
                      </div>
                      <div class="col-lg-1  mt-5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Informacion de la périodista end -->
              <!-- Ubicación de la agresión start  -->
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#accordion5">Ubicación de la agresión</a>
                </div>
                <div id="accordion5" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                    <div class="form-row align-items-center">
                      <div class="col-lg-1 mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <div class="card-body center-block">
                          <h4 class="header-title" align="center">Número de casos registrados por Estado</h4>
                          <div id="graficaPorEstado" style="height: 500px; width: 100%"></div>
                        </div>

                      </div>
                      <div class="col-lg-1 mt-5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Ubicación de la agresión end  -->
              <!-- Agresión start  -->
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#accordion6">Agresión</a>
                </div>
                <div id="accordion6" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                    <div class="form-row align-items-center">
                      <div class="col-lg-1 mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <h4 class="header-title" align="center">Número de casos registrados por motivo de la agresión</h4>
                        <div id="graficaPorMotivoAgresion" style="height: 500px; width: 100%"></div>
                      </div>
                      <div class="col-lg-1 mt-5"></div>
                    </div>
                    <div class="form-row align-items-center">
                      <div class="col-lg-1 mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <h4 class="header-title" align="center">Número de casos registrados por tipo de investigación</h4>
                        <div id="graficaPorTipoDeInvestigacio" style="height: 500px; width: 100%"></div>
                      </div>
                      <div class="col-lg-1 mt-5"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Agresión end  -->
              <!-- Tipo de violencia start  -->
              <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#accordion7">Tipo de violencia</a>
                </div>
                <div id="accordion7" class="collapse show" data-parent="#accordion2">
                  <div class="card-body">
                    <!--Grafica tipo de violencia start-->
                    <div class="form-row align-items-center">
                      <div class="col-lg-1 mt-5"></div>
                      <div class="col-lg-10  mt-5">
                        <h4 class="header-title" align="center">Número de casos registrados por tipo de violencia</h4>
                        <div id="graficaPorTipoDeViolencia" style="height: 500px; width: 100%"></div>
                      </div>
                      <div class="col-lg-1 mt-5"></div>
                    </div>
                    <!--Grafica tipo de violencia end-->
                  </div>
                </div>
              </div>
              <!-- Tipo de violencia end  -->
            </div>
          </div>
        </div>
      </div>
      <!-- accordion style 2 end -->
    </div>
  </div>
</div>
<script type="text/javascript">
  $( document ).ready(function() {
    var base_url= "<?php echo base_url();?>";
    var año =(new Date).getFullYear();
    datagrafico(base_url, año);
    datagraficoEstados(base_url,año);
    datagraficoEdades(base_url,año);
    datagraficoTipodeMedio(base_url,año);
    datagraficoCargoMedio(base_url,año);
    datagraficoFuente(base_url,año);
    datagraficoMotivoAgresion(base_url,año);
    datagraficoTipoDeInvestigacio(base_url,año);
    datagraficoTipoDeViolencia(base_url,año);
    total(base_url,año);
    $("#year").on("change",function(){
      yearselect = $(this).val();
      datagrafico(base_url,yearselect);
      datagraficoEstados(base_url,yearselect);
      datagraficoEdades(base_url,yearselect);
      datagraficoTipodeMedio(base_url,yearselect);
      datagraficoCargoMedio(base_url,yearselect);
      datagraficoFuente(base_url,yearselect);
      datagraficoMotivoAgresion(base_url,yearselect);
      datagraficoTipoDeInvestigacio(base_url,yearselect);
      datagraficoTipoDeViolencia(base_url,yearselect);
      total(base_url,yearselect);
    });
  });
  function total(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getTotal",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        valor = Number(data.monto);
        $('#total').text(valor);
      }
    });
  }
  function año(year) {
    $('#total').text(year);
  }
  //Grafica General
  function grafico(meses,montos,año) {
    Highcharts.chart('graficaPorAño', {
      chart: {
        //type: 'column',
        spacingBottom: 15,
        spacingTop: 10,
        spacingLeft: 1,
        spacingRight: 1,
        options3d: {
          enabled: false,
          alpha: 10,
          beta: 25,
          depth: 70
        }
      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
        text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
      },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
        enabled: true
      },
      xAxis: {
        categories: meses,
      },
      yAxis: {
        title: {
          text: ' Número de casos registrados'
        }
      },
      series: [{
        data: montos,
        name: año,
        color: '#7f00ff'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_del_año:_'+año,
      }
    });
  }
  function datagrafico(base_url,year) {
    namesMonth= ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
    $.ajax({
        url:"<?php echo base_url() ?>app/graficas/getData",
        type: "POST",
        data: { year : year},
        dataType: 'json',
        success:function(data){
            var meses = new Array();
            var montos = new Array();
            $.each(data, function( index, value ) {
             meses.push(namesMonth[value.mes-1]);
               valor = Number(value.montos);
                 montos.push(valor);
            //  meses.push(namesMonth[value.mes - 1]);

            });

            grafico(meses,montos,year);
        }

    });
    //grafico();

  }
  //Grafica por estados
  function graficoEstados(estado,montos,year) {
    Highcharts.chart('graficaPorEstado', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por estado'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#ff00ff'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoEstados(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataEstados",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficoEstados(estado,montos,year);
      }
    });
  }
  //Grafica edades
  function graficoEdades(estado,montos,year) {
    Highcharts.chart('graficaPorEdades', {
      chart: {
        //type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por edades'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#ffff01'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoEdades(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataEdades",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficoEdades(estado,montos,year);
      }
    });
  }
  //Grafica tipo de medio
  function graficoTipodeMedio(estado,montos,year) {
    Highcharts.chart('graficaTipodeMedio', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por tipo de medio'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#9005c1'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoTipodeMedio(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataTipodeMedio",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficoTipodeMedio(estado,montos,year);
      }
    });
  }
  //Grafica cargo en el medio
  function graficaCargoMedio(estado,montos,year) {
    Highcharts.chart('graficaCargoMedio', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }
      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por cargo en el medio'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#09bbc1'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });

  }
  function datagraficoCargoMedio(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataCargoMedio",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficaCargoMedio(estado,montos,year);
      }
    });
  }
  //Fuente
  function graficaFuente(estado,montos,year) {
    Highcharts.chart('graficaFuente', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por tipo de fuente'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#00ff01'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoFuente(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataFuente",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficaFuente(estado,montos,year);
      }
    });
  }
  //Motivo Agresion
  function graficaPorMotivoAgresion(estado,montos,year) {
    Highcharts.chart('graficaPorMotivoAgresion', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por motivo de la agresión'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#9eff00'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoMotivoAgresion(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataMotivoAgresion",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficaPorMotivoAgresion(estado,montos,year);
      }
    });
  }
  //Tipo De Investigacio
  function graficaPorTipoDeInvestigacio(estado,montos,year) {
    Highcharts.chart('graficaPorTipoDeInvestigacio', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: estado,
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por motivo de la agresión'
            }
        },
      series: [{
          data: montos,
          name: year,
          color: '#8505f6'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }
  function datagraficoTipoDeInvestigacio(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataTipoDeInvestigacio",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var estado = new Array();
        var montos = new Array();
        $.each(data, function( index, value ) {
          estado.push(value.estado );
          valor = Number(value.montos);
          montos.push(valor);
        });
        graficaPorTipoDeInvestigacio(estado,montos,year);
      }
    });
  }

  function datagraficoTipoDeViolencia(base_url,year) {
    $.ajax({
      url:"<?php echo base_url() ?>app/graficas/getDataTipoDeViolencia",
      type: "POST",
      data: { year : year},
      dataType: 'json',
      success:function(data){
        var catidad = new Array();

        $.each(data, function( index, value ) {

          catidad.push(value);
          //valor = Number(value.montos);
          //montos.push(valor);
        });
       graficaPorTipoDeViolencia(catidad,year);
      }
    });
  }
  function graficaPorTipoDeViolencia(catidad,year) {
    Highcharts.chart('graficaPorTipoDeViolencia', {
      chart: {
        type: 'column',
          spacingBottom: 15,
          spacingTop: 10,
          spacingLeft: 1,
          spacingRight: 1,
          options3d: {
            enabled: false,
            alpha: 10,
            beta: 25,
            depth: 70
          }

      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      credits: {
        text: '@sarkoceles',
        href: 'https://www.facebook.com/Sarkoceles/',
          enabled: true
      },
      xAxis: {
        categories: ['Violencia psicologica','Violencia fisica','Violencia Patrimonial','Violencia Economica','Violencia Sexual','Violencia en línea'],
      },
      yAxis: {
            title: {
                text: ' Número de casos registrados por motivo de la agresión'
            }
        },
      series: [{
          data: catidad,
          name: year,
          color: '#d0ff6e'
      }],
      exporting: {
        enabled: true,
        buttons: {
          contextButton: {
            menuItems: ['downloadJPEG','downloadSVG','downloadPNG','separator','downloadXLS'],
          }
        },
        width: 1800,
        filename: 'registrados_estados_del_año:_'+year,
      }
    });
  }

</script>
















<!--<div class="col-12 mt-5">
  <div class="card">
    <div class="card-body">
      <div class="single-table">
        <div class="table-responsive">
          <table class="table table-hover progress-table text-center">
            <thead class="text-uppercase">
              <tr>
                <th scope="col">Cargo</th>
                <th scope="col">Cantidad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">Violencia psicologica</td>
                <td scope="col"><?php echo $psicologica?></td>
              </tr>

              <tr>
                <td scope="col">Violencia fisica</td>
                <td scope="col"><?php echo $fisica?></td>
              </tr>


              <tr>
                <td scope="col">Violencia Patrimonial</td>
                <td scope="col"><?php echo $patrimonial?></td>
              </tr>
              <tr>
                <td scope="col">Violencia Economica</td>
                <td scope="col"><?php echo $economica?></td>
              </tr>
              <tr>
                <td scope="col">Violencia Sexual</td>
                <td scope="col"><?php echo $sexual?></td>
              </tr>
              <tr>
                <td scope="col">Violencia en línea</td>
                <td scope="col"><?php echo $cibernetica?></td>
              </tr>



              </tbody>
            </table>

        </div>
      </div>
    </div>
  </div>
</div>-->>
