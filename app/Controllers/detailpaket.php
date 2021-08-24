<?php

namespace App\Controllers;
use App\Models\DetailpaketModel;
use App\Models\LevelModel;
use App\Models\TeacherModel;

class paket extends BaseController
{
	protected $paket, $level, $detailpaket;
	public function __construct()
	{
		$this->paket= new PaketModel();
		$this->level= new LevelModel();
		$this->detailpaket= new DetailpaketModel();
	}
	public function index()
	{
		$data=[
			//'title' => 'Daftar level',
			'detailpaket' => $this->detailpaket->getDetailPaket()
		];
		return view('detailpaket/index', $data);
	}
	// public function detail($id){
		
	// 	$paket= $this->paket->getPaket($id);
	// 	$level =$this->level->getLevel();
		
	// 	$data = [
	// 		'title' => 'Detail paket',
	// 		'level'=>$this->level->getLevel(),
	// 		'paket' => $this->paket->getPaket($id)
			
	// 	];

		
	// 	return view('paket/detail', $data);
	// }
	public function create()
	{
		$data=[
			//'title' => 'Form Tambah Data Level',
			'level' => $this->level->getLevel(),
			'teacher' => $this->teacher->getTeacher()
			//'validation' => \Config\Services::validation()
		];
		return view('/detailpaket/create', $data);
	}
	public function save()
	{
		$this->detailpaket->save([
			'id_level' => $this->request->getVar('level_pelajaran'),
			'id_teacher' => $this->request->getVar('nama_teacher'),
			'jadwal' => $this->request->getVar('jadwal'),
			'materi' => $this->request->getVar('mater')
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/detailpaket');
	}
	public function edit($id_detailpaket)
	{
		$data=[
		//	'title' => 'Form Ubah Data Level',
			'level'=>$this->level->getLevel(),
			'teacher'=>$this->teacher->getTeacher(),
			'detailpaket'=>$this->detailpaket->getDetailPaket($id_detailpaket)
			

			//'validation' => \Config\Services::validation()
		];
		//var_dump($data['pelajaran']);
		return view('detailpaket/edit', $data);
		
	}
	public function update($id_detailpaket)
	{
		$this->detailpaket->save([
			'id_detailpaket' => $id_detailpaket,
			'id_level'=> $this->request->getVar('level_pelajaran'),
			'id_teacher' => $this->request->getVar('nama_teacher'),
			'jadwal' => $this->request->getVar('jadwal'),
			'materi' => $this->request->getVar('materi')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/detailpaket');
	}	
	public function delete($data)
	{
		$this->detailpaket->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/detailpaket');
	}

}
