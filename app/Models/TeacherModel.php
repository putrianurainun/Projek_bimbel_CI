<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
	protected $table                = 'tb_teacher';
	protected $primaryKey           = 'id_teacher';
	protected $allowedFields        = ['nama_teacher', 'foto_teacher', 'jk_teacher', 'alamat_teacher', 'no_hp', 'email_teacher'];
	protected $useTimestamps        = true;
	public function getTeacher($id_teacher=false)
	{
		if ($id_teacher == false) {
			return $this->findAll();
		}
		return $this->where(['id_teacher' => $id_teacher])->first();
	}
	public function getTeacherId($email_teacher)
	{
		
		return $this->where(['email_teacher' => $email_teacher])->first();
	}
	public function getMyClass($id_teacher)
	{
		return $this->db->table('tb_paket')
			->join('tb_teacher', 'tb_teacher.id_teacher=tb_paket.id_teacher')			
			->where('tb_teacher.id_teacher',$id_teacher)
			->get()->getResultArray();
	}
	public function listsiswa($id_paket, $id_teacher)
	{
		return $this->db->table('tb_transaksi')
			->join('tb_paket', 'tb_paket.id_paket=tb_transaksi.id_paket')
			->join('tb_student','tb_student.id_student=tb_transaksi.id_student')
			->where(array('tb_paket.id_teacher'=>$id_teacher, 'tb_paket.id_paket'=>$id_paket, 'tb_transaksi.status'=>"Diterima"))
			->get()->getResultArray();
	}
	public function listmateri($id_paket, $id_teacher)
	{
		return $this->db->table('tb_transaksi')
			->join('tb_paket', 'tb_paket.id_paket=tb_transaksi.id_paket')
			->join('tb_detailpaket', 'tb_detailpaket.id_paket=tb_paket.id_paket')
			->join('tb_materi', 'tb_materi.id_materi=tb_detailpaket.id_materi')
			->where(array('tb_paket.id_teacher'=>$id_teacher, 'tb_paket.id_paket'=>$id_paket, 'tb_transaksi.status'=>"Diterima"))
			->get()->getResultArray();
	}
}
