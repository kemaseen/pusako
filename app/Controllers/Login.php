<?php
 
namespace App\Controllers;
 
use App\Controllers\BaseController;
use App\Models\UserModel;
 
class Login extends BaseController
{
    public function index()
    {
        return view('dashboard/login');
    } 
   
    public function authenticate()
    {
        $session = session();
        $userModel = new UserModel();
 
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
         
        $user = $userModel->where('email', $email)->first();
 
        if(is_null($user)) {
            return redirect()->back()->withInput()->with('erroremail', 'Invalid username.');
        }
 
        $pwd_verify = password_verify($password, $user['password']);
 
        if(!$pwd_verify) {
            return redirect()->back()->withInput()->with('errorpass', 'Invalid password for Email : <code>'.$email.'</code>');
        }
 
        $ses_data = [
            'id' => $user['id'],
            'email' => $user['email'],
            'isLoggedIn' => TRUE
        ];
 
        $session->set($ses_data);
        return redirect()->to('/admin');
         
        
    }
 
    public function logout() {
        session_destroy();
        return redirect()->to('/admin/login');
    }
}