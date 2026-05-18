<?php

namespace Database\Factories;

use App\Models\TypeAppliance;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appliance>
 */
class ApplianceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //$as=['sa','as'];
        return [
            //
            /*'type_appliance_id'=>TypeAppliance::all()->random()->id,
            'libelle'=>$this->faker->randomElement($as),
            'dbid'=>fake()->randomLetter,
            'disponible'=>rand(0,1),
            'references'=>fake()->sentence()
*/
        ];
    }
}
