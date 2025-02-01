<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Doe',
            'firstName' => 'John',
            'email' => 'danielattoh79@gmail.com',
            'password' => '773134op',
            'PhoneNumber' => '96099348',
            'role' => 'admin',
        ]);
    }
}
