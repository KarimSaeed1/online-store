<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['pro_name','pro_code','pro_price','pro_info','image','spl_price','stock','category_id'];
}
