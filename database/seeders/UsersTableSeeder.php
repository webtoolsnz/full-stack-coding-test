<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a default user for testing
        User::factory()->create([
            'email' => 'admin@example.com',
        ]);

        User::factory()->count(100)->create();
    }
}
