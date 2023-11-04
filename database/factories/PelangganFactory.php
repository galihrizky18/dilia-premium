<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idUser = User::inRandomOrder()->first('id_user')->id_user;

        return [
            'id_pelanggan'=>$idUser,
            'first_name'=> $this->faker->firstName(),
            'last_name'=> $this->faker->lastName() ,
            'provinsi'=> $this->faker->citySuffix(),
            'kota'=> $this->faker->city(),
            'noHp'=> $this->faker->phoneNumber(),
        ];
    }
}
