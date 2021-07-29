<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    use HasFactory;
    protected $fillable  = ['carrier','amount','number','email','user_id'];
}
