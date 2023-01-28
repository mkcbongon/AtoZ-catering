<?php

namespace App\Models;
use CodeIgniter\Model;

class FoodModel extends Model
{
    protected $table = 'food';
    protected $primaryKey = 'food_id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = [
        'food_name', 
        'details', 
        'image', 
        'amount', 
        'availability',
    ];
    protected $returnType = 'array';

}

?>
