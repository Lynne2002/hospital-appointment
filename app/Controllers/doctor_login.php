<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\doctorsModel;
  
class doctor_login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('doctorlogin');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new doctorsModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    //'user_id'       => $data['user_id'],
                    'first_name'     => $data['first_name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/doctor');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('doctorlogin');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('doctorlogin');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('doctorlogin');
    }


	private function setUserSession($doctor){
		$data = [
			'user_id' => $doctor['user_id'],
			'first_name' => $doctor['first_name'],
			'last_name' => $doctor['last_name'],
            'doc_image' => $doctor['doc_image'],
			'email' => $doctor['email'],
			
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	
}