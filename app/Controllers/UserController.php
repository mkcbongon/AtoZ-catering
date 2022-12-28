<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class UserController extends Controller
{

    public function index() {
        return view('user/index');
    }
    public function about() {
        return view('user/about');
    }
      
    
    public function shop() {
        return view('user/shop');
    }   
   

    public function table() {
        $model = new Auth_model();
        $users = $model->findAll();
        return view('user/table', ['users'=>$users]);
    }


    
}