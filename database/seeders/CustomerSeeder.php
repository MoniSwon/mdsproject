<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'last_name' => 'Walentek',
            'first_name'=> 'Monica',
            'email' => 'monica.walentek@gmail.com',
            'password' => 'hey', //To hash
            'roles_id' => '1',
            'phone' => '0612884439',
            'gender' => 'F',
            'status' => 'inactif'
        ]);
    }
}
