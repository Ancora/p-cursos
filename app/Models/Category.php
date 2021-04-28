<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /* Popular tabela massivamente */
    protected $guarded = ['id'];

    /* RELACIONAMENTOS */
    /* 1:N */
    public function courses() {
        return $this->hasMany('App\Models\Course');
    }
}
