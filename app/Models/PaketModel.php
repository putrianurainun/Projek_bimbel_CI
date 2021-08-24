<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
	protected $table= 'tb_paket';
	protected $useTimestamps = true;
	protected $primaryKey ='id_paket';
	protected $allowedFields = ['id_paket','id_level', 'id_teacher', 'foto_paket', 'paket', 'harga', 'jadwal_awal', 'jadwal_akhir', 'link'];
	

	public function getPaket($id_paket=false){

		if ($id_paket == false) {
			return $this->db->table('tb_paket')
			->join('tb_level', 'tb_level.id_level=tb_paket.id_level')
			->join('tb_teacher', 'tb_teacher.id_teacher=tb_paket.id_teacher')
			->get()->getResultArray();
		}

		 return $this->where('id_paket', $id_paket)->first();

	}
}