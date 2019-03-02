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
      //aregla caja de texto apellidoPaterno
      $('#apellidoPaterno').on('blur', function(){
        var value=$('#apellidoPaterno').val().toUpperCase();
        $("#apellidoPaterno").val(value);
      });
      $('#apellidoPaterno').blur(function(){
        var value=$.trim($('#apellidoPaterno').val());
        $("#apellidoPaterno").val(value);
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
      //arrgela caja de texto municipio
      $('#municipio').blur(function(){
      var value=$.trim($('#municipio').val());
      $("#municipio").val(value);
    });
      //arrgela caja de texto localidad
      $('#localidad').blur(function(){
      var value=$.trim($('#localidad').val());
      $("#localidad").val(value);
    });
      //arrgela caja de texto viveCon
      $('#viveCon').blur(function(){
      var value=$.trim($('#viveCon').val());
      $("#viveCon").val(value);
    });
      //arrgela caja de texto dependientesEconomicos
      $('#dependientesEconomicos').blur(function(){
        var value=$.trim($('#dependientesEconomicos').val());
        $("#dependientesEconomicos").val(value);
      });
      //arrgela caja de texto hijos
      $('#hijos').on('input',function(){
        this.value = this.value.replace(/[^0-9]/g,'');
      });
      //Cajas de texto Informacion Personal
      $('#nombres,#apellidoPaterno,#apellidoMaterno,#municipio,#localidad,#viveCon,#dependientesEconomicos,#hijos').focus(function(){
          $(this).css("border", "3px solid #A296A6")
          $(this).css("background-color", "#a296a62e");
      });
      $('#nombres,#apellidoPaterno,#apellidoMaterno,#municipio,#localidad,#viveCon,#dependientesEconomicos,#hijos').blur(function(){
          $(this).css("border", "1px solid #A296A6")
          $(this).css("background-color", "#ffffff");
      });
      //selectores Informacion Personal
      $('#edad,#estado,#tiposdecasa,#edad').focus(function(){
          $(this).css("border", "3px solid #A296A6")
          $(this).css("background-color", "#a296a62e");
      });
      $('#edad,#estado,#tiposdecasa,#edad').blur(function(){
          $(this).css("border", "1px solid #A296A6")
          $(this).css("background-color", "#ffffff");
      });


      //Cajas de texto Informacion de contacto
      $('#telefonoparticular,#telefonocelular,#email,#telegram,#skype,#facebook,#twitter,#instagram,#youtube,#snapchat,#otraredsocial').focus(function(){
          $(this).css("border", "3px solid #A296A6")
          $(this).css("background-color", "#a296a62e");
      });
      $('#telefonoparticular,#telefonocelular,#email,#telegram,#skype,#facebook,#twitter,#instagram,#youtube,#snapchat,#otraredsocial').blur(function(){
          $(this).css("border", "1px solid #A296A6")
          $(this).css("background-color", "#ffffff");
      });
     //arrgela caja de texto telefonoparticular
     $('#telefonoparticular').on('input', function () {
       this.value = this.value.replace(/[^0-9- +]/g,'');
     });
     $('#telefonoparticular').blur(function(){
       var value=$.trim($('#telefonoparticular').val());
       $("#telefonoparticular").val(value);
     });
     //arrgela caja de texto telefonocelular
     $('#telefonocelular').on('input', function () {
       this.value = this.value.replace(/[^0-9- +]/g,'');
     });
     $('#telefonocelular').blur(function(){
       var value=$.trim($('#telefonocelular').val());
       $("#telefonocelular").val(value);
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
     //arrgela caja de texto telegram
     $('#telegram').blur(function(){
       var value=$.trim($('#telegram').val());
       $("#telegram").val(value);
     });
     //arrgela caja de texto skype
     $('#skype').blur(function(){
       var value=$.trim($('#skype').val());
       $("#skype").val(value);
     });
     //arrgela caja de texto facebook
     $('#facebook').blur(function(){
       var value=$.trim($('#facebook').val());
       $("#facebook").val(value);
     });
     //arrgela caja de texto twitter
     $('#twitter').blur(function(){
       var value=$.trim($('#twitter').val());
       $("#twitter").val(value);
     });
     //arrgela caja de texto instagram
     $('#instagram').blur(function(){
       var value=$.trim($('#instagram').val());
       $("#instagram").val(value);
     });
     //arrgela caja de texto youtube
     $('#youtube').blur(function(){
       var value=$.trim($('#youtube').val());
       $("#youtube").val(value);
     });
     //arrgela caja de texto snapchat
     $('#snapchat').blur(function(){
       var value=$.trim($('#snapchat').val());
       $("#snapchat").val(value);
     });
     //arrgela caja de texto otraredsocial
     $('#otraredsocial').blur(function(){
       var value=$.trim($('#otraredsocial').val());
       $("#otraredsocial").val(value);
     });
     //Cajas de texto Informacion Laboral
     $('#nombreDelMedio,#paracuantosmedioslabora,#direcciondelmedio,#Link1,#Link2,#Link3,#Link4,#Link5,#AnosDeEjercerElPeriodismo').focus(function(){
         $(this).css("border", "3px solid #A296A6")
         $(this).css("background-color", "#a296a62e");
     });
     $('#nombreDelMedio,#paracuantosmedioslabora,#direcciondelmedio,#Link1,#Link2,#Link3,#Link4,#Link5,#AnosDeEjercerElPeriodismo').blur(function(){
         $(this).css("border", "1px solid #A296A6")
         $(this).css("background-color", "#ffffff");
     });
     //selectores Informacion Laboral
     $('#tipodemedio,#tipodecontrato,#cargoenelmedio,#fuente,#sexodeljefeinmediato').focus(function(){
         $(this).css("border", "3px solid #A296A6")
         $(this).css("background-color", "#a296a62e");
     });
     $('#tipodemedio,#tipodecontrato,#cargoenelmedio,#fuente,#sexodeljefeinmediato').blur(function(){
         $(this).css("border", "1px solid #A296A6")
         $(this).css("background-color", "#ffffff");
     });
     //arrgela caja de texto nombreDelMedio
     $('#nombreDelMedio').blur(function(){
       var value=$.trim($('#nombreDelMedio').val());
       $("#nombreDelMedio").val(value);
     });
     //arrgela caja de texto paracuantosmedioslabora
     $('#paracuantosmedioslabora').on('input', function () {
       this.value = this.value.replace(/[^0-9]/g,'');
     });
     //arrgela caja de texto direcciondelmedio
     $('#direcciondelmedio').blur(function(){
       var value=$.trim($('#direcciondelmedio').val());
       $("#direcciondelmedio").val(value);
     });
     //arrgela caja de texto Link1
     $('#Link1').blur(function(){
       var value=$.trim($('#Link1').val());
       $("#Link1").val(value);
     });
     //arrgela caja de texto Link2
     $('#Link2').blur(function(){
       var value=$.trim($('#Link2').val());
       $("#Link2").val(value);
     });
     //arrgela caja de texto Link3
     $('#Link3').blur(function(){
       var value=$.trim($('#Link3').val());
       $("#Link3").val(value);
     });
     //arrgela caja de texto Link4
     $('#Link4').blur(function(){
       var value=$.trim($('#Link4').val());
       $("#Link4").val(value);
     });
     //arrgela caja de texto Link5
     $('#Link5').blur(function(){
       var value=$.trim($('#Link5').val());
       $("#Link5").val(value);
     });
     //arrgela caja de texto AnosDeEjercerElPeriodismo
     $('#AnosDeEjercerElPeriodismo').on('input', function () {
       this.value = this.value.replace(/[^0-9]/g,'');
     });




     //arrgela caja de texto latitud
     $('#latitud').on('input', function () {
       this.value = this.value.replace(/[^0-9-.]/g,'');
     });
     //arrgela caja de texto longitud
     $('#').on('input', function () {
       this.value = this.value.replace(/[^0-9-.]/g,'');
     });
     //arrgela caja de texto relatoriaDelHecho
     $('#relatoriaDelHecho').blur(function(){
       var value=$.trim($('#relatoriaDelHecho').val());
       $("#relatoriaDelHecho").val(value);
     });

     //aregla caja de texto nombreagresor
     $('#nombreagresor').on('blur', function(){
       var value=$('#nombreagresor').val().toUpperCase();
       $("#nombreagresor").val(value);
     });
     $('#nombreagresor').blur(function(){
       var value=$.trim($('#nombreagresor').val());
       $("#nombreagresor").val(value);
     });
     //aregla caja de texto analisisDeContexto
     $('#analisisDeContexto').blur(function(){
       var value=$.trim($('#analisisDeContexto').val());
       $("#analisisDeContexto").val(value);
     });
     //aregla caja de texto analisisDeRiesgo
     $('#analisisDeRiesgo').blur(function(){
       var value=$.trim($('#analisisDeRiesgo').val());
       $("#analisisDeRiesgo").val(value);
     });
     //aregla caja de texto observaciones
     $('#observaciones').blur(function(){
       var value=$.trim($('#observaciones').val());
       $("#observaciones").val(value);
     });
     //Cajas de texto Informacion Laboral
     $('#fechaIncidente,#latitud,#longitud,#relatoriaDelHecho,#nombreagresor,#analisisDeContexto,#analisisDeRiesgo,#observaciones,#observacionesmanifestacion,#queOtraOrganizacionLasAcompana').focus(function(){
         $(this).css("border", "3px solid #A296A6")
         $(this).css("background-color", "#a296a62e");
     });
     $('#fechaIncidente,#latitud,#longitud,#relatoriaDelHecho,#nombreagresor,#analisisDeContexto,#analisisDeRiesgo,#observaciones,#observacionesmanifestacion,#queOtraOrganizacionLasAcompana').blur(function(){
         $(this).css("border", "1px solid #A296A6")
         $(this).css("background-color", "#ffffff");
     });
     //selectores Agresion
     $('#motivodelasgresion,#tipoDeInvestigacion,#sexoAgresor,#tipoagresor,#nivel1,#nivel2').focus(function(){
         $(this).css("border", "3px solid #A296A6")
         $(this).css("background-color", "#a296a62e");
     });
     $('#motivodelasgresion,#tipoDeInvestigacion,#sexoAgresor,#tipoagresor,#nivel1,#nivel2').blur(function(){
         $(this).css("border", "1px solid #A296A6")
         $(this).css("background-color", "#ffffff");
     });

     //selectores Tipo de violencia
     $('#tipoDeViolenciaPsicologica,#tipodeViolenciaFisica,#tipoDeViolenciaPatrimonial,#tipodeViolenciaEconomica,#tipoDeViolenciaSexual,#tipoDeViolenciaCibernetica').focus(function(){
         $(this).css("border", "3px solid #A296A6")
         $(this).css("background-color", "#a296a62e");
     });
     $('#tipoDeViolenciaPsicologica,#tipodeViolenciaFisica,#tipoDeViolenciaPatrimonial,#tipodeViolenciaEconomica,#tipoDeViolenciaSexual,#tipoDeViolenciaCibernetica').blur(function(){
         $(this).css("border", "1px solid #A296A6")
         $(this).css("background-color", "#ffffff");
     });

     //selectores Tipo de violencia
     $('#modalidadViolenciaFamiliar,#modalidadViolenciaLaboral,#modalidadViolenciaEnLaComunidad,#modalidadViolenciaInstitucional,#modalidadViolenciaFeminicida,#modalidadDeViolenciaCibernetica').focus(function(){
         $(this).css("border", "3px solid #A296A6");
         $(this).css("background-color", "#a296a62e");
     });
     $('#modalidadViolenciaFamiliar,#modalidadViolenciaLaboral,#modalidadViolenciaEnLaComunidad,#modalidadViolenciaInstitucional,#modalidadViolenciaFeminicida,#modalidadDeViolenciaCibernetica').blur(function(){
         $(this).css("border", "1px solid #A296A6");
         $(this).css("background-color", "#ffffff");
     });

     //Cambia de color el menu tipodemanifestacion al seleccionar
     $('#tipodemanifestacion').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#tipodemanifestacion').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });

     //aregla caja de texto observacionesmanifestacion
     $('#observacionesmanifestacion').blur(function(){
       var value=$.trim($('#observacionesmanifestacion').val());
       $("#observacionesmanifestacion").val(value);
     });
     $('#observacionesmanifestacion').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#observacionesmanifestacion').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });

     //Cambia de color el menu consecuencias al seleccionar
     $('#consecuenciaFueDespedida,#consecuenciasBajoPerfil,#consecuenciasDesplazamiento,#Judicializacion').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#consecuenciaFueDespedida,#consecuenciasBajoPerfil,#consecuenciasDesplazamiento,#Judicializacion').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });




     //Cambia de color lod menus atencion recibida por cimac al seleccionar
     $('#cimacHaceAcompanamientoAnteElMecanismo,#atencionMedicaRecibida,#atencionPsicologicaRecibida,#atencionJuridicaRecibida,#ningunaAtencionRecibida').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#cimacHaceAcompanamientoAnteElMecanismo,#atencionMedicaRecibida,#atencionPsicologicaRecibida,#atencionJuridicaRecibida,#ningunaAtencionRecibida').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });
     //aregla caja de texto queOtraOrganizacionLasAcompana
     $('#queOtraOrganizacionLasAcompana').blur(function(){
       var value=$.trim($('#queOtraOrganizacionLasAcompana').val());
       $("#queOtraOrganizacionLasAcompana").val(value);
     });
     $('#queOtraOrganizacionLasAcompana').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#queOtraOrganizacionLasAcompana').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });

     //Cambia de color lod menus atencion recibida por cimac al seleccionar
     $('#beneficiariaDelMecanismoDeProtecion,#carpetaDeInvestigacionEnAlgunaProcuraduria,#quejaAnteComisionDeDerechosHumanos,#renavi,#estasDeAcuedoConElMecanismoDeProteccion,#estasDeAcuedoConElMecanismoDeProteccion,#esasMedidasTePermitenSeguirHaciendoTuTrabajo,#tenidoResultadosLaCarpetaDeInvestigacion').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#beneficiariaDelMecanismoDeProtecion,#carpetaDeInvestigacionEnAlgunaProcuraduria,#quejaAnteComisionDeDerechosHumanos,#renavi,#estasDeAcuedoConElMecanismoDeProteccion,#estasDeAcuedoConElMecanismoDeProteccion,#esasMedidasTePermitenSeguirHaciendoTuTrabajo,#tenidoResultadosLaCarpetaDeInvestigacion').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });
     $('#norenavi,#porQue,#cuales,#queAHechoLaComisionDeDerechosHumanos').focus(function(){
       $(this).css("border", "3px solid #A296A6");
       $(this).css("background-color", "#a296a62e");
     });
     $('#norenavi,#porQue,#cuales,#queAHechoLaComisionDeDerechosHumanos').blur(function(){
       $(this).css("border", "1px solid #A296A6");
       $(this).css("background-color", "#ffffff");
     });
     //aregla caja de texto norenavi
     $('#norenavi').blur(function(){
       var value=$.trim($('#norenavi').val());
       $("#norenavi").val(value);
     });
     //aregla caja de texto norenavi
     $('#porQue').blur(function(){
       var value=$.trim($('#porQue').val());
       $("#porQue").val(value);
     });
     //aregla caja de texto cuales
     $('#cuales').blur(function(){
       var value=$.trim($('#cuales').val());
       $("#cuales").val(value);
     });

     //aregla caja de texto queAHechoLaComisionDeDerechosHumanos
     $('#queAHechoLaComisionDeDerechosHumanos').blur(function(){
       var value=$.trim($('#queAHechoLaComisionDeDerechosHumanos').val());
       $("#queAHechoLaComisionDeDerechosHumanos").val(value);
     });

});
