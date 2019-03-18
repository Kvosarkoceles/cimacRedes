<div class="col-lg-12 mt-5">
  <div class="card">
    <div class="card-body">
      <h3 class="header-title">Informe anual</h3>


      <div class="col-lg-12 mt-5">
        <div class="box-tools pull-left">
           <select class="form-control" name="year" id="year">
              <?php foreach($años as $año):?>
                  <option value="<?php echo $año->year;?>"><?php echo $año->year;?></option>
              <?php endforeach;?>
           </select>
        </div>
      </div>
      <div class="col-lg-12  mt-5">
        <div id="container" style="height: 400px; width: 100%"></div>
      </div>
      <div class="col-lg-12  mt-5">
        <!-- table light start -->
      <!--   <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Thead light</h4>
                    <div class="single-table">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-uppercase bg-light">
                                    <tr>
                                        <th scope="col">mes</th>
                                        <th scope="col">montos</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  <?php if(!empty($informe)):?>
                                       <?php foreach($informe as $info):?>
                                    <tr>

                                        <td><?php echo $info->mes;?></td>
                                        <td><?php echo $info->montos;?></td>
                                    </tr>
                                  <?php endforeach;?>
                              <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->



        <!-- table light end -->
      </div>


      </div>
  </div>
</div>


<script type="text/javascript">
$( document ).ready(function() {
  var base_url= "<?php echo base_url();?>";
  var año =(new Date).getFullYear();
  datagrafico(base_url, año);
  $("#year").on("change",function(){
    yearselect = $(this).val();
    datagrafico(base_url,yearselect);
  });
});
  function grafico(meses,montos,año) {
    Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Casos de violencia contra mujeres periodistas'
      },
      subtitle: {
            text: 'Fuente: Elaboración propia con datos del Programa de Libertad de Expresión y Género de CIMAC'
        },
      xAxis: {
        categories: meses,
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: {
          text: 'Casos registrados'
        }
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1} periodista</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
      },
      series: [{
        name: año,
        data: montos
      }]
    });
  }
  function datagrafico(base_url,year) {
    namesMonth= ["Enero","Febrero","Marzo","Abr","May","Jun","Jul","Ago","Set","Oct","Nov","Dic"];
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
</script>
