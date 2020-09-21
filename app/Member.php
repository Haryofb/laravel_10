<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    //whitelist
    protected $fillable = ['name', 'detail'];

    //blacklist
    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    //created_at & update_id tidak terpakai
    //public $timestamps=false;


    public function position()
    {
        return $this->belongsTo('App\Position');
    }
}