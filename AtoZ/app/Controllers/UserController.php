<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class UserController extends Controller
{
    public function index()
    {
        echo view('user/user');
    } 

    public function menu() {
        $model = new Package_model();
        $data = [
            'item' => $model->findAll()
        ];
        return view('menu', $data);
    } 
    
}