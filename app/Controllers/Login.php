<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\UserModel2;

class Login extends BaseController {

    public function index() {
        helper(['form']);
        
        echo view('templates/authHeader');
        echo view('auth/login');
        echo view('templates/authFooter');
    }

    public function auth() {
        $session = session();
        $model = new UserModel2();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass) {
                $ses_data = [
                    'id'        => $data['id'],
                    'nama'      => $data['nama'],
                    'level'     => $data['level'],
                    'email'     => $data['email'],
                    'logged_in' => true
                ];

                if ($data['level'] == 2){
                    $session->set($ses_data);
                return redirect()->to('/cariBuku');
                } else {
                    $session->set($ses_data);
                return redirect()->to('/adminIndex');
                }

                /* $session->set($ses_data);
                return redirect()->to('/cariBuku'); */
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}

?>