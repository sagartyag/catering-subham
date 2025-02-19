<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'productName', 'productPrice','productDiscountPrice','ProductCoupon','ProductDiscription','image','activeStatus','category_id','categoryname',
    ];

}
