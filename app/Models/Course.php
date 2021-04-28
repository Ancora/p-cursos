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

    /* RELACIONAMENTOS */
    /* 1:N Inversa */
    public function level() {
        return $this->belongsTo('App\Models\Level');
    }

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function price() {
        return $this->belongsTo('App\Models\Price');
    }

    public function teacher() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /* 1:N */
    public function opinions() {
        return $this->hasMany('App\Models\Opinion');
    }

    public function requirements() {
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals() {
        return $this->hasMany('App\Models\Goal');
    }

    public function audiences() {
        return $this->hasMany('App\Models\Audience');
    }

    public function sections() {
        return $this->hasMany('App\Models\Section');
    }

    /* N:N */
    public function students() {
        return $this->belongsToMany('App\Models\User');
    }

    /* 1:1 polimórfica */
    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    /* 1:N com Model intermediário */
    /* Model intermediário: Section */
    public function lessons() {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
