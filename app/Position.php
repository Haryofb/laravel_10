<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    protected $fillable = ['name,department_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function employee()
    {
        return $this->hasMany('App\Employee');
    }
    public function member()
    {
        return $this->hasMany('App\Employee');
    }
}