<?php

namespace App\Controllers;
use App\Models\PelajaranModel;
use App\Models\LevelModel;

class pelajaran extends BaseController
{
	protected $pelajar, $level;
	public function __construct()
	{
		$this->pelajaran= new PelajaranModel();
		$this->level= new LevelModel();
	}
	public function index()
	{
		$data=[
			//'title' => 'Daftar level',
			'pelajaran' => $this->pelajaran->getPelajaran()
		];
		return view('pelajaran/index', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data Level',
			'level' => $this->level->getLevel()
			//'validation' => \Config\Services::validation()
		];
		return view('/pelajaran/create', $data);
	}
	public function save()
	{
		$this->pelajaran->save([
			'id_level' => $this->request->getVar('level_pelajaran'),
			'nama_pelajaran' => $this->request->getVar('nama_pelajaran')
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/pelajaran');
	}
	public function edit($id_pelajaran)
	{
		$data=[
			'title' => 'Form Ubah Data Level',
			'level'=>$this->level->getLevel(),
			'pelajaran'=>$this->pelajaran->getPelajaran($id_pelajaran)
			

			//'validation' => \Config\Services::validation()
		];
		//var_dump($data['pelajaran']);
		return view('pelajaran/edit', $data);
		
	}
	public function update($id_pelajaran)
	{
		$this->pelajaran->save([
			'id_pelajaran' => $id_pelajaran,
			'id_level'=> $this->request->getVar('level_pelajaran'),
			'nama_pelajaran' => $this->request->getVar('nama_pelajaran')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/pelajaran');
	}	
	public function delete($data)
	{
		$this->pelajaran->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/pelajaran');
	}

}
