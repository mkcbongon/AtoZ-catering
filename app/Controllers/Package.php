<?php

namespace App\Controllers;
use App\Models\Package_model;
use App\Models\Cart_model;

class Package extends BaseController
{
    public function packages() {
        $model = new Package_model();
        $data = [
            'item' => $model->findAll()
        ];
        return view('packages', $data);
    } 
    public function search($id = null) {
        $model = new Package_model();
        $data = $model->where('id', $id)->first();
        var_dump($data);
    }

    public function user_package() {
        $model = new Package_model();
        $data = [
            'item' => $model->findAll()
        ];
        return view('user_package', $data);
    }

    // public function addToCart() {
    //     $cart = new Cart_model();
    //     if($this->request->getMethod() == 'post') {
    //         $retunarr = array();
    //         $package_id = $this->request->getVar('package_id');
    //         $client = $this->request->getVar('client');
    //         $data = array(
    //             //
    //         )
    //     }
    // }

    public function cart() {
        
        $cart = new Cart_model();
        $data = [
            'cart' => $cart->findAll()
        ];
        return view('cart', $data);
    }
}
