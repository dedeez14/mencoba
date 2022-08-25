<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->randomNumber(8, true),
            'nama' => $this->faker->name(),
            'email' => $this->faker->email(),
            'is_active' => $this->faker->randomElement([0, 1]),
        ];
    }
}
