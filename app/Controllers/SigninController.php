<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Client;
  

class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        return view('Auth/signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        
        $userModel = new Client();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if(!$authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'first_name' => $data['first_name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                
                return redirect()->to('/signin');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');

            return redirect()->to('/signin');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/signin');
    }
}