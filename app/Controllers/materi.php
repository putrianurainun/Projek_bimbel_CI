<?php

namespace App\Controllers;
use App\Models\PaketModel;
use App\Models\MateriModel;

class materi extends BaseController
{
	protected $paket, $materi;
	public function __construct()
	{
		$this->paket= new PaketModel();
		$this->materi= new MateriModel();
		
	}
	public function index()
	{
		$data=[
			//'title' => 'Daftar level',
			'materi' => $this->materi->getMateri()
		];
		return view('materi/index', $data);
	}
	public function create(){
		$data=[
			'title' => 'Form Tambah Data Level',
			'paket' => $this->paket->getPaket()
			//'validation' => \Config\Services::validation()
		];
		return view('/materi/create', $data);
	}
	public function save()
	{

		$filefoto= $this->request->getFile('materi');
		$namaFile=$filefoto->getName();
		//mindahin file
		$filefoto->move('image', $namaFile);
		
		$this->materi->save([
			'materi' => $namaFile
		]);
		//session()->setFlashdata('pesan','Data berhasil ditambahkan');
		return redirect()->to('/materi');
	}
	public function edit($id_materi){
		$data=[
			'validation'=> \Config\Services::validation(),
			'materi'=> $this->materi->getMateri($id_materi)
			
		];
		return view('/materi/edit',$data);
	}

	public function update($id_materi){
		$fileLama = $this->materi->getMateri($id_materi);
		
		$fileMateri=$this->request->getFile('materi');
		if($fileMateri->getError()!=4){
			$fileMateri->move('image');
			$namaFile=$fileMateri->getName();
			unlink('image/'.$this->request->getVar('materiLama'));
			
		}else{
			$namaFile=$this->request->getVar('materiLama');
		}
		$this->materi->save([
			'id_materi' => $id_materi,
			'id_paket' => $this->request->getVar('id_paket'),
			'materi' => $namaFile
		]);
		return redirect()->to('/materi');
	}
	public function delete($data)
	{
		$this->materi->delete($data);

	//	session()->setFlashdata('pesan','Data berhasil dihapus');
		return redirect()->to('/materi');
	}

}
