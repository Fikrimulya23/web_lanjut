<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel2 extends Model{
    protected $table = 'user';
    
    protected $allowedFields = ['nama','email','password','saldo'];
}
?>