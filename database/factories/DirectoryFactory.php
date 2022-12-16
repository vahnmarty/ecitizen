<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Directory>
 */
class DirectoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company,
            'address' => fake()->streetName,
            'barangay' => fake()->city,
            'telephone' => fake()->tollFreePhoneNumber,
            'cellphone' => fake()->phoneNumber,
            'email' => fake()->email,
            'facebook_url' => fake()->url,
            'facebook_username' => fake()->username,
            'twitter_url' => fake()->url,
            'twitter_username' => fake()->username,
            'instagram_url' => fake()->url,
            'instagram_username' => fake()->username,
            'tiktok_url' => fake()->url,
            'tiktok_username' => fake()->username,
        ];
    }
}
