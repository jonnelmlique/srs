<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        $courses = [
            'Computer Science',
            'Information Technology',
            'Business Administration',
            'Engineering',
            'Psychology',
            'Nursing',
            'Education',
            'Marketing',
            'Accounting',
            'Graphic Design'
        ];

        return [
            'student_id' => date('Y') . str_pad(fake()->unique()->numberBetween(1, 9999), 4, '0', STR_PAD_LEFT),
            'full_name' => fake()->name(),
            'date_of_birth' => fake()->dateTimeBetween('-25 years', '-18 years')->format('Y-m-d'),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'email' => fake()->unique()->safeEmail(),
            'course_program' => fake()->randomElement($courses),
            'year_level' => fake()->numberBetween(1, 4),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
        ];
    }
}
