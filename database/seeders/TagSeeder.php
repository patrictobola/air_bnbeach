<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = ['Isole', 'Stanze', 'Camping', 'Pool', 'Camper', 'Polo Nord', 'Golf'];
        $icons = ['island.png', 'hotel.png', 'camping.png', 'swimming-pool.png', 'camper-van.png', 'north-pole.png', 'golf-field.png'];

        foreach ($labels as $i => $label) {
            $tag = new Tag();
            $tag->label = $label;
            $tag->image = Storage::url('icons/' . $icons[$i]);


            $tag->save();
        }

        $tags = Tag::all();
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $listing->tags()->attach($tags->random(rand(1, 5))->pluck('id'));
        }
    }
}
