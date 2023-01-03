<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class GuestController extends Controller
{
    public function index()
    {
        echo view('guest/index');
    } 
    public function about()
    {
        echo view('user/about');
    } 
    public function service()
    {
        echo view('user/service');
    } 
    public function menu()
    {
        echo view('user/menu');
    } 
    public function pages()
    {
        echo view('user/pages');
    } 
    public function contact()
    {
        echo view('user/contact');
    } 

    
}