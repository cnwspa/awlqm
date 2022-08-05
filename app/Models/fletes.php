<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fletes extends Model
{
    use HasFactory;

    const ACTIVO =1;
    const TERMINADO =2;
    const PAGADO =3;
}
