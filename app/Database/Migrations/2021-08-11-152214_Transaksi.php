<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
   public function up()
    {
        $this->forge->addField([
		    'id_transaksi'          => [
		            'type'           => 'INT',
		            'constraint'     => 11,
		            'unsigned'       => true,
		            'auto_increment' => true,
		    ],
		    'id_student'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'id_paket'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'status'       => [
		            'type'       => 'VARCHAR',
		            'constraint' => '100',
		    ],
		    'bukti_tf'       => [
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
            $this->forge->addKey('id_transaksi', true);
            $this->forge->createTable('tb_transaksi');
    }

    public function down()
    {
            $this->forge->dropTable('tb_transaksi');
    }
}
