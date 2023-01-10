<?php

namespace App\Models;
use CodeIgniter\Model;

class TransactionModel extends Model
{

    protected $table = 'transaction_tb';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['customer', 'datestart', 'dateend', 'eventname', 'package', 'qnty', 'location', 'downpayment', 'paymentStatus', 'status'];

    // function deleterecords($id)
	// {
	//     $this->db->query("delete  from transaction_tb where ID='".$id."'");
	// }	

    // public function getData_query(){
    //     $this->db->select('date');
    //     $this->db->from('transaction_tb');
    //     return $this->db->get();
    // }
}
?>