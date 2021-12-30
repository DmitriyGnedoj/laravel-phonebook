<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo('App\Models\Type', 'type_id');
    }




    public function position(){
        return $this->belongsTo('App\Models\Position', 'pos_id');
    }



}
