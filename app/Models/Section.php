<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /* Popular tabela massivamente */
    protected $guarded = ['id'];

    /* RELACIONAMENTOS */
    /* 1:N inversa */
    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

    /* 1:N */
    public function lessons() {
        return $this->hasMany('App\Models\Lesson');
    }
}
