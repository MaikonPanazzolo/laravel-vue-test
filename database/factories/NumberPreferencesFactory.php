<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;

class NumberPreferencesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => '1'
        ];
    }

    public function configure()
    {
        return $this->sequence(
            ['name' => 'auto_attendant', 'value' => '1'],
            ['name' => 'voicemail_enabled', 'value' => '1']
        );
    }    
}
