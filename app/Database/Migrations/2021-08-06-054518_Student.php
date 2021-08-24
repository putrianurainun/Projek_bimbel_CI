<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Student extends Migration
{
    public function up()
    {
        $this->forge->addField([
		    'id_student'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		            'unsigned'       => true,
		            'auto_increment' => true,
		    ],
		    'nama_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'jk_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'alamat_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'no_hp'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'email_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'created_at' => [
		            'type' => 'DATETIME',
		            'null' => true,
		    ],
		    'updated_at' => [
		            'type' => 'DATETIME',
		            'null' => true,
		    ]
    	]);
            $this->forge->addKey('id_student', true);
            $this->forge->createTable('tb_student');
    }

    public function down()
    {
            $this->forge->dropTable('tb_student');
    }
}
