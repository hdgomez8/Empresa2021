<?php

namespace Database\Factories;

use App\Models\empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = empleados::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->randomElement(['pedro','luis','pablo','juan']),
            'apellido'=>$this->faker->randomElement(['gomez','pertuz','paz','mora']),
            'edad'=>$this->faker->randomElement([18,20,22,24,26,28]),
            'password'=>$this->faker->randomElement([123,456,789,987,654,321])
        ];
    }
}
