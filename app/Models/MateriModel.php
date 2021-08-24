<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
	protected $table= 'tb_materi';
	protected $useTimestamps = true;
	protected $primaryKey ='id_materi';
	protected $allowedFields = ['id_paket', 'materi'];
	

	public function getMateri($id_materi=false){

		if ($id_materi == false) {
			return $this->findAll();
		}

		return $this->where(['id_materi' => $id_materi])->first();

	}
}
