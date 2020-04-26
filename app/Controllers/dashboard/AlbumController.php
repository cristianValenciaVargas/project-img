<?php namespace App\Controllers\dashboard;

use App\Models\AlbumModel;
use App\Controllers\BaseController;

class AlbumController extends BaseController{

/*   public function index(){
    echo "Controlador Album";
  } */

  // FUNCION MOSTRAR DATOS DEL ALBUM
  public function showAlbums(){

    $album = new AlbumModel();
    var_dump($album->getAlbum(7)->idAlbum);
  }
  // FIN FUNCION MOSTRAR DATOS DEL ALBUM

}


