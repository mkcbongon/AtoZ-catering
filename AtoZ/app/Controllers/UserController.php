<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\PackageModel;
  
class UserController extends Controller
{
    public function index()
    {
       return view('user/index');
    }
    public function menu(){
        $model = new PackageModel();
        $data=[
            'item' => $model->findAll()
        ];
        return view('user/menu', $data);
    }
    
}