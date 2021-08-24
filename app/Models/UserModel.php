<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table                = 'tb_user';
	protected $primaryKey           = 'id_user';
	protected $allowedFields        = ['username', 'password'];
	protected $useTimestamps        = true;
	public function getUser($id_user=false)
	{
		if ($id_user == false) {
			return $this->findAll();
		}
		return $this->where(['id_user' => $id_user])->first();
	}
	public function Login($username, $password)
	{
		return $this->where(array('username'=>$username, 'password'=>$password))
		
			->first();
			
	}
}
