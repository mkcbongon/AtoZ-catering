<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['food_id', 
    'food_name', 
    'image', 
    'availability', 
    'order_stat', 
    'amount',
    'client', 
    'contact', 
    'address', 
    'quantity', 
    'total'
    ];
    protected $returnType = 'array';

}

?>
