<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Imagenes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idImagen'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'tituloImagen'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'descripcionImagen' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
		]);
		$this->forge->addKey('idImagen', TRUE);
		$this->forge->createTable('imagen');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('imagen');
	}
}
