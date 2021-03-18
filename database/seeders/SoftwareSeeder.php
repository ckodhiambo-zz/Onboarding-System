<?php

namespace Database\Seeders;

use App\Models\Software;
use Illuminate\Database\Seeder;

class SoftwareSeeder extends Seeder
{
    public function run()
    {
        Software::firstorcreate([
            'name' => 'Email (Office 365)',
            'required' => true,
        ]);
        Software::firstorcreate([
            'name' => 'Procure KE',
            'required' => true,
        ]);
        Software::firstorcreate([
            'name' => 'Advent Portfolio Exchange',
            'required' => false
        ]);
        Software::firstorcreate([
            'name' => 'Bloomberg',
            'required' => false
        ]);
        Software::firstorcreate([
            'name' => 'Centum-RE-CRM',
            'required' => false
        ]);
        Software::firstorcreate([
            'name' => 'ProCore',
            'required' => false
        ]);
        Software::firstorcreate([
            'name' => 'Procure',
            'required' => false
        ]);
        Software::firstorcreate([
            'name' => 'SAP Business One',
            'required' => false
        ]);
    }
}
