<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list = new Listing();
        $list->user_id = (rand(1, 5));
        $list->title = ('Casa');
        $list->description = ('Super bella');
        $list->price = ('10.99');
        $list->address = ('via falmfa');
        $list->bathrooms = ('7');
        $list->bedrooms = ('2');

        $list->save();
    }
}
