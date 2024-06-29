<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_product extends Model
{
    use HasFactory;


    protected $fillable = [
        'admin_id', 'product_id','activeStatus','invest_id','quantity','productPrice','grandTotal','discount','coupon','netAmount'
    ];



    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }


}
