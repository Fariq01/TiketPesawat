<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
			'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
            ],
			'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
			'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false
            ],
			'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
			'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ]
            
        ]);
        $this->forge->addPrimaryKey('id_user');
        $this->forge->createTable('user');
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
