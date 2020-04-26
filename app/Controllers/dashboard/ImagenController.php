<?php namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\Models\ImagenModel;

class ImagenController extends BaseController{

//--------------------------------------------------------------------

  // FUNCION MOSTRAR CON ARREGLOS INDEX
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

//--------------------------------------------------------------------

    // FUNCION MOSTRAR INDEX
  public function index(){

    $imagen = new ImagenModel();

    $tituloHeader = [
      'titulo' => 'Listado de imágenes'
    ];

    $datosImagenes = [
      //'imagenes' => $imagen->asObject()->findAll(10)
      'imagenes' => $imagen->asObject()->paginate(5 ),
      'pager' => $imagen->pager

    ];

    echo view("dashboard/templates/header", $tituloHeader);
    echo view("dashboard/imagen/index", $datosImagenes);
    echo view("dashboard/templates/footer");
  }
  // FIN FUNCION MOSTRAR INDEX

//--------------------------------------------------------------------

  // FUNCION MOSTRAR DATOS DE LA IMAGEN
  public function showImages(){

    $imagen = new ImagenModel();
    var_dump($imagen->getImage(7)->idImagen);
  }
  // FIN FUNCION MOSTRAR DATOS DE LA IMAGEN






}


