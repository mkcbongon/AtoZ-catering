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
        echo view('guest/about');
    } 
    public function service()
    {
        echo view('guest/guest_service');
    } 
    public function menu()
    {
        echo view('guest/menu');
    } 
    public function pages()
    {
        echo view('guest/pages');
    } 
    public function contact()
    {
        echo view('guest/contact');
    } 
    public function signin()
    {
        echo view('auth/signin');
    } 

    
}