<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*
$route['periodistas.html'] = 'app/periodistas';
$route['periodista.html/(:any)'] = 'app/periodistas/info/$1';
$route['agrega_periodista.html'] = 'app/periodistas/add';
$route['edita_periodista.html/(:any)'] = 'app/periodistas/edit/$1';
$route['delete_periodista.html/(:any)'] = 'app/periodistas/delete/$1';

$route['registros.html'] = 'app/registros';
$route['agrega_registro.html/(:any)'] = 'app/registros/add/$1';
$route['edita_registro.html/(:any)'] = 'app/registros/edit/$1';

$route['edades.html'] = 'administrador/configuracion/edades';
$route['edades.html/(:any)'] = 'administrador/configuracion/editEdades/$1';
$route['delete_edades.html/(:any)'] = 'administrador/configuracion/delete_edades/$1';
$route['addEdades.html'] = 'administrador/configuracion/addEdades';

$route['vivienda.html'] = 'administrador/configuracion/vivienda';
$route['vivienda.html/(:any)'] = 'administrador/configuracion/editCasa/$1';
$route['delete_vivienda.html/(:any)'] = 'administrador/configuracion/delete_tipovivienda/$1';
$route['addVivienda.html'] = 'administrador/configuracion/addVivienda';


$route['civil.html'] = 'administrador/configuracion/civil';
$route['civil.html/(:any)'] = 'administrador/configuracion/editaEstadoCivil/$1';
$route['delete_civil.html/(:any)'] = 'administrador/configuracion/delete_civil/$1';
$route['addCivil.html'] = 'administrador/configuracion/addCivil';

$route['medio.html'] = 'administrador/configuracion/medio';
$route['medio.html/(:any)'] = 'administrador/configuracion/editaTipodemedio/$1';
$route['delete_medio.html/(:any)'] = 'administrador/configuracion/delete_medio/$1';
$route['addMedio.html'] = 'administrador/configuracion/addMedio';

$route['contrato.html'] = 'administrador/configuracion/contrato';
$route['contrato.html/(:any)'] = 'administrador/configuracion/editaTipodecontrato/$1';
$route['delete_contrato.html/(:any)'] = 'administrador/configuracion/delete_contrato/$1';
$route['addContrato.html'] = 'administrador/configuracion/addContrato';

$route['cargo.html'] = 'administrador/configuracion/cargo';
$route['cargo.html/(:any)'] = 'administrador/configuracion/delete_edades/$1';
$route['delete_cargo.html/(:any)'] = 'administrador/configuracion/delete_cargo/$1';
$route['addCargo.html'] = 'administrador/configuracion/addCargo';

$route['fuente.html'] = 'administrador/configuracion/fuente';
$route['fuente.html/(:any)'] = 'administrador/configuracion/editaTipodefuente/$1';
$route['delete_fuente.html/(:any)'] = 'administrador/configuracion/delete_fuente/$1';
$route['addFuente.html'] = 'administrador/configuracion/addFuente';

$route['motivo_agresion.html'] = 'administrador/configuracion/motivogresion';
$route['motivo_agresion.html/(:any)'] = 'administrador/configuracion/editaMotivogresion/$1';
$route['delete_motivo.html/(:any)'] = 'administrador/configuracion/delete_motivogresion/$1';
$route['addMotivo.html'] = 'administrador/configuracion/addMotivogresion';

$route['investigacion.html'] = 'administrador/configuracion/tipodeinvestigacion';
$route['investigacion.html/(:any)'] = 'administrador/configuracion/editaTipodeinvestigacion/$1';
$route['delete_investigacion.html/(:any)'] = 'administrador/configuracion/delete_tipodeinvestigacion/$1';
$route['addInvestigacion.html'] = 'administrador/configuracion/addTipodeinvestigacion';

$route['perfil.html'] = 'administrador/configuracion/perfilbajo';
$route['perfil.html/(:any)'] = 'administrador/configuracion/editaPerfilbajo/$1';
$route['delete_perfil.html/(:any)'] = 'administrador/configuracion/delete_perfilbajo/$1';
$route['addPerfil.html'] = 'administrador/configuracion/addPerfilbajo';

$route['judicializacion.html'] = 'administrador/configuracion/judicializacion';
$route['judicializacion.html/(:any)'] = 'administrador/configuracion/editaJudicializacion/$1';
$route['delete_judicializacion.html/(:any)'] = 'administrador/configuracion/delete_judicializacion/$1';
$route['addJudicializacion.html'] = 'administrador/configuracion/addJudicializacion';

$route['manifestacion.html'] = 'administrador/configuracion/manifestacion';
$route['manifestacion.html/(:any)'] = 'administrador/configuracion/editaManifestacion/$1';
$route['delete_manifestacion.html/(:any)'] = 'administrador/configuracion/delete_manifestacion/$1';
$route['addManifestacion.html'] = 'administrador/configuracion/addManifestacion';

$route['tipoagresor.html'] = 'administrador/configuracion/tipoagresor';
$route['tipoagresor.html/(:any)'] = 'administrador/configuracion/editaTipoagresor/$1';
$route['delete_tipoagresor.html/(:any)'] = 'administrador/configuracion/delete_tipoagresor/$1';
$route['addTipoagresor.html'] = 'administrador/configuracion/addTipoagresor';

$route['nivel1.html'] = 'administrador/configuracion/tipoagresor_nivel1';
$route['nivel1.html/(:any)'] = 'administrador/configuracion/editaNivel1/$1';
$route['delete_nivel1.html/(:any)'] = 'administrador/configuracion/delete_nivel1/$1';
$route['addNivel1.html'] = 'administrador/configuracion/addItem1';

$route['nivel2.html'] = 'administrador/configuracion/tipoagresor_nivel2';
$route['nivel2.html/(:any)'] = 'administrador/configuracion/editaNivel2/$1';
$route['delete_nivel2.html/(:any)'] = 'administrador/configuracion/delete_item2/$1';
$route['addNivel2.html'] = 'administrador/configuracion/addItem2';
*/
