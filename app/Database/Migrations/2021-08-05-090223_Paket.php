<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
{
    public function up()
    {
        $this->forge->addField([
		    'id_paket'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		            'unsigned'       => true,
		            'auto_increment' => true,
		    ],
		    'id_level'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		    ],
		    'id_teacher'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		    ],
		    'paket'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'harga'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'jadwal_awal'       => [
		            'type'       => 'DATETIME',
		            'null'		=> true,
		    ],
		    'jadwal_akhir'       => [
		            'type'       => 'DATETIME',
		            'null'		=> true,
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
            $this->forge->addKey('id_paket', true);
            $this->forge->createTable('tb_paket');
    }

    public function down()
    {
            $this->forge->dropTable('tb_paket');
    }
}
