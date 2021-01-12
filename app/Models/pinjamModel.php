<?php namespace App\Models;

use CodeIgniter\Model;

class pinjamModel extends Model
{
    protected $table = "peminjaman";

    public function getPeminjaman($id = false)
    {
        if ($id === false) {
            return $this->table('peminjaman')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('peminjaman')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }
    }
}