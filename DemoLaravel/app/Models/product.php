<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';
    protected $primarykey = 'id';
    public $timestamps = false; //nghĩa là trong bảng của tôi không cần thêm created at và cái 
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'status',
        'created',
        'photo'
    ]; //mảng chứa tên cột
    

}