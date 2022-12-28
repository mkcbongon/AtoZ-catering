<?php

namespace App\Controllers;
use App\Models\Package_model;
use App\Models\Cart_model;
use App\Models\Auth_model;


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


    public function addtocart() {
        $model = new Package_model();
        $user = new Auth_model();
        $cart = new Cart_model();
        $session = session();
        if($email = session()->get('email')){
            $item =  $this->request->getPost('id');
            $data = [
                'user' => $user->where('email', $email)->first(),
                'item' => $model->where('id', $item)->first()
            ];
            $select = $cart->where(array('package_id' => $item, 'client' => $data['user']['id'], 'order_stat' => 'PENDING'))->first();
            if($select) {
                $set = [
                    'quantity' => $select['quantity'] + 1
                  ];
                  $cart->set($set)->where('id', $select['id'])->update();
            } 
            else {
                $add = [
                'package_id' => $item,
                'img'    => $data['item']['img'],
                'item'    => $data['item']['item'],
                'product_stat'    => $data['item']['status'],
                'price'    => $data['item']['price'],
                'client'    => $data['user']['id']
              ];
              $cart->save($add);
            }
            return json_encode( $data);
        }
    }


    public function addqty() {
        $model = new Package_model();
        $user = new Auth_model();
        $cart = new Cart_model();
        $session = session();
        if($email = session()->get('email')){
            $cartid =  $this->request->getPost('id');
            $qty =  $this->request->getPost('qty');
                $set = [
                    'quantity' => $qty
                  ];
                  $cart->set($set)->where('id', $cartid)->update();
            return json_encode( $qty);
        }
    }


    public function request() {
        return view('request');
    } 
}
