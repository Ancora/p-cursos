<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    /* Popular tabela massivamente */
    protected $guarded = ['id'];

    /* RELACIONAMENTOS */
    /* 1:N inversa */
    public function course() {
        return $this->belongsTo('App\Models\Course');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
