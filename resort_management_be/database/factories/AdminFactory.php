<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'birthday' => $this->faker->dateTimeBetween('Asia/Ho_Chi_Minh'),
            'email' => $this->faker->unique()->safeEmail(),
            'CMND' => $this->faker->numerify('#########'),
            'address' => $this->faker->city(),
            'phone' => $this->faker->numerify('0#0#######'),
            'status' => $this->faker->boolean(),
        ];
    }
}
