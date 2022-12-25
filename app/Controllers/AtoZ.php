<?php

namespace App\Controllers;
use App\Models\Auth_model;

class AtoZ extends BaseController
{
    public function index() {
        return view('index');
    }
    public function about() {
        return view('about');
    }
      
    public function shop() {
        return view('shop');
    }   
    public function contact() {
        return view('contact');
    } 
    public function table() {
        $model = new Auth_model();
        $users = $model->findAll();
        return view('table', ['users'=>$users]);
    }
}
