<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName', 'productPrice','productDiscountPrice','ProductCoupon','ProductDiscription','user_id','quantity','invest_id','product_id','active_from'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
