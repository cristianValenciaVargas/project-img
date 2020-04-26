<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Albumes extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idAlbum'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'nombreAlbum'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'descripcionAlbum' => [
				'type'           => 'TEXT',
				'null'           => TRUE,
			],
			'posicion' => [
				'type'           => 'INT',
			],
		]);
		$this->forge->addKey('idAlbum', TRUE);
		$this->forge->createTable('album');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('album');
	}
}
