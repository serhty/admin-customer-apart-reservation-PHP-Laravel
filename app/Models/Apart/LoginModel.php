<?php

namespace App\Models\Apart;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Authenticatable
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = ['username','password'];
}
