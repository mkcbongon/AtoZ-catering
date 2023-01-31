<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\AdminModel;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('username');
    }
    public function dashboard()
    {
       

        $builder =  new AdminModel();
        $data['booking'] = $builder->selectCount('id','totalbooking')->first();
        return view('admin/dashboard', $data);
        
    }
}