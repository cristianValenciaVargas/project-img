<?php namespace App\Database\Seeds;

class ImagenSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                // Using Query Builder

                for ($i=1; $i <= 20 ; $i++) { 
                $data = [
                        'tituloImagen' => "Imagen $i",
                        'descripcionImagen'    => "Description $i in database seeding is a simple way to add data into your database."
                ];
                $this->db->table('imagen')->insert($data);
                }
        }
}