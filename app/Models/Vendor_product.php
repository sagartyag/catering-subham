<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor_product extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'product_id','activeStatus','invest_id','quantity','productPrice','grandTotal','discount','coupon','netAmount','remaining_quantity'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Vproduct', 'product_id');
    }
}
