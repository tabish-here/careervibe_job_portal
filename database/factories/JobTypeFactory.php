<?php

namespace Database\Factories;

use App\Models\JobType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobType>
 */
class JobTypeFactory extends Factory
{
    protected $model = JobType::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word, // Generates a single word for the job type name
        ];
    }
}
