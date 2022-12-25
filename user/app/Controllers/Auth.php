<?php

namespace App\Controllers;
use App\Models\Auth_model;

class Auth extends BaseController
{
    public function register() {
        //get
        if($this->request->getMethod()=="get") {
            echo view('register');
        }
        else if($this->request->getMethod()=="post") {
            if($this->validate([
                "lastname"=>"required",
                "firstname"=>"required",
                "email"=>"required|valid_email",
                "password"=>"required|min_length[5]|max_length[50]",
                "cpassword"=>"matches[password]"])) {
                
                //submit the form
                $lastname=$this->request->getVar("lastname");
                $firstname=$this->request->getVar("firstname");
                $email=$this->request->getVar("email");
                $password=$this->request->getVar("password");
                $cpassword=$this->request->getVar("cpassword");
                $usertype=$this->request->getVar("usertype");

                //save data using model
                $data = [
                    "lastname" => $lastname,
                    "firstname" => $firstname,
                    "email" => $email,
                    "password" => password_hash($password, PASSWORD_BCRYPT),
                    "usertype" => $usertype];

                $model = new Auth_model();
                $model->insert($data);

                $session = session();
                $session->set("success_message", "User Registered Successfully!");
                $session->markAsFlashdata('success_message');

                return view('login');
            }
            else {
                return redirect()->back()->withInput();
            }
        }

        //post
    }
    public function login() {
        if($this->request->getMethod()=="get") {
            echo view('login');
        }
        else if($this->request->getMethod()=="post") {
            //validate
            if($this->validate([
                "email"=>"required|valid_email",
                "password"=>"required"])) {
                $model = new Auth_model();
                $record = $model->where("email", $this->request->getVar("email"))
                ->where("password", $this->request->getVar("password"))
                ->first();
                $session = session();
                if(! is_null($record)) {
                    //data found at databse
                    $sess_data = [
                        "firstname"=>$record['firstname'],
                        "email"=>$record['email'],
                        "usertype"=>$record['usertype'],
                        "logged"=>'logged'
                    ];
                    $session->set($sess_data);
                    if ($record['usertype']=='CLIENT') {
                        //go to CLIENT page
                        $url="user_package";
                    }
                    else if ($record['usertype']=='ADMIN') {
                        //go to ADMIN page
                        $url="table";
                    }
                    return redirect()->to(base_url($url));
                }
                else {
                    $session->set("failed_message", "User not found");
                    $session->markAsFlashdata('failed_message');
                    return redirect()->back()->withInput();
                }
            }
            else {
                return redirect()->back()->withInput();
            }
        }
    }

    public function logout() {
        $session=session();
        session_unset();
        session_destroy();
        return redirect()->to(base_url('index'));
    }
}
