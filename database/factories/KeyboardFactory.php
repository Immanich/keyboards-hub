<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class KeyboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand = ['Yamaha', 'Roland', 'Korg', 'Casio', 'Nord'];
        $type = ['Digital Piano', 'Synthesizer', 'Workstation Keyboard', 'Stage Piano', 'Organ', 'Electric Piano', 'MIDI Controller'];
        $color = ['Black', 'Red', 'White'];
        $model = ['Yamaha DGX-660', 'Korg Pa-700', 'Korg Pa-1000', 'Roland BK-9', 'Roland BK-5'];
        return [       
            'brand' => fake() -> randomElement($brand),
            'model' => fake() -> randomElement($model),
            'type' => fake() -> randomElement($type),
            'color' => fake() -> randomElement($color),
            'price' => fake() -> randomFloat(2, 10000, 400000)
        ];
    }
}
