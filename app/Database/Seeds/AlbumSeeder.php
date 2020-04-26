<?php namespace App\Database\Seeds;

class AlbumSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                // Using Query Builder

                for ($i=1; $i <= 20 ; $i++) { 
                $data = [
                        'nombreAlbum' => "Imagen $i",
                        'descripcionAlbum'    => "Description $i in database seeding is a simple way to add data into your database.",
                        'posicion'    => "$i"
                ];
                $this->db->table('album')->insert($data);
                }
        }
}