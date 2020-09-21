<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    protected $fillable = ['name', 'detail', 'inventory_id'];

    protected $guarded = ['id'];

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function inventory()
    {
        return $this->belongsTo('App\Inventory');
    }
}