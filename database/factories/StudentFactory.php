public function definition()
{
    return [
        'name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'age' => $this->faker->numberBetween(18, 25),
    ];
}