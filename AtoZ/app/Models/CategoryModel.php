<?php

namespace App\Models;
use CodeIgniter\Model;

class CategoryModel extends Model
{

    protected $table = 'event_type';
    protected $primaryKey = 'event_id';
    protected $allowedFields = ['event_name', 'details'];

   
}
?>