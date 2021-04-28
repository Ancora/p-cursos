<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /* Popular tabela massivamente */
    protected $guarded = ['id'];

    /* Especifica que possui relação polimórfica */
    public function commentable() {
        return $this->morphTo();
    }

    /* RELACIONAMENTOS */
    /* 1:N polimórfica */
    /* Um comentário pode ser comentado várias vezes */
    public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions() {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

    /* 1:N inversa */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
