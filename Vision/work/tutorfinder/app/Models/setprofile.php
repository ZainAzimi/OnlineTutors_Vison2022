<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setprofile extends Model
{
    use HasFactory;

    
    protected $table="setprofile";

    protected $fillable=['user_id','user_name','user_email','tutor_pic_path','tutor_name','tutor_email','plan'];
}
