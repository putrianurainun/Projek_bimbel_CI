<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailpaketModel extends Model
{
	protected $table= 'tb_detailpaket';
	protected $useTimestamps = true;
	protected $primaryKey ='id_detail';
	protected $allowedFields = ['id_paket', 'id_materi'];
	

	public function getDetailPaket($id_detail){

		if ($id_detail == false) {
			return $this->db->table('tb_detailpaket')
			->join('tb_level', 'tb_level.id_level=tb_paket.id_level')
			->join('tb_teacher', 'tb_teacher.id_teacher=tb_detailpaket.id_teacher')
			->get()->getResultArray();
		}

		return $this->where(['id_detailpaket' => $id_detailpaket])->first();

	}
}
