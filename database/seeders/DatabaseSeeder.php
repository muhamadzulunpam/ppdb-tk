<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Kesehatan;
use App\Models\uploadAdminGudang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
       User::factory()->create([
            'username' => 'Azhar Lubis',
            'password' => bcrypt('password'),
            'role' => "admin",
        ]);

       User::factory()->create([
            'username' => "Muhamad Zul Sa'ban",
            'password' => bcrypt('password'),
            'role' => "admin",
        ]);     
       
    }
}
