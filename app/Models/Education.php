<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];

    public function education(){
        return $this->hasOne(Level::class,'id','level_id');
    }
}
