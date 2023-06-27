<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pipa;
use App\Models\User;

class PipaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pipa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Take value from User table 
        $operator = User::count();

        $lokasi = $this->faker->unique()->city();

        //Make sure if the idOperator not geeting duplicated and take the value from User Table
        $idOperator = $this->faker->unique()->numberBetween(1, $operator);

        return [
            'lokasi' => $lokasi,
            'idOperator' => $idOperator
        ];
    }
}
