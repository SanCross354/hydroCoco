<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pipa;
use App\Models\Record;

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
        $record = Pipa::count();
        $idPipa = $this->faker->numberBetween(1, $record);

        //Explanation : $faker->randomFloat($nbMaxDecimals, $min, $max);
        $pH = $this->faker->randomFloat(2,6,8);
        $debit = $this->faker->randomNumber(5,8);
        $waktu = $this->faker->dateTime()->format('Y-m-d H:i:s');
        $tekanan = $this->faker->randomNumber(2, 5);

        


        return [
            'idPipa' => $idPipa,
            'Ph' => $pH,
            'debit' => $debit,
            'waktu' => $waktu,
            'tekanan' => $tekanan
        ];
    }
}
