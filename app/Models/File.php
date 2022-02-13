<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function Customer(){
        return $this->belongsTo(Customer::class);
    }

    public function Sort(){
        return $this->hasOne(Sort::class);
    }
    public function Opponent(){
        return $this->hasMany(Oponent::class);
    }
    public function Insurer(){
        return $this->hasOne(Insurer::class);
    }
    public function Phase(){
        return $this->hasOne(Phase::class);
    }
    public function Professional(){
        return $this->hasOne(Professional::class);
    }


}
