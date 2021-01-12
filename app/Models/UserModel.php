<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = "user";

    public function getUser($id = false) {
        if ($id == false) {
            return $this->table('user')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('user')
                        ->where('user', $id)
                        ->get()
                        ->getRowArray();
        }
    }
}