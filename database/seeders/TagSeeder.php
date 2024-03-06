<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = ['Wi-Fi', 'Kitchen', 'Parking', 'Pool', 'Security Cam'];

        foreach ($labels as $label) {
            $tag = new Tag();
            $tag->label = $label;
            $tag->save();
        }

        $tags = Tag::all();
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $listing->tags()->attach($tags->random(rand(1, 5))->pluck('id'));
        }
    }
}
