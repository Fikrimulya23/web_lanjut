<?php namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model {
    protected $table = "book";

    public function getBook($id = false) {
        if ($id === false) {
            return $this->table('book')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('book')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }
    }

    public function insertBook($data) {
        return $this->db->table($this->table)->insert($data);
    } 

    public function updateBook($data, $id) {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteBook($id) {
    return $this->db->table($this->table)->delete(['id' => $id]);
} 
}