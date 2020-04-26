<?php namespace App\Models;

use CodeIgniter\Model;

    class ImagenModel extends Model
    {
      protected $table = 'imagen';
      protected $primaryKey = 'idImagen';


      // FUNCIÓN PARA ACCEDER A UNA IMAGEN
      public function getImage($idImagen = null)
      {
        if ($idImagen === null)
        {
                return $this->findAll();
        }

        return $this->asObject()
              ->where(['idImagen' => $idImagen])
              ->first();
      }
      // FIN FUNCIÓN PARA ACCEDER A UNA IMAGEN


      //

    }


