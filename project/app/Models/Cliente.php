<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CLiente extends Model
{
    //use HasFactory;
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = ['Nombres', 'Apellidos','email','documento'];
    public $timestamps = false;
}
