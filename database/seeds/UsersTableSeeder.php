<?php

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
        factory(User::class)->create([
            'email' => 'admin@example.com',
        ]);

        factory(User::class, 100)->create();
    }
}
