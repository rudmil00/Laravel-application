<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = [
        'ime',
        'prezime',
        'predmet',
        'datum_rodjenja',
        'email',
        'radni_staz'
    ];
    use HasFactory;

    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
}
