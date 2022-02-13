<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oponent extends Model
{
    use HasFactory;

    public function File(){
        return $this->belongsToMany(File::class);
    }
    public function Processor(){
        return $this->hasOne(Processor::class);
    }

}
