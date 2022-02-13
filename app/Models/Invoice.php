<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function Professional(){
        return $this->hasOne(Professional::class);
    }
    public function File(){
        return $this->hasOne(File::class);
    }
}
