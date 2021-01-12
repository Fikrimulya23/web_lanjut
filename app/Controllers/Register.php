<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\UserModel2;

class Register extends BaseController {
    
    public function index() {
        helper(['form']);
        $data = [];
        
        echo view('templates/authHeader');
        echo view('auth/register', $data);
        echo view('templates/authFooter');
    }

    public function save() {
        helper(['form']);
        $rules = [
            'nama'          => 'required|trim',
            'email'         => 'required|valid_email',
            'password'      => 'required',
            'confpassword'  => 'matches[password]'
        ];

        if($this->validate($rules)) {
            $model = new UserModel2();
            $data = [
                'nama'      => $this->request->getVar('nama'),
                'email'     => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}

?>