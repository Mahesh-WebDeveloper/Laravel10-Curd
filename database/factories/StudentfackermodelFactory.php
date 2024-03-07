<?php

// studentfactoryFactory.php

// namespace Database\Factories;

// F:\Laravel\testing\testing3\database\factories\studentfactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class StudentfackermodelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(1, 100),
            'city' => $this->faker->city(),
        ];
    }
}


