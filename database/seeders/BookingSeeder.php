<?php

namespace Database\Seeders;

use App\Models\Booking;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $status = ['Confirmed', 'Waiting confirm', 'Rejected', 'Processing'];
        $book = new Booking();
        $book->user_id = rand(1, 5);
        $book->listing_id = 1;
        $book->check_in = $faker->dateTimeBetween();
        $book->check_out = $faker->dateTimeBetween('today', '+1 week');
        $book->guests = rand(1, 10);
        $book->total_price = 10.99;
        $book->status = $status[rand(0, 3)];
        $book->save();
    }
}
