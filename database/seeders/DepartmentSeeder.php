<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::firstorcreate([
            'name' => 'Administration'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Finance'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Human Resource'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Legal'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Risk'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Strategy'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Tax'
        ])->companies()->attach([1]);
        Department::firstorcreate([
            'name' => 'Internal Audit'
        ])->companies()->attach([3]);
        Department::firstorcreate([
            'name' => 'Investment'
        ])->companies()->attach([6]);
        Department::firstorcreate([
            'name' => 'Operations'
        ])->companies()->attach([6]);
        Department::firstorcreate([
            'name' => 'Marketing'
        ])->companies()->attach([6]);
        Department::firstorcreate([
            'name' => 'Private Wealth'
        ])->companies()->attach([6]);
    }
}
