<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\PackageModel;
use App\Models\CartModel;
use App\Models\FoodModel;
use App\Models\UserModel;
use App\Models\CategoryModel;
use App\Models\ReservationModel;
  
  
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
            $item =  $this->request->getPost('id');
            $data = [
                'user' => $user->where('username', $username)->first(),
                'item' => $food->where('id', $item)->first()
            ];
            $select = $cart->where(array('id' => $item, 'client' => $data['user']['id']))->first();
            if($select) {
                $set = [
                    'quantity' => $select['quantity'] + 1
                  ];
                  $cart->set($set)->where('id', $select['id'])->update();
            } 
            else {
                $add = [
                'food_id' => $item,
                'image'    => $data['item']['image'],
                'food_name'    => $data['item']['food_name'],
                'availability'    => $data['item']['availability'],
                'amount'    => $data['item']['amount'],
                'client'    => $data['user']['username']
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

    public function reservation(){

        $package = new PackageModel();
        $category = new CategoryModel();
                $package_data = [
                    'package'=>$package->findAll(),
                    'category' =>$category->findAll()
                ];
                
        return view('user/reservation', $package_data);
        
    }

    public function insert_reservation(){
        helper(['form']);
        // $rules = [
        //     'username'          => 'required|min_length[2]|max_length[50]|is_unique[users.username]',
        //     'email'         => 'required|min_length[4]|max_length[100]|valid_email',
        //     'password'      => 'required|min_length[4]|max_length[50]',
        //     'confirmpassword'  => 'matches[password]'
        // ];
          
        // if($this->validate($rules)){

            $reservation = new ReservationModel();
            $user = new UserModel();
            $data = [
                
                'user_id'     => session()->get('user_id'),
                'lastname'     => $this->request->getVar('lastname'),
                'firstname'     => $this->request->getVar('firstname'),
                'date_start'     => $this->request->getVar('date_start'),
                'date_end'     => $this->request->getVar('date_end'),
                'email'    => $this->request->getVar('email'),
                'contact'     => $this->request->getVar('contact'),
                'event_id'     => $this->request->getVar('event_id'),
                'pax'     => $this->request->getVar('pax'),
                'package_id'     => $this->request->getVar('package_id'),
                'note'     => $this->request->getVar('note'),
                
            ];
            $reservation->save($data);
            return redirect()->to('/reservation');





        // }else{
        //     $data['validation'] = $this->validator;
        //     echo view('auth/signup', $data);
        // }
    }

    
}