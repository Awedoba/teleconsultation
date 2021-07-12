<?php

namespace Database\Factories;

use App\Models\Teleconsult;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeleconsultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teleconsult::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            "encounter_date"=>now(),
            "district"=>$this->faker->name(),
            "facility"=>$this->faker->name(),
            "patient_first_name"=>$this->faker->name(),
            "age"=> 44 ,
            "sex"=>'male',
            "complaint"=>$this->faker->paragraph(),
            "name_of_caller" =>$this->faker->name(),
            "contact_of_caller"=>1234567890,
            "diagnosis" =>$this->faker->paragraph(),
            "purpose" =>'referral',
        ];
    }
}
