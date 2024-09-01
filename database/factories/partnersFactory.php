<?php

namespace Database\Factories;

use App\Models\Partners;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class partnersFactory extends Factory
{
    protected $model = Partners::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'url' => $this->faker->url(),
            'image' => $this->faker->word(),
        ];
    }
}
