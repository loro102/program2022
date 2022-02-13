<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fileprofesional extends Model
{
    use HasFactory;

    public function Professional(){
        return $this->belongsTo(Professional::class);
    }
}
