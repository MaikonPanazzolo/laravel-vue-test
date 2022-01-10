<?php

namespace Database\Seeders;

use App\Models\NumberPreferences;
use App\Models\Numbers;
use Database\Factories\NumberPreferencesAutoAttendantFactory;
use Database\Factories\NumberPreferencesVoicemailEnabledFactory;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Numbers::factory()
            ->count(10)
            ->has(NumberPreferences::factory()->count(2), 'number_preferences')
            ->create();
    }
}
