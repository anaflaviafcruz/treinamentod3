<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaiAdotivo extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','address','cpf', 'phone'];
}
