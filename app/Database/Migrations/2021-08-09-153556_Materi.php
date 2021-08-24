<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Materi extends Migration
{
        public function up()
        {
            $this->forge->addField([
			    'id_materi'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			            'unsigned'       => true,
			            'auto_increment' => true,
			    ],
			    'id_paket'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			    ],
			    'materi'       => [
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
                $this->forge->addKey('id_materi', true);
                $this->forge->createTable('tb_materi');
        }

        public function down()
        {
                $this->forge->dropTable('tb_materi');
        }
}
