<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ime',
        'prezime',
        'predmet',
        'datum_rodjenja',
        'email',
        'radni_staz'
    ];


    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
    public $timestamps = false;
}
