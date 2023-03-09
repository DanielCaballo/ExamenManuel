<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Empleado;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $idiomas =['Inglés', 'Francés', 'Alemán', 'Rumano', 'Portugués'];
        $titulos =['Bach', 'Ciclo Medio', 'Ciclo Superior', 'Ingeniería', 'Licenciatura'];
        return [
            'nombre' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
            'direccion' =>fake()->address(),

            //
            //
        ];
    }
}
