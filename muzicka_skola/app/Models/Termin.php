<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_profesor',
        'id_ucenik',
        'datum_casa'

    ];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class);
    }

    public function ucenik()
    {
        return $this->belongsTo(Ucenik::class);
    }
    public $timestamps = false;
}
