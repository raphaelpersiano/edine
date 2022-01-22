<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'outlet_id' => '1',
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);
    }
}
