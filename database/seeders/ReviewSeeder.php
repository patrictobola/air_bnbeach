<?php

namespace Database\Seeders;

use App\Models\Review;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $review = new Review();
        $review->user_id = rand(1, 5);
        $review->listing_id = 1;
        $review->vote = rand(1, 5);
        $review->comment = $faker->paragraph();
        $review->date_of_review = now();

        $review->save();
    }
}
