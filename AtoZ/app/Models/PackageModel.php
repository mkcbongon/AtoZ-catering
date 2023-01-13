<?php

namespace App\Models;
use CodeIgniter\Model;

class PackageModel extends Model
{

<<<<<<< HEAD
    protected $table = 'package';
    protected $primaryKey = 'package_id';
    protected $allowedFields = ['package_name', 'package_details', 'package_amount', 'package_image', 'package_availability'];
=======
    protected $table = 'package_tb';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['packagename', 'goodfor', 'description', 'price', 'image'];
>>>>>>> parent of 6765f64 (new path)

    
}
?>