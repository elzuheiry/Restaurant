<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = User::create([
            'name' => 'Super admin',
            'username' => 'super_admin',
            'email' => 'admin@admin.com',
            'password' => 'password!',
        ]);

        $client->attachRole('admin');
    }
}