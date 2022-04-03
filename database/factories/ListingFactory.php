<?php

namespace Database\Factories;

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
            'title' => $this->faker->sentence(),
            'exerpt' => '<p>' . implode('</p><p>', $exerpt) . '</p>',
            'description' => '<p>' . implode('</p><p>', $description) . '</p>',
            'price' => $this->faker->numberBetween(100, 2000),
            'status' => 'available',
        ];
    }
}
