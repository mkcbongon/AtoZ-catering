<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\PackageModel;
  
class AdminController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
    }
    public function dashboard()
    {
        $builder =  new AdminModel();
        $data['booking'] = $builder->selectCount('id','totalbooking')->first();
        return view('admin/dashboard', $data);
        
    }
    public function display_bookings(){
        return view('admin/bookings');
    }
    public function add_package()
    {
        return view('admin/package');
    }

    public function new_package()
    {
        $package_name = $this->request->getPost('package_name');
        $package_details = $this->request->getPost('package_details');
        $package_amount = $this->request->getPost('package_amount');
        $package_image = $this->request->getFile('package_image');
        $package_availability = $this->request->getPost('package_availability');

        $package_image->move(FCPATH . 'uploads');
        $pakage_data = [
            'package_name' => $package_name,
            'package_details' =>$package_details,
            'package_amount' => $package_amount,
            'package_image' => $package_image->getClientName(),
            'package_availability' => $package_availability
            
        ];

            $model = new PackageModel();
            $model->save($pakage_data);

            if(!$model){
                return redirect()->back()->with('fail, something went wrong!');
            }
            else{
                
                return redirect()->to("package")->with('success', 'Successfully Added!');
                
            }
    }
}