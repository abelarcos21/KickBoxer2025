<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asociacion extends Model
{
    protected $fillable = [
        'nombre',
    ];
    //una asociacion tiene muchas acdemias
    public function academias(): HasMany{
        return $this->hasMany(Academia::class);
    }
}
