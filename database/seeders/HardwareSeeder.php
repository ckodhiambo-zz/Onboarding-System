<?php

namespace Database\Seeders;

use App\Models\Hardware;
use Illuminate\Database\Seeder;

class HardwareSeeder extends Seeder
{
    public function run()
    {
        Hardware::firstorcreate([
            'name' => 'Desk'
        ]);
        Hardware::firstorcreate([
            'name' => 'Desk-phone'
        ]);
        Hardware::firstorcreate([
            'name' => 'Laptop'
        ]);
        Hardware::firstorcreate([
            'name' => 'Mifi-Dongle'
        ]);
    }
}
