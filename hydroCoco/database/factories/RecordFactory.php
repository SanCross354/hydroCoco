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
    private static $usedIds = [];


    public function definition(): array
    {
        $recordCount = Pipa::count();

       // Generate unique idPipa value
       $idPipa = $this->getUniquePipaId();


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

    private function getUniquePipaId(): int
    {
        $recordCount = Pipa::count();
        $currentIndex = count(self::$usedIds) + 1;

        // Calculate the proportional idPipa value
        $proportionalIdPipa = ceil($currentIndex / $recordCount * 5);

        // Check if the value is already used
        if (in_array($proportionalIdPipa, self::$usedIds)) {
            // Find the next available unique value
            for ($i = $proportionalIdPipa + 1; $i <= 5; $i++) {
                if (!in_array($i, self::$usedIds)) {
                    $proportionalIdPipa = $i;
                    break;
                }
            }
        }

        // Store the used value
        self::$usedIds[] = $proportionalIdPipa;

        return $proportionalIdPipa;
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public static function resetUsedIds(): void
    {
        self::$usedIds = [];
    }
    
    public function configure()
    {
        return $this->afterCreating(function (Record $record) {
            $incrementMinutes = 60;
            $record->update(['waktu' => Carbon::parse($record->waktu)->addMinutes($incrementMinutes)]);
        });
    }
}
