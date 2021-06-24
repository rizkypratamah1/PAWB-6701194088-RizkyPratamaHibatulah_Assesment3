<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Daftar extends Seeder
{
	public function run()
	{
		//
		$daftar_data = [
			[
				'id' => '2',
				'email'    => 'pratamarizki101@gmail.com',
				'nama'    => 'Rizky Pratama Hibatulah',
				'usia'    => '19',
				'jenis_kelamin'    => 'laki-laki',
				'alamat'    => 'KAB.KUNINGAN'
			],
			[
				'id' => '4',
				'email'    => 'slaman@gmail.com',
				'nama'    => 'Salman',
				'usia'    => '21',
				'jenis_kelamin'    => 'laki-laki',
				'alamat'    => 'CIBIRU'
			],
		];
		foreach ($daftar_data as $data) {
			// insert semua data ke tabel
			$this->db->table('Daftar')->insert($data);
		}
	}
}
