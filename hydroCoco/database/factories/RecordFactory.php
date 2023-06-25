<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $record = Record::all();
        $idPipa = $this->faker->unique()->numberBetween(1, $record);

        //Explanation : $faker->randomFloat($nbMaxDecimals, $min, $max);
        $pH = $this->fake()->randomFloat(1,6,8);

        $tekanan = $this->fake()->randomNumber(2,5);
        

        return [
            'idPipa' => $idPipa
        ];
    }
}
