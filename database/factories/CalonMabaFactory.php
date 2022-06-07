<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CalonMaba>
 */
class CalonMabaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => '9532103922890002',
            'nama_maba' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => bcrypt(123),
            'jenis_kelamin' => 'lk'
        ];
    }
}
