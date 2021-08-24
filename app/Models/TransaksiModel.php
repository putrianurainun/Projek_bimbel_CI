<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table= 'tb_transaksi';
	protected $useTimestamps = true;
	protected $primaryKey ='id_transaksi';
	protected $allowedFields = ['id_student','id_paket','status', 'bukti_tf'];
	

	public function getTransaksi($id_transaksi=false){

		if ($id_transaksi == false) {
			return $this->db->table('tb_transaksi')
			->join('tb_student', 'tb_student.id_student=tb_transaksi.id_student')
			->join('tb_paket', 'tb_paket.id_paket=tb_transaksi.id_paket')
			->get()->getResultArray();
		}

		 return $this->where('id_transaksi', $id_transaksi)->first();
	}
	public function getTransaksiUser($id_student, $id_paket){

		return $this->db->table('tb_transaksi')
			->join('tb_student', 'tb_student.id_student=tb_transaksi.id_student')
			->join('tb_paket', 'tb_paket.id_paket=tb_transaksi.id_paket')
			->where(array('tb_student.id_student' =>$id_student , 'tb_paket.id_paket'=> $id_paket))
			->get()->getResultArray();
		
	}
}
