<?php

namespace App\Models;
use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'reservation_id';
    protected $allowedFields = [
    
        'user_id',
        'lastname',
        'firstname',
        'date_start',
        'date_end',
        'email',
        'contact',
        'event_id',
        'pax',
        'package_id',
        'note',
        'reservation_status'
        
    ];

   
}
?>