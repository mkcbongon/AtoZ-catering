<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\PackageModel;
use App\Models\CartModel;
use App\Models\FoodModel;
use App\Models\UserModel;
  
class UserController extends Controller
{
    public function index()
    {
       return view('user/index');
    }

    public function menu(){
        $model = new FoodModel();
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
        $food = new FoodModel();
        $user = new UserModel();
        $cart = new CartModel();
        $session = session();
        if($username = session()->get('username')){
            $item =  $this->request->getPost('food_id');
            $data = [
                'user' => $user->where('username', $username)->first(),
                'item' => $food->where('food_id', $item)->first()
            ];
            $select = $cart->where(array('food_id' => $item, 'client' => $data['user']['user_id'], 'order_stat' => 'PENDING'))->first();
            if($select) {
                $set = [
                    'quantity' => $select['quantity'] + 1
                  ];
                  $cart->set($set)->where('cart_id', $select['cart_id'])->update();
            } 
            else {
                $add = [
                'food_id' => $item,
                'image'    => $data['item']['image'],
                'food_name'    => $data['item']['food_name'],
                'availability'    => $data['item']['availability'],
                'amount'    => $data['item']['amount'],
                'client'    => $data['user']['user_id']
              ];
              $cart->save($add);
            }
            return json_encode( $data);
        }
    }


    public function addqty() {
        $user = new FoodModel();
        $user = new UserModel();
        $cart = new CartModel();
        $session = session();
        if($username = session()->get('username')){
            $cartid =  $this->request->getPost('cart_id');
            $qty =  $this->request->getPost('qty');
                $set = [
                    'quantity' => $qty
                  ];
                  $cart->set($set)->where('cart_id', $cartid)->update();
            return json_encode( $qty);
        }
    }

    
}