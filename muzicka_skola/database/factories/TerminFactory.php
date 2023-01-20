<?php

namespace Database\Factories;

use App\Models\Profesor;
use App\Models\Ucenik;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Termin>
 */
class TerminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_profesor' => random_int(1, Profesor::count()),
            'id_ucenik' =>  random_int(1, Ucenik::count()),
            'datum_casa' => $this->faker->date($format = 'Y-m-d', $max = 'now')

        ];
    }
}
