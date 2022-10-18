<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User1 extends Model
{
    use HasFactory;
    protected $fillable =['id', 'first_name', 'last_name', 'age', 'address'];
}
