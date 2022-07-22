<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Вид_удостоверения extends Model
{
    use HasFactory;
    protected $table='Вид_удостоверения';
    protected $primaryKey = 'idВид_удостоверения';
}
