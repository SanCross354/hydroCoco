<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pipa;
use App\Models\Record;
use Carbon\Carbon;

class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //Look for a way as to the idPipa is random 1-5 but proportional
        $record = Pipa::count();
        $idPipa = $this->faker->numberBetween(1, $record);

        $pH = $this->faker->randomFloat(2, 6, 8);
        $debit = $this->faker->randomNumber(5, 8);
        $tekanan = $this->faker->randomNumber(2, 5);

        $startTime = Carbon::createFromFormat('Y-m-d H:i:s', '2023-06-27 00:00:00');
        $incrementMinutes = 5;

        return [
            'idPipa' => $idPipa,
            'Ph' => $pH,
            'debit' => $debit,
            'waktu' => $startTime->format('Y-m-d H:i:s'),
            'tekanan' => $tekanan
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure(): self
    {
        return $this->afterMaking(function (Record $record) {
            $incrementMinutes = 5;
            $record->waktu = Carbon::parse($record->waktu)->addMinutes($incrementMinutes);
        });
    }
}
