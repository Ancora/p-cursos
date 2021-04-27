<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /* Popular tabela massivament */
    protected $guarded = ['id', 'status'];

    const OPEN      = 1;
    const REVISION  = 2;
    const PUBLISHED = 3;

}
