<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    public function institution(){
        return $this->belongsTo('App\Models\Institution', 'inst_id');
    }

    public function position(){
        return $this->belongsTo('App\Models\Position', 'pos_id');
    }



}
