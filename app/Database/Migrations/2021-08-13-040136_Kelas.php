<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
   public function up()
    {
        $this->forge->addField([
		    'id_kelas'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		            'unsigned'       => true,
		            'auto_increment' => true,
		    ],
		    'id_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'id_materi'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'id_teacher'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'id_transaksi'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'id_paket'       => [
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
            $this->forge->addKey('id_kelas', true);
            $this->forge->createTable('tb_kelas');
    }

    public function down()
    {
            $this->forge->dropTable('tb_kelas');
    }
}
