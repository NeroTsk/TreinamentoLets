<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = ['firstName','lastName','email'];
}
