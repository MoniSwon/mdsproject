<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'name'=> 'Client'
        ]);
        Roles::create([
            'name'=> 'Ambassadrice'
        ]);
        Roles::create([
            'name'=> 'Etudiant'
        ]);
    }
}
