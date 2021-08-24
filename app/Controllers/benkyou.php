<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use App\Models\LevelModel;
use App\Models\PaketModel;
use App\Models\PelajaranModel;
use App\Models\MateriModel;
use App\Models\TransaksiModel;


class benkyou extends BaseController
{
	
	protected $teacher, $paket, $materi, $student, $transaksi;
	public function __construct()
	{
		$this->teacher = new TeacherModel();
		$this->paket = new PaketModel();
		$this->materi = new MateriModel();
		$this->student = new StudentModel();
		$this->transaksi = new TransaksiModel();
	}
	
	public function index()
	{
		
		return view('benkyou/index');
	}
	public function about()
	{
		return view('benkyou/about');
	}
	public function courses()
	{
		$data= [
			'paket' =>$this->paket->getPaket()
		];
		return view('benkyou/courses', $data);
	}
	public function teachers()
	{
		$data= [
			'teacher' => $this->teacher->getTeacher()
		];
		return view('benkyou/teachers', $data);
	}
	public function detail($id_paket)
	{
	
		$data=[
			'paket'=>$this->paket->getPaket($id_paket),
			'teacher'=>$this->teacher->getTeacher()

			//'validation' => \Config\Services::validation()
		];
		return view('benkyou/detail', $data);
	}
	public function register()
	{
		return view('benkyou/register');
	}
	public function registersave()
	{
		$this->student->save([
			'nama_student' => $this->request->getVar('nama_student'),
			'jk_student' => $this->request->getVar('jk_student'),
			'alamat_student' =>$this->request->getVar('alamat_student'),
			'no_hp' => $this->request->getVar('no_hp'),
			'email_student' => $this->request->getVar('email_student')
		]);
		$student=$this->student->getStudentRegister($this->request->getVar('email_student'));
		

		$this->transaksi->save([
			'id_student' => $student['id_student'],
			'id_paket' => $this->request->getVar('id_paket'),
			'status' =>"",
			'bukti_tf' => ""
			
		]);

		
		$data=[
			'transaksi' => $this->transaksi->getTransaksiUser($student['id_student'], $this->request->getVar('id_paket'))

			//'validation' => \Config\Services::validation()
		];
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return view('benkyou/info', $data);
	}
	public function data()
	{
		$data=[
			'paket' =>$this->paket->getPaket(),
		];
		return view('benkyou/data', $data);
	}
	public function upload()
	{
		$filefoto= $this->request->getFile('bukti_tf');
		$namaFile=$filefoto->getName();
		//mindahin file
		$filefoto->move('image', $namaFile);
		$this->transaksi->save([
			'id_transaksi' => $this->request->getVar('id_transaksi'),
			'bukti_tf' => $namaFile
		]);
		return redirect()->to('/belajar/index2');
	}
}
