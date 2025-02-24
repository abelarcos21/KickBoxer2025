<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory; //uso del factory

class Asociacion extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
    ];
    //una asociacion tiene muchas acdemias
    public function academias(): HasMany{
        return $this->hasMany(Academia::class);
    }
}
