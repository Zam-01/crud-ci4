<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\MotivasiModel;
use App\Models\SkilModel;

class Crud extends BaseController
{
  public function home()
  {
    $data = [
      'judul' => 'Webprograming | Zam.Dev'
    ];
    return view('Crud/home', $data);
  }
  public function about()
  {
    $data = [
      'judul' => 'Webprograming | Zam.Dev'
    ];
    return view('Crud/about', $data);
  }
  public function data()
  {
    $model = new MotivasiModel();
    $data['test'] = $model
      ->select('*')
      ->join('skill', 'skill.id_skil = test.id_skil')
      ->findAll();
    $data['judul'] = 'Webprograming | Zam.Dev';
    return view('Crud/data', $data);
  }
  public function contac()
  {
    $data = [
      'judul' => 'Webprograming | Zam.Dev'
    ];
    return view('Crud/contac', $data);
  }

  public function login()
  {
    $join = new SkilModel();
    $data['join'] =
      $join->findAll();
    return view('Crud/register', $data);
  }
  // insert data 
  public function save()
  {
    $model = new MotivasiModel();
    // $join = new SkilModel();
    $model->save([
      'Nama' => $this->request->getVar('Nama'),
      'Hobi' => $this->request->getVar('Hobi'),
      'Motivasi' => $this->request->getVar('Motivasi'),
      'id_skil'  => $this->request->getVar('id_skil')
    ]);
    // $join->save([
    // 'id_skil' => $this->request->getVar('id_skil')
    //]);
    //kirim pesan jika data berhasil ditambah
    session()->setFlashdata('pesan', 'WAW ,MOTIVASIMU KEREN ');
    return redirect()->to('/Crud/data');
    //dd($this->request->getVar());
  }
  //hapus data 
  public function hapus($id)
  {
    $model = new MotivasiModel();
    $hapus = $model->delete($id);
    if ($hapus) {
      session()->setFlashdata('pesan', 'Data berhasil di hapus');
      return redirect()->to('/Crud/data');
    } else {
      echo " data tidak bisa dihapus";
    }
  }
  //edit data
  public function edit($id)
  {
    $model = new MotivasiModel();
    $skil = new SkilModel();
    $data['skil'] = $skil->findAll();
    $data['isi'] = $model->find($id);
    return view('Crud/edit', $data);
  }
  //update
  public function update($id)
  {
    $model = new MotivasiModel();
    $model->save([
      'id' => $id,
      'Nama' => $this->request->getVar('Nama'),
      'Hobi' => $this->request->getVar('Hobi'),
      'Motivasi' => $this->request->getVar('Motivasi'),
      'id_skil'  => $this->request->getVar('id_skil')
    ]);
    //kirim pesan jika data berhasil ditambah
    session()->setFlashdata('pesan', 'MOTIVASIMU BERHASIL DI UBAH ');
    return redirect()->to('/Crud/data');
  }
}
