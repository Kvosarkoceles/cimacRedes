<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cimac - Redes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets/images/icon/favicon.ico">
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

<script type="text/javascript">
    $(document).ready(function(){
      //aregla caja de texto nombre
      $('#nombres').on('blur', function(){
        var value=$('#nombres').val().toUpperCase();
        $("#nombres").val(value);
      });
      $('#nombres').blur(function(){
        var value=$.trim($('#nombres').val());
        $("#nombres").val(value);
      });
      $('#nombres').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#nombres').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
      //aregla caja de texto apellidoPaterno
      $('#apellidoPaterno').on('blur', function(){
        var value=$('#apellidoPaterno').val().toUpperCase();
        $("#apellidoPaterno").val(value);
      });
      $('#apellidoPaterno').blur(function(){
        var value=$.trim($('#apellidoPaterno').val());
        $("#apellidoPaterno").val(value);
      });
      $('#apellidoPaterno').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#apellidoPaterno').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
      //aregla caja de texto apellidoMaterno
      $('#apellidoMaterno').on('blur', function(){
        var value=$('#apellidoMaterno').val().toUpperCase();
        $("#apellidoMaterno").val(value);
      });
      $('#apellidoMaterno').blur(function(){
        var value=$.trim($('#apellidoMaterno').val());
        $("#apellidoMaterno").val(value);
      });
      $('#apellidoMaterno').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#apellidoMaterno').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
        //arrgela caja de texto municipio
      $('#municipio').blur(function(){
        var value=$.trim($('#municipio').val());
        $("#municipio").val(value);
      });
      $('#municipio').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#municipio').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
       //arrgela caja de texto localidad
      $('#localidad').blur(function(){
        var value=$.trim($('#localidad').val());
        $("#localidad").val(value);
      });
      $('#localidad').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#localidad').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
      //arrgela caja de texto viveCon
      $('#viveCon').on('blur', function(){
        var value=$('#viveCon').val().toLowerCase();
        $("#viveCon").val(value);
      });
      $('#viveCon').blur(function(){
        var value=$.trim($('#viveCon').val());
        $("#viveCon").val(value);
      });
      $('#viveCon').focus(function(){
        $(this).css("background-color", "#EFF3F6");
      });
      $('#viveCon').blur(function(){
        $(this).css("background-color", "#ffffff");
      });
     //arrgela caja de texto dependientesEconomicos
     $('#dependientesEconomicos').on('blur', function(){
       var value=$('#dependientesEconomicos').val().toLowerCase();
       $("#dependientesEconomicos").val(value);
     });
     $('#dependientesEconomicos').blur(function(){
       var value=$.trim($('#dependientesEconomicos').val());
       $("#dependientesEconomicos").val(value);
     });
     $('#dependientesEconomicos').focus(function(){
       $(this).css("background-color", "#EFF3F6");
     });
     $('#dependientesEconomicos').blur(function(){
       $(this).css("background-color", "#ffffff");
     });
    //arrgela caja de texto hijos
    $('#hijos').on('input', function () {
      this.value = this.value.replace(/[^0-9]/g,'');
    });
    $('#hijos').focus(function(){
      $(this).css("background-color", "#EFF3F6");
    });
    $('#hijos').blur(function(){
      $(this).css("background-color", "#ffffff");
    });
   //arrgela caja de texto telefonoparticular
    $('#telefonoparticular').on('input', function () {
      this.value = this.value.replace(/[^0-9-]/g,'');
    });
    $('#telefonoparticular').focus(function(){
      $(this).css("background-color", "#EFF3F6");
    });
    $('#telefonoparticular').blur(function(){
      $(this).css("background-color", "#ffffff");
    });
  //arrgela caja de texto telefonocelular
    $('#telefonocelular').on('input', function () {
      this.value = this.value.replace(/[^0-9-]/g,'');
    });
    $('#telefonocelular').focus(function(){
      $(this).css("background-color", "#EFF3F6");
    });
    $('#telefonocelular').blur(function(){
      $(this).css("background-color", "#ffffff");
    });
    //arrgela caja de texto dependientesEconomicos
    $('#email').on('blur', function(){
      var value=$('#email').val().toLowerCase();
      $("#email").val(value);
    });
    $('#email').blur(function(){
      var value=$.trim($('#email').val());
      $("#email").val(value);
    });
    $('#email').focus(function(){
      $(this).css("background-color", "#EFF3F6");
    });
    $('#email').blur(function(){
      $(this).css("background-color", "#ffffff");
    });
    //arrgela caja de texto telegram
    $('#telegram').blur(function(){
      var value=$.trim($('#telegram').val());
      $("#telegram").val(value);
    });
    $('#telegram').focus(function(){
      $(this).css("background-color", "#EFF3F6");
    });
    $('#telegram').blur(function(){
      $(this).css("background-color", "#ffffff");
    });
//arrgela caja de texto skype
  $('#skype').blur(function(){
    var value=$.trim($('#skype').val());
    $("#skype").val(value);
  });
  $('#skype').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#skype').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
//arrgela caja de texto facebook
  $('#facebook').blur(function(){
    var value=$.trim($('#facebook').val());
    $("#facebook").val(value);
  });
  $('#facebook').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#facebook').blur(function(){
    $(this).css("background-color", "#ffffff");
  });

  //arrgela caja de texto twitter
  $('#twitter').blur(function(){
    var value=$.trim($('#twitter').val());
    $("#twitter").val(value);
  });
  $('#twitter').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#twitter').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto instagram
  $('#instagram').blur(function(){
    var value=$.trim($('#instagram').val());
    $("#instagram").val(value);
  });
  $('#instagram').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#instagram').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto youtube
  $('#youtube').blur(function(){
    var value=$.trim($('#youtube').val());
    $("#youtube").val(value);
  });
  $('#youtube').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#youtube').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto snapchat
  $('#snapchat').blur(function(){
    var value=$.trim($('#snapchat').val());
    $("#snapchat").val(value);
  });
  $('#snapchat').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#snapchat').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto otraredsocial
  $('#otraredsocial').blur(function(){
    var value=$.trim($('#otraredsocial').val());
    $("#otraredsocial").val(value);
  });
  $('#otraredsocial').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#otraredsocial').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto nombreDelMedio
  $('#nombreDelMedio').blur(function(){
    var value=$.trim($('#nombreDelMedio').val());
    $("#nombreDelMedio").val(value);
  });
  $('#nombreDelMedio').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#nombreDelMedio').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto paracuantosmedioslabora
  $('#paracuantosmedioslabora').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g,'');
  });
  $('#paracuantosmedioslabora').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#paracuantosmedioslabora').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto direcciondelmedio
  $('#direcciondelmedio').blur(function(){
    var value=$.trim($('#direcciondelmedio').val());
    $("#direcciondelmedio").val(value);
  });
  $('#direcciondelmedio').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#direcciondelmedio').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto Link1
  $('#Link1').blur(function(){
    var value=$.trim($('#Link1').val());
    $("#Link1").val(value);
  });
  $('#Link1').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#Link1').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto Link2
  $('#Link2').blur(function(){
    var value=$.trim($('#Link2').val());
    $("#Link2").val(value);
  });
  $('#Link2').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#Link2').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto Link3
  $('#Link3').blur(function(){
    var value=$.trim($('#Link3').val());
    $("#Link3").val(value);
  });
  $('#Link3').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#Link3').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto Link4
  $('#Link4').blur(function(){
    var value=$.trim($('#Link4').val());
    $("#Link4").val(value);
  });
  $('#Link4').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#Link4').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto Link5
  $('#Link5').blur(function(){
    var value=$.trim($('#Link5').val());
    $("#Link5").val(value);
  });
  $('#Link5').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#Link5').blur(function(){
    $(this).css("background-color", "#ffffff");
  });
  //arrgela caja de texto AnosDeEjercerElPeriodismo
  $('#AnosDeEjercerElPeriodismo').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g,'');
  });
  $('#AnosDeEjercerElPeriodismo').focus(function(){
    $(this).css("background-color", "#EFF3F6");
  });
  $('#AnosDeEjercerElPeriodismo').blur(function(){
    $(this).css("background-color", "#ffffff");
  });

});
</script>

  <!--  <script>
      $(document).ready(function(){
        $('#province').click(
          function(){
            var id_tipoAgresor = $('#tipoagresor').val();
            if(id_tipoAgresor == '')
            {
                $('#province').click('disabled', true);
            }
            else
            {
                $('#province').prop('disabled', false);
                $.ajax({
                    url:"<?php echo base_url() ?>administrador/configuracion/get_nivel1",
                    type: "POST",
                    data: {'id_tipoAgresor' : id_tipoAgresor},
                    dataType: 'json',
                    success: function(data){
                       $('#province').html(data);
                    },
                    error: function(){
                      $('#province').html('');
                      $('#province').append('<option value="" selected="selected">Sin información</option>');


                      $('#province').prop('disabled', true);
                    //    alert('Error occur...!!');
                    }
                });
            }
          }
        );
      }
    );
  </script>-->
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
