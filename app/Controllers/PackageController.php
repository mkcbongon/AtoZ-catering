<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\PackageModel;
  
class PackageController extends Controller
{
    public function add_package(){

        $packagename = $this->request->getPost('packagename');
        $goodfor = $this->request->getPost('goodfor');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');
        $image = $this->request->getFile('image');
      

       
        $image->move(FCPATH . 'uploads');
        $pakage_data = [
            'packagename' => $packagename,
            'goodfor' =>$goodfor,
            'description' => $description,
            'price' => $price,
            'image' => $image->getClientName()
            
        ];

            $model = new PackageModel();
            $model->save($pakage_data);

            if(!$model){
                return redirect()->back()->with('fail, something went wrong!');
            }
            else{
                
                return redirect()->to("packageDisplay")->with('success', 'Successfully Added!');
                
            }
    }

    public function packageDisplay()
    {
        $pack = new PackageModel();
        $package_data = [
            'package' =>$pack->findAll()
        ];
        
        return view('page/addPackage', $package_data);

    }

    public function package_data(){
        $pack_model = new PackageModel();
        $data = [
            'package' => $pack_model->findAll()
        ];

        return view('page/addBookings', $data);

    }
    
    
}