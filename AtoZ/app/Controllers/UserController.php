<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\PackageModel;
use App\Models\CartModel;
  
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
        return view('user/menu_old', $data);
    }

    public function cart() {
        $cart = new CartModel();
        $data = [
            'cart' => $cart->findAll()
        ];
        return view('user/cart', $data);
    }

    public function addtocart() {
        $model = new PackageModel();
        $user = new UserModel();
        $cart = new CartModel();
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
                'img'    => $data['item']['package_img'],
                'item'    => $data['item']['package_name'],
                'item_stat'    => $data['item']['package_availability'],
                'price'    => $data['item']['package_amount'],
                'client'    => $data['user']['id']
              ];
              $cart->save($add);
            }
            return json_encode( $data);
        }
    }

    public function addqty() {
        $model = new PackageModel();
        $user = new UserModel();
        $cart = new CartModel();
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

    
}