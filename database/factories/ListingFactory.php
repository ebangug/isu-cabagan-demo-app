<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description = $this->faker->paragraphs(6);
        $exerpt = array_slice($description, 0, 2);

        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'exerpt' => '<p>' . implode('</p><p>', $exerpt) . '</p>',
            'description' => '<p>' . implode('</p><p>', $description) . '</p>',
            'price' => $this->faker->numberBetween(100, 2000),
            'status' => 'available',
        ];
    }
}
