<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'account_bank' => $this->faker->numerify('##########'),
            'name_bank' => $this->faker->randomElement(['Vietcombank', 'BIDV', 'Techcombank', 'Agribank']),
            // 'start_time' => \Carbon\Carbon::parse($this->faker->dateTime())->format('d/m/Y'),
            // 'start_end' => \Carbon\Carbon::parse($this->faker->dateTime())->format('d/m/Y'),            
            'start_time' => $this->faker->dateTimeThisYear('Asia/Ho_Chi_Minh'),
            'start_end' => $this->faker->dateTimeThisYear('+2 months', 'Asia/Ho_Chi_Minh'),
            'status' => $this->faker->boolean(),
        ];
    }
}
