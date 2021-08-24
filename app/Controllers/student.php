<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Models\TransaksiModel;

class student extends BaseController
{
	protected $student, $transaksi;
	public function __construct()
	{
		$this->student = new StudentModel();
		$this->transaksi = new TransaksiModel();
	}
	public function index()
	{
		$data=[
			'title' => 'Daftar student',
			'student' => $this->student->getStudentAsli()
		];
		return view('student/index', $data);
	}
	public function pendaftaran()
	{
		$data=[
			'title' => 'Daftar student Regist',
			'student' => $this->student->getStudentRegist()
		];
		return view('student/listpendaftaran', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data Student',
			'student' => $this->student->getStudent()
			//'validation' => \Config\Services::validation()
		];
		return view('/student/create', $data);
	}
	public function save()
	{
		$this->student->save([
			'nama_student' => $this->request->getVar('nama_student'),
			'jk_student' => $this->request->getVar('jk_student'),
			'alamat_student' =>$this->request->getVar('alamat_student'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email_student' => $this->request->getVar('email_student')
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/student');
	}
	public function edit($id_student)
	{
		$data=[
			'title' => 'Form Ubah Data student',
			'student'=>$this->student->getStudent($id_student),
			//'validation' => \Config\Services::validation()
		];
		return view('student/edit', $data);
	}
	public function update($id_student)
	{
		$this->student->save([
			'id_student'=> $id_student,
			'nama_student' => $this->request->getVar('nama_student'),
			'jk_student' => $this->request->getVar('jk_student'),
			'alamat_student' =>$this->request->getVar('alamat_student'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email_student' => $this->request->getVar('email_student')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/student');
	}	
	public function delete($data)
	{
		$this->student->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/student');
	}
	public function confirm()
	{
		
		$status= "";
		if ($this->request->getVar('konfirmasi')=="Ditolak") {
			$status="Ditolak";
		}else{
			$status="Diterima";
		}
		$this->transaksi->save([
			'id_transaksi' => $this->request->getVar('id_transaksi'),
			'status' => $status
		]);
		return redirect()->to('/student' );
	}

}
