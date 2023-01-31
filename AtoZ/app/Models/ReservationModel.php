<?php

namespace App\Models;
use CodeIgniter\Model;

class ReservationModel extends Model
{
    protected $table = 'package';
    protected $primaryKey = 'package_id';
    protected $allowedFields = [
        'reservation_id',
        'event_id',
        'user_id',
        'date_start',
        'date_end',
        'reservation_status',
        'reservations_remarks'
    ];

   
}
?>