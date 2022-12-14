<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'certificate_name' => $this->faker->lastName(),
            'certificate_link' => $this->faker->url(),
            'picture' => $this->faker->url(),
            'about_id' => 1,
        ];
    }
}
