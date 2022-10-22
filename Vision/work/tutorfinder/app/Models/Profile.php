<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table="profile";

    protected $fillable=['image','user_id','subject','experience','shortintro','detailintro','basicplantime','basicplanprice','standardplantime','standardplanprice','premiumplantime','premiumplanprice','user_name','user_email'];
}
