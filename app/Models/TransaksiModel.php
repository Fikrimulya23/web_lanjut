<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = "transaksi";

    public function getTransaksi($id = false)
    {
        if ($id === false) {
            return $this->table('transaksi')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('transaksi')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }
    }
}