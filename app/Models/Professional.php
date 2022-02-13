<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    public function Fileprofessional(){
        return $this->belongsTo(Fileprofesional::class);
    }
    public function Invoice(){
        return $this->hasMany(Invoice::class);
    }
    public function Group(){
        return $this->hasOne(Group::class);
    }
    public function File(){
        return $this->belongsTo(File::class);
    }
}
