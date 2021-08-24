<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Teacher extends Migration
{
    public function up()
    {
        $this->forge->addField([
		    'id_teacher'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		            'unsigned'       => true,
		            'auto_increment' => true,
		    ],
		    'nama_teacher'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'foto_teacher'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'jk_teacher'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'alamat_teacher'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'no_hp'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'email_teacher'       => [
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
            $this->forge->addKey('id_teacher', true);
            $this->forge->createTable('tb_teacher');
    }

    public function down()
    {
            $this->forge->dropTable('tb_teacher');
    }
}
