<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserMenuModel extends Model{

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['item', 'details', 'accommodation', 'status', 'price', 'img'];
    protected $returnType = 'array';
}