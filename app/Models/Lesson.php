<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    /* Popular tabela massivamente */
    protected $guarded = ['id'];

    /* RELACIONAMENTOS */
    /* 1:N inversa */
    public function section() {
        return $this->belongsTo('App\Models\Section');
    }

    public function platform() {
        return $this->belongsTo('App\Models\Platform');
    }

    /* N:N */
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    /* 1:1 */
    public function description() {
        return $this->hasOne('App\Models\Description');
    }

    /* 1:1 polimórfica */
    public function resource() {
        return $this->morphOne('App\Modesl\Resource', 'resourceable');
    }

    /* 1:N polimórfica */
    public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions() {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
