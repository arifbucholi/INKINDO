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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            NewsSeeder::class,
            MessagesTableSeeder::class,
            BarcodeSeeder::class,
            SeoSeeder::class,
            UserSeeder::class,
            FaqSeeder::class,
            KonstruksiSeeder::class,
            NonKonstruksiSeeder::class,
            // Add any other seeders you want to run
        ]);
    }
}
