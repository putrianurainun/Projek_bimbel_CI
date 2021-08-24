<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPelajaran extends Migration
{
        public function up()
        {
            $this->forge->addField([
			    'id_pelajaran'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			            'unsigned'       => true,
			            'auto_increment' => true,
			    ],
			    'id_level'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			    ],
			    'nama_pelajaran'       => [
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
                $this->forge->addKey('id_pelajaran', true);
                $this->forge->createTable('tb_pelajaran');
        }

        public function down()
        {
                $this->forge->dropTable('tb_pelajaran');
        }
}
