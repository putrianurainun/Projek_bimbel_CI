<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
	protected $table= 'tb_pelajaran';
	protected $useTimestamps = true;
	protected $primaryKey ='id_pelajaran';
	protected $allowedFields = ['id_level', 'nama_pelajaran'];
	

	public function getPelajaran($id_pelajaran=false){

		if ($id_pelajaran == false) {
			return $this->db->table('tb_pelajaran')
			->join('tb_level', 'tb_level.id_level=tb_pelajaran.id_level')
			->get()->getResultArray();
		}

		return $this->where(['id_pelajaran' => $id_pelajaran])->first();

	}
	
}



