<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    protected $fillable = ['name', 'detail'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function archive()
    {
        return $this->hasOne('App\Archive');
    }

    public function employee()
    {
        return $this->belongsToMany('App\Employee');
    }
}
