<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function nombrecompleto($value){
        return $this->nombre. '' .$this->apellidos;
    }

    public function getfullnameattribute($value)
    {
        return $this->nombre . ' ' . $this->apellidos;
    }

    public function apellidonombre($value)
    {
        return $this->apellidos.' , '.$this->nombre;
    }
    public function Agent(){
        return $this->belongsTo(Agent::class);
    }
    public function Files(){
        return $this->hasMany(File::class);
    }
    public function File(){
        return $this->belongsToMany(File::class);
    }
}
