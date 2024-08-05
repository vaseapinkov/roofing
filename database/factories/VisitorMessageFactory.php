<?php

namespace Database\Factories;

use App\Models\VisitorMessage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class VisitorMessageFactory extends Factory
{
    protected $model = VisitorMessage::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'firs_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'subject' => $this->faker->word(),
            'message' => $this->faker->word(),
        ];
    }
}
