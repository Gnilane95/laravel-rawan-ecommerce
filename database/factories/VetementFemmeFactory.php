<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VetementFemme>
 */
class VetementFemmeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $vetFemme_name = $this->faker->unique()->words($nb = 2, $asText = true);
        return [
            'name' => $vetFemme_name,
            'description' => $this->faker->text(500),
            'regular_price' => $this->faker->numberBetween(10,500),
            'sale' => $this->faker->numberBetween(40,800),
            'SKU' => 'PRD' . $this->faker->numberBetween(100,500),
            'url_img' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'category' => 'Robes/Jupes',
        ];
    }
}
