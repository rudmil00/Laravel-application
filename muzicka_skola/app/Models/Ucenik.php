<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucenik extends Model
{
    protected $fillable = [
        'ime',
        'prezime',
        'instrument',
        'pol',
        'datum_rodjenja',
        'email',
    ];
    use HasFactory;


    public function termin()
    {
        return $this->hasMany(Termin::class);
    }
}
