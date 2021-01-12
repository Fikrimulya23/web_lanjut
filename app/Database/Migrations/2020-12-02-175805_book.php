<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Book extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 11,
					'unsigned'       => TRUE,
					'auto_increment' => TRUE
			],
			'Judul'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '128',
			],
			'Deskripsi' => [
					'type'           => 'VARCHAR',
					'constraint'     => '1000',
			],
			'Penulis' => [
					'type'           => 'VARCHAR',
					'constraint'     => '128',
			],
			'Jumlah' => [
					'type'           => 'INT',
					'constraint'     => '11',
			],
			'Harga' => [
					'type'           => 'INT',
					'constraint'     => '11',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('book');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}