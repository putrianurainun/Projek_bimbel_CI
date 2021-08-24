<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Models\TransaksiModel;
use App\Models\UserModel;
use App\Models\TeacherModel;

class user extends BaseController
{
	protected $student, $transaksi, $user, $teacher;
	public function __construct()
	{
		$this->student = new StudentModel();
		$this->transaksi = new TransaksiModel();
		$this->user = new UserModel();
		$this->teacher = new TeacherModel();
	}
	public function login()
	{
		
		return view('user/login');
	}
	public function register()
	{

		return view('user/register');
	}
	public function save()
	{

		$data= $this->transaksi->getTransaksi($this->request->getVar('id_transaksi'));
	
			if ($data['status']=="Diterima") {
				$this->user->save([
					'username' => $this->request->getVar('username'),
					'password' => $this->request->getVar('password'),
					'id' => $data['id'],
					'role' => "Student"
				]);
				return redirect()->to('/login');
			}else{
				return redirect()->to('/register');
			}
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');	
	}
	public function loginUser()
	{
		$data= $this->user->Login($this->request->getVar('username'), $this->request->getVar('password'));
		$session = \Config\Services::session();

		// var_dump($data);die;
			if ($data!=null) {
				if ($data['role']=="Student") {
					$student=$this->student->getStudent($data['id']);
					$newdata=[
							'nama_student' => $student['nama_student'],
							'username' => $data['username'],
							'password' => $data['password'],
							'id_student' => $data['id'],
							'role' => $data['role'],
							'id_user' =>$data['id_user']
					];
					$session->set($newdata);
					return redirect()->to('/belajar/kelas');
				}elseif ($data['role']=="Teacher") {
					$teacher=$this->teacher->getTeacher($data['id']);
					$newdata=[
						'nama_teacher' => $teacher['nama_teacher'],
						'username' => $data['username'],
						'password' => $data['password'],
						'id_teacher' => $data['id'],
						'role' => $data['role'],
						'id_user' =>$data['id_user']
					];
					$session->set($newdata);
					return redirect()->to('/belajar/kelasTeacher');
				}elseif ($data['role']=="Admin") {
				
					$newdata=[
						'username' => $data['username'],
						'password' => $data['password'],
						'role' => $data['role'],
						'id_user' =>$data['id_user']
					];
					$session->set($newdata);
					return redirect()->to('/paket');
				}
				
				
				
			}else{
				return redirect()->to('/login');
			}
	}
	// public function pendaftaran()
	// {
	// 	$data=[
	// 		'title' => 'Daftar student Regist',
	// 		'student' => $this->student->getStudentRegist()
	// 	];
	// 	return view('student/listpendaftaran', $data);
	// }
	// public function create(){
	// 	$data=[
	// 		'title' => 'Form Tambah Data Student',
	// 		'student' => $this->student->getStudent()
	// 		//'validation' => \Config\Services::validation()
	// 	];
	// 	return view('/student/create', $data);
	// }
	// public function save()
	// {
	// 	$this->student->save([
	// 		'nama_student' => $this->request->getVar('nama_student'),
	// 		'jk_student' => $this->request->getVar('jk_student'),
	// 		'alamat_student' =>$this->request->getVar('alamat_student'),
	// 		'no_hp' => $this->request->getVar('no_hp'),
	// 		'email_student' => $this->request->getVar('email_student')
	// 	]);
	// 	//session()->setFlashdata('pesan','Data berhasil ditambahkan');
	// 	return redirect()->to('/student');
	// }
	// public function edit($id_student)
	// {
	// 	$data=[
	// 		'title' => 'Form Ubah Data student',
	// 		'student'=>$this->student->getStudent($id_student),
	// 		//'validation' => \Config\Services::validation()
	// 	];
	// 	return view('student/edit', $data);
	// }
	// public function update($id_student)
	// {
	// 	$this->student->save([
	// 		'id_student'=> $id_student,
	// 		'nama_student' => $this->request->getVar('nama_student'),
	// 		'jk_student' => $this->request->getVar('jk_student'),
	// 		'alamat_student' =>$this->request->getVar('alamat_student'),
	// 		'no_hp' => $this->request->getVar('no_hp'),
	// 		'email_student' => $this->request->getVar('email_student')
	// 	]);

	// //	session()->setFlashdata('pesan','Data berhasil diubah');
	// 	return redirect()->to('/student');
	// }	
	// public function delete($data)
	// {
	// 	$this->student->delete($data);

	// //	session()->setFlashdata('pesan','Data berhasil dihapus');
	// 	return redirect()->to('/student');
	// }
	// public function confirm()
	// {
		
	// 	$status= "";
	// 	if ($this->request->getVar('konfirmasi')=="Ditolak") {
	// 		$status="Ditolak";
	// 	}else{
	// 		$status="Diterima";
	// 	}
	// 	$this->transaksi->save([
	// 		'id_transaksi' => $this->request->getVar('id_transaksi'),
	// 		'status' => $status
	// 	]);
	// 	return redirect()->to('/student' );
	// }

}
