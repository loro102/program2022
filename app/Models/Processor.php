<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    public function Insurer(){
        return $this->belongsToMany(Insurer::class);
    }
    public function Opponent(){
        return $this->belongsTo(Oponent::class);
    }
}
