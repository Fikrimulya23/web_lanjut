<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\BukuModel;
use App\Models\TransaksiModel;

class Fikri extends BaseController{
    
    public function __construct() 
    {
        $this->book = new BukuModel();
        $this->transaksi = new TransaksiModel();
    }
    
    public function index(){
        $data['book'] = $this->book->getBook();

        echo view('templates/adminHeader', $data);
        echo view('admin/index', $data);
        echo view('templates/adminFooter', $data);
    }

    public function create(){
        $data['book'] = $this->book->getBook();

        echo view('templates/adminHeader', $data);
        echo view('admin/create', $data);
        echo view('templates/adminFooter', $data);
    }

    public function store() {
    // Mengambil value dari form dengan method POST
        $judul = $this->request->getPost('Judul');
        $deskripsi = $this->request->getPost('Deskripsi');
        $penulis = $this->request->getPost('Penulis');
        $jumlah = $this->request->getPost('Jumlah');
        $harga = $this->request->getPost('Harga');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'Judul' => $judul,
            'Deskripsi' => $deskripsi,
            'Penulis' => $penulis,
            'Jumlah' => $jumlah,
            'Harga' => $harga,
        ];
    
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->book->insertBook($data);
    
        // Jika simpan berhasil, maka ...
        if($simpan)
        {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Add a new book successfully');
            // Redirect halaman ke product
            return redirect()->to(base_url('Fikri')); 
        }
    }
    
    public function edit($id) {
        //memanggil function getBook($id)
        $data['book'] = $this->book->getBook($id);
        //mengirim data ke view

        //return view('Admin/edit', $data);
        echo view('templates/adminHeader', $data);
        echo view('admin/edit', $data);
        echo view('templates/adminFooter', $data);
    }

    public function update($id) {
        //mengambil nilai dari form dengan method POST
        $judul = $this->request->getPost('Judul');
        $deskripsi = $this->request->getPost('Deskripsi');
        $penulis = $this->request->getPost('Penulis');
        $jumlah = $this->request->getPost('Jumlah');
        $harga = $this->request->getPost('Harga');

        //membuat array untuk insert ke table
        $data = [
            'Judul' => $judul,
            'Deskripsi' => $deskripsi,
            'Penulis' => $penulis,
            'Jumlah' => $jumlah,
            'Harga' => $harga
        ];

        $ubah = $this->book->updateBook($data, $id);

        if($ubah) {
            session()->setFlashdata('info', 'Updated book successfully');

            return redirect()->to(base_url('Fikri'));
        }
    }

    public function delete($id) {
        // Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
        $hapus = $this->book->deleteBook($id);
        // Jika berhasil melakukan hapus
        if($hapus)
        {
                // Deklarasikan session flashdata dengan tipe warning
            session()->setFlashdata('warning', 'Deleted book successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('Fikri'));
        }
    }
    
    public function transaksi() {
        $data['book'] = $this->book->getBook();
        $data2['transaksi'] = $this->transaksi->getTransaksi();

        echo view('templates/adminHeader', $data);
        echo view('admin/transaksi', $data2);
        echo view('templates/adminFooter', $data);
    }

}