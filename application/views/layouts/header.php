<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cimac - Redes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/icon/favicon.ico">


      <script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
        <script src="<?php echo base_url();?>assets/js/exporting.js"></script>
        <script src="<?php echo base_url();?>assets/js/export-data.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- others css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">

    <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/items.js"></script>
    <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/validaciones.js"></script>
  <script src="<?php echo base_url() ?>assets/js/registros.js"></script>

    <!--<script type="text/javascript">
            $(document).ready(function(){
             $('#tipoagresor').on('change', function(){
                  var country_id = $(this).val();
                  if(country_id == '')
                  {
                      $('#nivel1').prop('disabled', true);
                  }
                  else
                  {
                      $('#nivel1').prop('disabled', false);
                      $.ajax({
                          url:"<?php echo base_url() ?>administrador/configuracion/get_nivel1",
                          type: "POST",
                          data: {'id_tipoAgresor' : id_tipoAgresor},
                          dataType: 'json',
                          success: function(data){
                             $('#nivel1').html(data);
                          },
                          error: function(){
                            $('#nivel1').html('');
                            $('#nivel1').append('<option value="" selected="selected">Sin información</option>');
                            $('#nivel1').prop('disabled', true);
                          }
                      });
                  }
             });
          });
      </script>
-->

    <script type="text/javascript">
      $(document).ready(function(){
         $('#tipoagresor').on('change', function(){
              var id_tipoAgresor = $(this).val();
              if(id_tipoAgresor == '')
              {
                //  $('#nivel1').prop('disabled', true);
                  //$('#nivel2').prop('disabled', true);
                  $('#nivel2').html('');
                  $('#nivel2').append('<option value="1" selected="selected">Sin información</option>');
                  $('#nivel1').html('');
                  $('#nivel1').append('<option value="1" selected="selected">Sin información</option>');
              }
              else
              {

                  //  $('#nivel1').prop('disabled', false);
                  $('#nivel2').html('');
                  $('#nivel2').append('<option value="1" selected="selected">Sin información</option>');
                  //  $('#nivel2').prop('disabled', true);
                  $.ajax({
                      url:"<?php echo base_url() ?>administrador/configuracion/get_nivel1",
                      type: "POST",
                      data: {'id_tipoAgresor' : id_tipoAgresor},
                      dataType: 'json',
                      success: function(data){
                         $('#nivel1').html(data);
                      },
                      error: function(){
                        $('#nivel1').html('');
                        $('#nivel1').append('<option value="1" selected="selected">Sin información</option>');
                      //    $('#nivel1').prop('disabled', true);
                        $('#nivel2').html('');
                        $('#nivel2').append('<option value="1" selected="selected">Sin información</option>');
                          //$('#nivel2').prop('disabled', true);
                      //    alert('Error occur...!!');
                      }
                  });
              }
         });
      });

    </script>



    <script type="text/javascript">
      $(document).ready(function(){
         $('#nivel1').on('change', function(){
              var id_nivel1 = $(this).val();
              if(id_nivel1 == '')
              {
                    //$('#nivel2').prop('disabled', true);
                  $('#nivel2').html('');
                  $('#nivel2').append('<option value="1" selected="selected">Sin información</option>');

              }
              else
              {

                  $('#nivel2').prop('disabled', false);
                  $.ajax({
                      url:"<?php echo base_url() ?>administrador/configuracion/get_nivel2",
                      type: "POST",
                      data: {'id_nivel1' : id_nivel1},
                      dataType: 'json',
                      success: function(data){
                         $('#nivel2').html(data);
                      },
                      error: function(){
                        $('#nivel2').html('');
                        $('#nivel2').append('<option value="1" selected="selected">Sin información</option>');
                        //  $('#nivel2').prop('disabled', true);
                      //    alert('Error occur...!!');
                      }
                  });
              }
         });
      });

    </script>


<!--    <script type="text/javascript">
       $(document).ready(function(){
          $('#tipoagresor').on('change', function(){
               var id_tipoAgresor = $(this).val();
               if(id_tipoAgresor == '')
               {
                   $('#nivel1').prop('disabled', true);
               }
               else
               {
                   $('#nivel1').prop('disabled', false);
                   $.ajax({
                       url:"<?php echo base_url() ?>administrador/configuracion/get_nivel1",
                       type: "POST",
                       data: {'id_tipoAgresor' : id_tipoAgresor},
                       dataType: 'json',
                       success: function(data){
                          $('#nivel1').html(data);
                       },
                       error: function(){
                         $('#nivel1').html('');
                         $('#nivel1').append('<option value="" selected="selected">Sin información</option>');
                         $('#nivel1').prop('disabled', true);
                       //    alert('Error occur...!!');
                       }
                   });
               }
          });
       });
   </script>-->

</head>

<body>
