<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'cart_id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['package_id', 
    'image', 
    'package_name', 
    'availability', 
    'order_stat', 
    'client', 
    'contact', 
    'address', 
    'quantity', 
    'total'
    ];
    protected $returnType = 'array';

}

?>
