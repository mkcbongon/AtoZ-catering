<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class GuestController extends Controller
{
    public function index()
    {
       return view('guest/index');
    }
    
}