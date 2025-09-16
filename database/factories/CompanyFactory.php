<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Company;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;

    // protected static $password =  Hash::make('password123');

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $statuses = ['published','draft','inactive','deleted'];

        $randomNumber = rand(0,3);

        $verified = rand(0,1);

        return [
            'name' => $this->faker->company(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('password123'),
            'logo' => fake()->imageUrl(),
            'cover_image' => fake()->imageUrl(),
            'industry' => fake()->sentence(),
            'country' => fake()->country(),
            'state' => fake()->state(),
            'city' => fake()->city(),
            'primary_address' => fake()->address(),
            'secondary_address' => fake()->address(),
            'website' => 'cc.com',
            'instagram' => 'instagram.com',
            'facebook' => 'facebook.com',
            'whatsapp' => fake()->phoneNumber(),
            'linkedin' => 'linkedin.com',
            'status' => $statuses[$randomNumber],
            'description' => fake()->paragraph(),
            'no_of_employees' => fake()->randomDigit(),
            'is_verified' => $verified,
            'telephone_primary' => fake()->phoneNumber(),
            'telephone_secondary' => fake()->phoneNumber(), 
        ];
    }
}