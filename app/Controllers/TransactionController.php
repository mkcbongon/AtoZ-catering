<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\TransactionModel;
use App\Models\PackageModel;
class TransactionController extends Controller
{
    public function AllBookings()
    {
        return view('page/AllBookings');
       
    }
    public function addBookings()
    {
        $pack_model = new PackageModel();
        $data = [
            'package' => $pack_model->findAll()
        ];
        return view('page/addBookings', $data);
    }

    public function add_Bookings(){

        $customer = $this->request->getPost('customer');
        $datestart = $this->request->getPost('datestart');
        $dateend = $this->request->getPost('dateend');
        $eventname = $this->request->getPost('eventname');
        $package = $this->request->getPost('package');
        $qnty = $this->request->getPost('qnty');
        $location = $this->request->getPost('location');
        $downpayment = $this->request->getPost('downpayment');
        $paymentStatus = $this->request->getPost('paymentStatus');
      

        $trans_data = [
            'customer' => $customer,
            'datestart' =>$datestart,
            'dateend' => $dateend,
            'eventname' => $eventname,
            'package' => $package,
            'qnty' => $qnty,
            'location' => $location,
            'downpayment' => $downpayment,
            'paymentStatus' => $paymentStatus
        ];

            $model = new TransactionModel();
            $model->save($trans_data);

            if(!$model){
                return redirect()->back()->with('fail, something went wrong');
            }
            else{
                
                return redirect()->to("addBookings")->with('success', 'Successfully Added');
                
            }
    }
    public function BookingsData()
    {
        $book = new TransactionModel();
        $data = [
            'bookings' =>$book->findAll()
        ];
        
        return view('page/AllBookings', $data);

    }

    public function addPackage()
    {
        return view('page/addPackage');
    }
    
    

   


}