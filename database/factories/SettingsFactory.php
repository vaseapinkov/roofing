<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SettingsFactory extends Factory
{
    protected $model = Settings::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'website_name' => $this->faker->name(),
            'fav_icon' => $this->faker->word(),
            'logo_header' => $this->faker->word(),
            'logo_footer' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'g_maps_code' => $this->faker->word(),
            'instagram_link' => $this->faker->word(),
            'facebook_link' => $this->faker->word(),
            'youtube_link' => $this->faker->word(),
            'about_us' => $this->faker->word(),
            'contact_email' => $this->faker->unique()->safeEmail(),
            'scripts_head' => $this->faker->word(),
            'scripts_body' => $this->faker->word(),
            'css_head' => $this->faker->word(),
        ];
    }
}
