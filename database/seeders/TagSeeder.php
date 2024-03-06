<?php

namespace Database\Seeders;

use App\Models\Tag;
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
    }
}
