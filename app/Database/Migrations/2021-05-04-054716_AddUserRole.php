<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUserRole extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_user' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
			'id_role' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
			]
        ]);
        $this->forge->addPrimaryKey('id_user');
		$this->forge->addPrimaryKey('id_role');
		$this->forge->addForeignKey('id_user','user','id_user');
		$this->forge->addForeignKey('id_role','role','id_role');
        $this->forge->createTable('user_role');
	}

	public function down()
	{
		$this->forge->dropTable('user_role');
	}
}
