<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Client;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        return view('Auth/signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'first_name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[clients.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if(!$this->validate($rules)){
            $data['validation'] = $this->validator;
            return view('Auth/signup', $data);
        }

        $userModel = new Client();
        $data = [
            'first_name'     => $this->request->getVar('first_name'),
            'email'    => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $userModel->save($data);

        return redirect()->to('/signin');
    }
  
}