<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftar extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'email'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'nama'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'usia'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'jenis_kelamin'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'alamat'    => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],

		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('Daftar');
	}

	public function down()
	{

		$this->forge->dropTable('Daftar');
	}
}
