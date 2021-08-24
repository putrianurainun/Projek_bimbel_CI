<?php

namespace App\Controllers;
use App\Models\PaketModel;
use App\Models\LevelModel;
use App\Models\TeacherModel;

class paket extends BaseController
{
	protected $paket, $level, $teacher;
	public function __construct()
	{
		$this->paket= new PaketModel();
		$this->level= new LevelModel();
		$this->teacher= new TeacherModel();
	}
	public function index()
	{
		$data=[
			'title' => 'Daftar Data',
			'paket' => $this->paket->getPaket()
		];
		return view('paket/index', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data',
			'level' => $this->level->getLevel(),
			'teacher' => $this->teacher->getTeacher()
			//'validation' => \Config\Services::validation()
		];
		return view('/paket/create', $data);
	}
	public function save()
	{
		$this->paket->save([
			'id_level' => $this->request->getVar('level_pelajaran'),
			'id_teacher' => $this->request->getVar('nama_teacher'),
			'paket' => $this->request->getVar('paket'),
			'harga' => $this->request->getVar('harga'),
			'jadwal_awal' => $this->request->getVar('jadwal_awal'),
			'jadwal_akhir' => $this->request->getVar('jadwal_akhir'),
			'link' => $this->request->getVar('link')
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/paket');
	}
	public function edit($id_paket)
	{
		$data=[
			'title' => 'Form Ubah Data',
			'level'=>$this->level->getLevel(),
			'teacher' =>$this->teacher->getTeacher(),
			'paket'=>$this->paket->getPaket($id_paket)
			

			//'validation' => \Config\Services::validation()
		];
		//var_dump($data['pelajaran']);
		return view('paket/edit', $data);
		
	}
	public function update($id_paket)
	{
		$this->paket->save([
			'id_paket' => $id_paket,
			'id_level'=> $this->request->getVar('level_pelajaran'),
			'id_teacher' => $this->request->getVar('nama_teacher'),
			'paket' => $this->request->getVar('paket'),
			'harga' => $this->request->getVar('harga'),
			'jadwal_awal' => $this->request->getVar('jadwal_awal'),
			'jadwal_akhir' => $this->request->getVar('jadwal_akhir'),
			'link' => $this->request->getVar('link')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/paket');
	}	
	public function delete($data)
	{
		$this->paket->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/paket');
	}

}
