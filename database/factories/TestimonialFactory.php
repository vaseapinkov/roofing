<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'message' => $this->faker->word(),
            'client_name' => $this->faker->name(),
            'client_title' => $this->faker->word(),
            'client_avatar' => $this->faker->word(),
            'show_on_home_page' => $this->faker->boolean(),
        ];
    }
}
