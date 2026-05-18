<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $secteur=['prive']
        return [
            //
                'libelle'=>$this->faker->word(),
                'secteur'=>$this->faker->randomElement(),
                'activite'=>$this->faker->sentence(),
                //
        ];
    }
}
