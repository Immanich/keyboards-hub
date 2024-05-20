<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keyboard;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('brand');
        // $table->string('model');
        // $table->enum('type', ['Digital Piano', 'Synthesizer', 'Workstation Keyboard', 'Stage Piano', 'Organ', 'Electric Piano', 'MIDI Controller']);
        // $table->string('color');
        // $table->float('price');
        $keyboards = [
            [
                'image' => 'images/kross-dark-blue.png',
                'brand' => 'KORG',
                'model' => 'KROSS 2',
                'type' => 'Synthesizer Workstation',
                'color' => 'Dark Blue',
                'price' => 44999.00,
            ],
            [
                'image' => 'images/xps-10.jpg',
                'brand' => 'ROLANDO',
                'model' => 'XPS-10',
                'type' => 'Expandable Synthesizer',
                'color' => 'Black',
                'price' => 34888.00,
            ],
            [
                'image' => 'images/xps-30.jpg',
                'brand' => 'ROLANDO',
                'model' => 'XPS-30',
                'type' => 'Expandable Synthesizer',
                'color' => 'Black',
                'price' => 42999.00,
            ],
            [
                'image' => 'images/psr-a300.avif',
                'brand' => 'YAMAHA',
                'model' => 'PSR-A300',
                'type' => 'Digital Piano',
                'color' => 'Gray',
                'price' => 17999.00,
            ],
            [
                'image' => 'images/psr-a350.jpeg',
                'brand' => 'YAMAHA',
                'model' => 'PSR-A350',
                'type' => 'Digital Piano',
                'color' => 'Gray',
                'price' => 24888.00,
            ],
        ];
        foreach($keyboards as $k) {
            Keyboard::create($k);
        };
    }
}
