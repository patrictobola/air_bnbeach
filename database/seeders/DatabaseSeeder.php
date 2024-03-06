<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ListingTag;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class, ListingSeeder::class, PhotoSeeder::class, BookingSeeder::class, ReviewSeeder::class, TagSeeder::class, ListingTag::class]);
    }
}
