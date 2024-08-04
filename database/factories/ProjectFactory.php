<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'sub_title' => $this->faker->word(),
            'home_page_description' => $this->faker->text(),
            'home_page_image' => $this->faker->word(),
            'show_on_home_page' => $this->faker->boolean(),
        ];
    }
}
