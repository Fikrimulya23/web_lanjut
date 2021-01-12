<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\BukuModel;
use App\Models\UserModel;
use App\Models\TransaksiModel;
use App\Models\pinjamModel;
use mysqli;

class Index extends BaseController{
    
    public function __construct() 
    {
        $session = session();
        $this->book = new BukuModel();
        $this->user = new UserModel();
        $this->transaksi = new TransaksiModel();
        $this->transaksi = new pinjamModel();
    }
    
    public function cariBuku(){

        $data['book'] = $this->book->getBook();
        $dataUser['user'] = $this->user->getUser();

        echo view('templates/header', $dataUser);
        echo view('user/cariBuku', $data, $dataUser);
        echo view('templates/footer');
    }
    public function bukuSaya(){
        $data['book'] = $this->book->getBook();
        $dataUser['user'] = $this->user->getUser();

        echo view('templates/header', $dataUser);
        echo view('user/bukuSaya', $data, $dataUser);
        echo view('templates/footer');
    }
    public function tentangSaya(){
        $data['book'] = $this->book->getBook();
        $dataUser['user'] = $this->user->getUser();

        echo view('templates/header', $dataUser);
        echo view('user/tentangSaya', $data, $dataUser);
        echo view('templates/footer');
    }
    public function isiSaldo(){
        $data['book'] = $this->book->getBook();
        $dataUser['user'] = $this->user->getUser();

        echo view('templates/header', $dataUser);
        echo view('user/isiSaldo', $data, $dataUser);
        echo view('templates/footer');
    }
    public function lihatBuku(){
        $data['book'] = $this->book->getBook();
        $dataUser['user'] = $this->user->getUser();

        echo view('templates/header', $dataUser);
        echo view('user/lihatBuku', $data, $dataUser);
        echo view('templates/footer');
    }

    public function edit($id) {
        //memanggil function getBook($id)
        $data['book'] = $this->book->getBook($id);
        //mengirim data ke view

        return view('Index/cariBuku', $data);
    }

    public function update($id) {

        $connect = new mysqli("localhost", "root", "", "uts_web");

        $sql = "UPDATE book SET Jumlah=Jumlah-1 WHERE id=$id";

        if(mysqli_query($connect, $sql)) {
            
                session()->setFlashdata('info', 'Berhasil meminjam buku');

                return redirect()->to(base_url('cariBuku'));
            
        }
    }

}