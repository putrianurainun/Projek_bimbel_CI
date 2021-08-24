<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detailpaket extends Migration
{
       public function up()
        {
            $this->forge->addField([
			    'id_detail'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			            'unsigned'       => true,
			            'auto_increment' => true,
			    ],
			    'id_paket'          => [
			            'type'           => 'INT',
			            'constraint'     => 11,
			    ],
			    'id_materi'       => [
			            'type'           => 'INT',
			            'constraint'     => 11,
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
                $this->forge->addKey('id_detail', true);
                $this->forge->createTable('tb_detailpaket');
        }

        public function down()
        {
                $this->forge->dropTable('tb_detailpaket');
        }
}
