<div class="col-lg-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h1 class="header-title">Informe anual</h1>
      <div class="form-row align-items-center">
          <div class="col-lg-12 mt-5">
            <div class="pull-right">
               <select class="form-control" name="year" id="year">
                  <?php foreach($años as $año):?>
                      <option value="<?php echo $año->year;?>"><?php echo $año->year;?></option>
                  <?php endforeach;?>
               </select>
            </div>
          </div>
          <div class="col-lg-6  mt-5">
            <div id="graficaPorAño" style="height: 500px; width: 100%"></div>
          </div>
          <div class="col-lg-6  mt-5">
            <div id="graficaPorEstado" style="height: 500px; width: 100%"></div>
          </div>
          <!--<div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Imagenes</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                      <thead class="text-uppercase">
                        <tr>
                          <th scope="col">Estados</th>
                          <th scope="col">Montos</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php if(!empty($informe)):?>
                          <?php foreach($informe as $info):?>
                            <tr>
                              <td scope="col"><?php echo $info->estado?></td>
                              <td scope="col"><?php echo $info->montos?></td>
                            <?php endforeach;?>
                          <?php endif;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>-->
          <div class="col-lg-6  mt-5">
            <div id="graficaPorEdades" style="height: 500px; width: 100%"></div>
          </div>
          <div class="col-lg-6  mt-5">
            <div id="graficaTipodeMedio" style="height: 500px; width: 100%"></div>
          </div>
        </div>
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
//  graficoEstados();
  $("#year").on("change",function(){
    yearselect = $(this).val();
    datagrafico(base_url,yearselect);
    datagraficoEstados(base_url,yearselect);
    datagraficoEdades(base_url,yearselect);
    datagraficoTipodeMedio(base_url,yearselect);
  });
});
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
                  text: ' Número de casos registrados por año'
              }
          },
        series: [{
            data: montos,
            name: año,
            color: '#7f00ff'
        }],
        exporting: {
           enabled: false,

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
        enabled: false,
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
        enabled: false,
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
          color: '#00ff01'
      }],
      exporting: {
        enabled: false,
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
</script>
