<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\MotivasiModel;
use App\Models\JoinModel;

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
    //$isi = $join->getData();
    $isi = $model->findAll();
    $data = [
      'judul' => 'Webprograming | Zam.Dev',
      'motivasi' => $isi
    ];
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
    return view('Crud/register');
  }
  // insert data 
  public function save()
  {
    $model = new MotivasiModel();
    $model->save([
      'Nama' => $this->request->getVar('Nama'),
      'Hobi' => $this->request->getVar('Hobi'),
      'Motivasi' => $this->request->getVar('Motivasi'),
    ]);
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
    $data['isi'] = $model->find($id);
    // $data = [
    //   'hasil' => $model->__get($id)
    // ];
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
    ]);
    //kirim pesan jika data berhasil ditambah
    session()->setFlashdata('pesan', 'MOTIVASIMU BERHASIL DI UBAH ');
    return redirect()->to('/Crud/data');
  }
}
