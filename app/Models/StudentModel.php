<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
	protected $table                = 'tb_student';
	protected $primaryKey           = 'id_student';
	protected $allowedFields        = ['nama_student', 'jk_student', 'alamat_student', 'no_hp', 'email_student','id_paket'];
	protected $useTimestamps        = true;
	public function getStudent($id_student=false)
	{
		if ($id_student == false) {
			return $this->findAll();
		}
		return $this->where(['id_student' => $id_student])->first();
	}

	public function getStudentRegister($email_student)
	{
		
		return $this->where(['email_student' => $email_student])->first();
	}

	public function getStudentAsli(){
			return $this->db->table('tb_student')	
			->join('tb_transaksi', 'tb_transaksi.id_student=tb_student.id_student')
			->where(['tb_transaksi.status' => "Diterima"])
			->get()->getResultArray();		
	}
	public function getStudentRegist(){
			return $this->db->table('tb_student')
			->join('tb_transaksi', 'tb_transaksi.id_student=tb_student.id_student')
			->where(['tb_transaksi.status' => ""])
			->get()->getResultArray();		
	}
	public function getStudentNew(){
			return $this->db->table('tb_student')
			->join('tb_paket', 'tb_paket.id_paket=tb_student.id_paket')
			->get()->getResultArray();
	}

	public function getMyClass($id_student)
	{
		return $this->db->table('tb_transaksi')
			->join('tb_student', 'tb_student.id_student=tb_transaksi.id_student')
			->join('tb_paket','tb_paket.id_paket=tb_transaksi.id_paket')
	
			->join('tb_teacher','tb_teacher.id_teacher=tb_paket.id_teacher')
			->where('tb_student.id_student',$id_student)
			->get()->getResultArray();
	}

}
