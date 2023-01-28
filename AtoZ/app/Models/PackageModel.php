<?php

namespace App\Models;
use CodeIgniter\Model;

class PackageModel extends Model
{
    protected $table = 'package';
    protected $primaryKey = 'package_id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = [
        'user_id', 
        'select_id', 
        'availability',
        'total', 
    ];
    protected $returnType = 'array';

}
?>