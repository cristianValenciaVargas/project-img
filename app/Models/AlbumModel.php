<?php namespace App\Models;

use CodeIgniter\Model;

    class AlbumModel extends Model
    {
      protected $table = 'album';
      protected $primaryKey = 'idAlbum';


      // FUNCIÓN PARA ACCEDER A UN ALBUM
      public function getAlbum($idAlbum = null)
      {
        if ($idAlbum === null)
        {
                return $this->findAll();
        }

        return $this->asObject()
              ->where(['idAlbum' => $idAlbum])
              ->first();
      }
      // FIN FUNCIÓN PARA ACCEDER A UNA ALBUM


      //

    }


