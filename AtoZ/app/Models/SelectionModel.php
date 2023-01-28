<?php

namespace App\Models;
use CodeIgniter\Model;

class SelectionModel extends Model
{
    protected $table = 'food_select';
    protected $primaryKey = 'select_id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = [
        'user_id', 
        'food_1', 'quan_1', 
        'food_2', 'quan_2', 
        'food_3', 'quan_3', 
        'food_4', 'quan_4', 
        'food_5', 'quan_5', 
        'food_6', 'quan_6', 
        'food_7', 'quan_7', 
        'food_8', 'quan_8', 
        'food_9', 'quan_9', 
        'food_10', 'quan_10', 
        'availability',
        'total' 
    ];
    protected $returnType = 'array';
}
?>
