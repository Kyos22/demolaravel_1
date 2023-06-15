<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

    protected $table = 'invoice';
    protected $primarykey = 'id';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'name',
        'payment',
        'status',
        'total',
        'created',
        'photo'
        
    ]; //mảng chứa tên cột

}