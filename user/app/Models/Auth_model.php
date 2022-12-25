<?php

namespace App\Models;
use CodeIgniter\Model;

class Auth_model extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['lastname', 'firstname', 'email', 'password', 'usertype', 'created_at'];
    protected $returnType = 'array';

}

?>
