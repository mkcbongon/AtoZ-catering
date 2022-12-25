<?php

namespace App\Models;
use CodeIgniter\Model;

class Package_model extends Model
{
    protected $table = 'packages';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['item', 'details', 'accommodation', 'status', 'price', 'img'];
    protected $returnType = 'array';

}

?>
