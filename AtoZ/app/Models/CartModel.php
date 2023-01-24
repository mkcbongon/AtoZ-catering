<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['package_id', 'img', 'item', 'item_stat', 'order_stat', 'client', 'contact', 'address', 'quantity', 'price'];
    protected $returnType = 'array';

}

?>
