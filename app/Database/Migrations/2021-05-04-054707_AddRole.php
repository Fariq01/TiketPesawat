<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRole extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_role' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
			'nama_role' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false,
                'unique' => true
			]
        ]);
        $this->forge->addPrimaryKey('id_role');
        $this->forge->createTable('role');
	}

	public function down()
	{
		$this->forge->dropTable('role');
	}
}
