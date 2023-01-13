<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\AdminModel;
  
class AdminController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
    public function dashboard()
    {
        $builder =  new AdminModel();
        $data['booking'] = $builder->selectCount('id','totalbooking')->first();
        return view('admin/dashboard', $data);
        
    }
    public function display_bookings(){
        return view('admin/bookings');
    }
    public function add_package()
    {
        return view('admin/package');
    }
}