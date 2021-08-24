<?php

namespace App\Controllers;
use App\Models\LevelModel;

class level extends BaseController
{
	protected $level;
	public function __construct()
	{
		$this->level = new LevelModel();
	}
	public function index2()
	{
		return view('daftar/index');
	}
	public function index()
	{
		$data=[
			'title' => 'Daftar level',
			'level' => $this->level->getLevel()
		];
		return view('level/index', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data Level',
			//'validation' => \Config\Services::validation()
		];
		return view('/level/create', $data);
	}
	public function save()
	{
		$this->level->save([
			'level_pelajaran' => $this->request->getVar('level_pelajaran')
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/level');
	}
	public function edit($id_level)
	{
		$data=[
			'title' => 'Form Ubah Data Level',
			'level'=>$this->level->getLevel($id_level),
			//'validation' => \Config\Services::validation()
		];
		return view('level/edit', $data);
	}
	public function update($id_level)
	{
		$this->level->save([
			'id_level'=> $id_level,
			'level_pelajaran' => $this->request->getVar('level_pelajaran')
		]);

	//	session()->setFlashdata('pesan','Data berhasil diubah');
		return redirect()->to('/level');
	}	
	public function delete($data)
	{
		$this->level->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/level');
	}

}
