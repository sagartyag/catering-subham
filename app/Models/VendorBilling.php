<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorBilling extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 


   public function userProduct()
    {
        return $this->hasMany('App\Models\User_product','invest_id');
    }

    protected $fillable = [
        
        'user_id',         
       'category_id', 
        'name', 
        'email', 
        'address',
        'product_id','mode'	
    ];
}
