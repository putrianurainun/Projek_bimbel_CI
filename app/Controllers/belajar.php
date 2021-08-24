<?php

namespace App\Controllers;
use App\Models\KelasModel;
use App\Models\PaketModel;
use App\Models\MateriModel;
use App\Models\StudentModel;
use App\Models\TeacherModel;
use App\Models\TransaksiModel;
use App\Models\DetailpaketModel;
use App\Models\UserModel;



class belajar extends BaseController
{
	
	protected $kelas, $paket, $materi, $student, $teacher, $transaksi, $detailpaket, $user;
	public function __construct()
	{
		$this->kelas= new KelasModel();
		$this->paket= new PaketModel();
		$this->materi= new MateriModel();
		$this->student= new StudentModel();
		$this->teacher= new TeacherModel();
		$this->transaksi= new TransaksiModel();
		$this->detailpaket= new DetailpaketModel();
		$this->user= new UserModel();
	}
	public function index2()
	{
		// $data=[
		// 	//'title' => 'Daftar level',
		// 	'materi' => $this->materi->getMateri()
		// ];
		return view('belajar/pilihan');
	}
	public function kelas()
	{
		 $session = \Config\Services::session(); 
		$data=[
			'data' =>$this->student->getMyClass($session->get('id_student'))
		];
		
		return view('belajar/kelas', $data);
	}
	public function kelasTeacher()
	{
		 $session = \Config\Services::session(); 
		 // var_dump($session->get('id'));die;
		$data=[
			'data' =>$this->teacher->getMyClass($session->get('id_teacher'))
		];

		
		return view('belajar/paketteacher', $data);
	}
	public function listsiswa($id_paket)
	{
		$session = \Config\Services::session(); 
		 // var_dump($session->get('id'));die;
		$data=[
			'data' =>$this->teacher->listsiswa($id_paket, $session->get('id_teacher'))
		];
		return view('belajar/listsiswa', $data);
	}
	public function listmateri($id_paket)
	{
		$session = \Config\Services::session(); 
		
		 // var_dump($session->get('id'));die;
		$data=[
			'data' =>$this->teacher->listmateri($id_paket, $session->get('id_teacher')),
			'materi' => $this->materi->getMateri(),
			'id_paket' => $id_paket
		];
		// var_dump($data['materi']); die;
		return view('belajar/listmateri', $data);
	}
	public function tambahdetailpaket()
	{
		$session = \Config\Services::session(); 
		$this->detailpaket->save([
			'id_paket' => $this->request->getVar('id_paket'),
			'id_materi' => $this->request->getVar('id_materi')
		]);

		$data=[
			'data' =>$this->teacher->listmateri($this->request->getVar('id_paket'), $session->get('id_teacher')),
			'materi' => $this->materi->getMateri(),
			'id_paket' => $this->request->getVar('id_paket')
		];
		return view('belajar/listmateri',$data);
	}
	public function deletedetailpaket()
	{
		$session = \Config\Services::session(); 
		$data=[
			'id_detail' => $this->request->getVar('id_detail'),
			'id_paket' => $this->request->getVar('id_paket'),
			'id_materi' => $this->request->getVar('id_materi')
		];
		$this->detailpaket->delete($data);


		$data=[
			'data' =>$this->teacher->listmateri($this->request->getVar('id_paket'), $session->get('id_teacher')),
			'materi' => $this->materi->getMateri(),
			'id_paket' => $this->request->getVar('id_paket')
		];
		return view('belajar/listmateri',$data);
	}
	public function profile()
	{
		$session = \Config\Services::session(); 
		if ($session->get('role')=="Student") {
			$data=$this->student->getStudent($session->get('id_student'));
			$data= [
			'nama'=>$data['nama_student'],
			'jk' => $data['jk_student'],
			'no_hp'=>$data['no_hp'],
			'alamat'=>$data['alamat_student'],
			'foto' =>$data['foto_student']
		];
		}elseif ($session->get('role')=="Teacher") {
			$data=$this->teacher->getTeacher($session->get('id_teacher'));
			$data= [
			'nama'=>$data['nama_teacher'],
			'jk' => $data['jk_teacher'],
			'no_hp'=>$data['no_hp'],
			'alamat' =>$data['alamat_teacher'],
			'email' => $data['email_teacher'],
			'foto' =>$data['foto_teacher']
		];
		}

		return view('belajar/profile', $data);
	}
	public function editprofile()
	{
		$session = \Config\Services::session(); 
		
		// $fileFoto=$this->request->getFile('foto_profile');
		// if($fileFoto->getError()!=4){
		// 	$fileFoto->move('image');
		// 	$namaFile=$fileFoto->getName();
		// 	unlink('image/'.$this->request->getVar('foto'));
			
		// }else{
		// 	$namaFile=$this->request->getVar('foto');
		// }
		if ($session->get('role')=="Student") {
			$this->student->save([
			'id_student' => $session->get('id_student'),
			//'foto_student' => $namaFile,
			'jk_student' => $this->request->getVar('jk'),
			'alamat_student' =>$this->request->getVar('alamat'),
			'no_hp' =>$this->request->getVar('no_hp')

		]);


			$this->user->save([
				'id_user' => $session->get('id_user'),
				'username' => $this->request->getVar('username'),
				'password' => $this->request->getVar('password')
			]);

			$student=$this->student->getStudent($session->get('id_student'));
					$newdata=[
							'nama_student' => $this->request->getVar('nama_student'),
							'username' => $this->request->getVar('username'),
							'password' => $this->request->getVar('password'),
							'id_student' => $session->get('id_student'),
							'role' => $session->get('role'),
							'id_user' =>$session->get('id_user')
					];
					$session->set($newdata);
		}elseif ($session->get('role')=="Teacher") {
			$this->teacher->save([
			'id_teacher' => $session->get('id_teacher'),
			//'foto_teacher' => $namaFile,
			'jk_teacher' => $this->request->getVar('jk'),
			'alamat_teacher' =>$this->request->getVar('alamat'),
			'no_hp' =>$this->request->getVar('no_hp'),
			'email_teacher' =>$this->request->getVar('email')
		]);
			$this->user->save([
				'id_user' => $session->get('id_user'),
				'username' => $this->request->getVar('username'),
				'password' => $this->request->getVar('password')
			]);

			$teacher=$this->teacher->getTeacher($session->get('id_teacher'));
					$newdata=[
						'nama_teacher' =>$this->request->getVar('nama_teacher'),
						'username' => $this->request->getVar('username'),
						'password' => $this->request->getVar('password'),
						'id_teacher' => $session->get('id_teacher'),
						'role' => $session->get('role'),
						'id_user' =>$session->get('id_user')
					];
					$session->set($newdata);
		}
		
		return view('belajar/profile');
	}
	// public function delete($data)
	// {
	// 	$this->materi->delete($data);

	// //	session()->setFlashdata('pesan','Data berhasil dihapus');
	// 	return redirect()->to('/materi');
	// }

	// public function create(){
	// 	$data=[
	// 		'title' => 'Form Tambah Data Level',
	// 		'paket' => $this->paket->getPaket()
	// 		//'validation' => \Config\Services::validation()
	// 	];
	// 	return view('/materi/create', $data);
	// }
	// public function save()
	// {

	// 	$filefoto= $this->request->getFile('materi');
	// 	$namaFile=$filefoto->getName();
	// 	//mindahin file
	// 	$filefoto->move('image', $namaFile);
		
	// 	$this->materi->save([
	// 		'id_paket' => $this->request->getVar('id_paket'),
	// 		'materi' => $namaFile
	// 	]);
	// 	//session()->setFlashdata('pesan','Data berhasil ditambahkan');
	// 	return redirect()->to('/materi');
	// }
	// public function edit($id_materi){
	// 	$data=[
	// 		'validation'=> \Config\Services::validation(),
	// 		'paket' => $this->paket->getPaket(),
	// 		'materi'=> $this->materi->getMateri($id_materi)
			
	// 	];
	// 	return view('/materi/edit',$data);
	// }

	// public function update($id_materi){
	// 	$fileLama = $this->materi->getMateri($id_materi);
		
	// 	$fileMateri=$this->request->getFile('materi');
	// 	if($fileMateri->getError()!=4){
	// 		$fileMateri->move('image');
	// 		$namaFile=$fileMateri->getName();
	// 		unlink('image/'.$this->request->getVar('materiLama'));
			
	// 	}else{
	// 		$namaFile=$this->request->getVar('materiLama');
	// 	}
	// 	$this->materi->save([
	// 		'id_materi' => $id_materi,
	// 		'id_paket' => $this->request->getVar('id_paket'),
	// 		'materi' => $namaFile
	// 	]);
	// 	return redirect()->to('/materi');
	// }
	

}
