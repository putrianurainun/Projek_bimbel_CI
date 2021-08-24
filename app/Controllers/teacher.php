<?php

namespace App\Controllers;
use App\Models\TeacherModel;
use App\Models\UserModel;

class teacher extends BaseController
{
	protected $teacher, $user;
	public function __construct()
	{
		$this->teacher = new TeacherModel();
		$this->user = new UserModel();
	}
	public function index()
	{
		$data=[
			'title' => 'Daftar teacher',
			'teacher' => $this->teacher->getTeacher()
		];
		return view('teacher/index', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data teacher',
			'teacher' => $this->teacher->getTeacher()
			//'validation' => \Config\Services::validation()
		];
		return view('/teacher/create', $data);
	}
	public function save()
	{
		
		//$slug = url_title($this->request->getVar('nama_teacher'), '-', true);
		$filefoto= $this->request->getFile('foto_teacher');
		$namaFile=$filefoto->getName();
		//mindahin file
		$filefoto->move('image', $namaFile);
		//ambil nama filenya
		//var_dump($filefoto);die();

		$this->teacher->save([
			'nama_teacher' => $this->request->getVar('nama_teacher'),
			'foto_teacher' => $namaFile,
			'jk_teacher' => $this->request->getVar('jk_teacher'),
			'alamat_teacher' =>$this->request->getVar('alamat_teacher'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email_teacher' => $this->request->getVar('email_teacher')
		]);

			$teacher = $this->teacher->getTeacherId($this->request->getVar('email_teacher'));
			$this->user->save([
				'username' => $this->request->getVar('email_teacher'),
				'password' => $this->request->getVar('no_hp'),
				'role' =>"Teacher",
				'id' => $teacher['id_teacher']
			]);
				
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/teacher');
	}
	public function edit($id_teacher)
	{
		$data=[
			'title' => 'Form Ubah Data teacher',
			'teacher'=>$this->teacher->getTeacher($id_teacher)
			//'validation' => \Config\Services::validation()
		];
		return view('teacher/edit', $data);
	}
	public function update($id_teacher)
	{
		$fileLama = $this->teacher->getTeacher($id_teacher);
		
		$fileMateri=$this->request->getFile('foto_teacher');
		if($fileMateri->getError()==4){
			$namaFile=$this->request->getVar('foto_teacherLama');
			
		}else{

			$fileMateri->move('image');
			$namaFile=$fileMateri->getName();
			unlink('image/'.$this->request->getVar('foto_teacherLama'));
			
		}
		$this->teacher->save([
			'id_teacher'=> $id_teacher,
			'nama_teacher' => $this->request->getVar('nama_teacher'),
			'foto_teacher' => $namaFile,
			'jk_teacher' => $this->request->getVar('jk_teacher'),
			'alamat_teacher' =>$this->request->getVar('alamat_teacher'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email_teacher' => $this->request->getVar('email_teacher')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/teacher');
	}	
	public function delete($data)
	{
		$this->teacher->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/teacher');
	}

}
