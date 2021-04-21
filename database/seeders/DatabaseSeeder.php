<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //generate admin
        $adminUser = User::where('name', 'kovchin')->first();

        if (!isset($adminUser)) {
            User::firstOrCreate([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'password' => Hash::make('test1234'),
                'remember_token' => Str::random(10),
            ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
