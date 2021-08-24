<?php

namespace App\Models;

use CodeIgniter\Model;

class LevelModel extends Model
{
	protected $table                = 'tb_level';
	protected $primaryKey           = 'id_level';
	protected $allowedFields        = ['level_pelajaran'];
	protected $useTimestamps        = true;
	public function getLevel($id_level=false)
	{
		if ($id_level == false) {
			return $this->findAll();
		}
		return $this->where(['id_level' => $id_level])->first();
	}
	
}
