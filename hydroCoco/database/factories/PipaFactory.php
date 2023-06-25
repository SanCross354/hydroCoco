<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pipa;


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
        //Make data faker of LOCATION and idOPERATOR have UNIQUE value (tidak ada duiplikasi)
        $lokasi = $this->faker->unique()->city();
        $idOperator = $this->faker->unique()->numberBetween(1, 5);

        return [
            'lokasi' => $lokasi,
            'idOperator' => $idOperator
        ];
    }
}

