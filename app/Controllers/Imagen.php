<?php namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ImagenModel;

class Imagen extends BaseController{

//--------------------------------------------------------------------

  // FUNCION MOSTRAR INDEX
  public function index(){

    $imagen = new ImagenModel();
    $datosImagenes = [
      //'imagenes' => $imagen->asObject()->findAll(10)
      'imagenes' => $imagen->asObject()->paginate(5 ),
      'pager' => $imagen->pager
    ];

    $this->_loadDefaultView('Listado de imágenes', $datosImagenes, 'index');
  }
  // FIN FUNCION MOSTRAR INDEX

//--------------------------------------------------------------------

  // FUNCION CREAR IMAGEN
  public function new(){

    $this->_loadDefaultView('Crear imágen', [], 'new');

  }
  // FIN FUNCION CREAR IMAGEN

//--------------------------------------------------------------------

// FUNCION CARGAR VISTA
  private function _loadDefaultView($title,$data,$view){

    $tituloHeader = [
      'titulo' => $title
    ];

    echo view("dashboard/templates/header", $tituloHeader);
    echo view("dashboard/imagen/$view", $data);
    echo view("dashboard/templates/footer");
  }
// FIN FUNCION CARGAR VISTA

//--------------------------------------------------------------------

  // FUNCION MOSTRAR DATOS DE LAS IMAGENES - prueba de concepto
  public function show($idImagen = null){

    $imagen = new ImagenModel();
    var_dump($imagen->getImage($idImagen));
  }
  // FIN FUNCION MOSTRAR DATOS DE LAS IMAGENES

//--------------------------------------------------------------------

  // FUNCION MOSTRAR CON ARREGLOS INDEX - prueba de concepto
  /*
  public function index(){

    $dataHeader = [
      'title' => 'Listado de imágenes'
    ];

    $data = [
      'imagenes' => array(0,1,2,3,4)
    ];

    echo view("dashboard/templates/header", $dataHeader);
    echo view("dashboard/imagen/index", $data);
    echo view("dashboard/templates/footer");
  }
  */
  // FIN FUNCION MOSTRAR CON ARREGLOS INDEX




}


