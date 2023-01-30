<?php

namespace App\Models;
use CodeIgniter\Model;

class Package extends Model
{

    protected $table = 'package';
    protected $primaryKey = 'package_id';
    protected $allowedFields = ['package_name', 'package_details', 'package_amount', 'package_image', 'package_availability'];

   
}
?>