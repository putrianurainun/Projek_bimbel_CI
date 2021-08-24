<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
	protected $table= 'tb_kelas';
	protected $useTimestamps = true;
	protected $primaryKey ='id_kelas';
	protected $allowedFields = ['id_student','id_materi', 'id_teacher','id_transaksi', 'id_paket'];
	

	public function getKelas($id_kelas=false){

		if ($id_kelas == false) {
			return $this->db->table('tb_kelas')
			
			->get()->getResultArray();
		}

		 return $this->where('id_kelas', $id_kelas)->first();

	}
}
