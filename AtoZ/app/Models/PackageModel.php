<?php

namespace App\Models;
use CodeIgniter\Model;

class PackageModel extends Model
{

    protected $table = 'package_tb';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['packagename', 'goodfor', 'description', 'price', 'image'];

    
}
?>