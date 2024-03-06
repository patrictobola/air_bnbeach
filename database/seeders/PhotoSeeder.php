<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $photo = new Photo();
        $photo->listing_id = 1;
        $photo->filename = 'photo bellissima';
        $photo->caption = 'sadnakjsdn bellissima';

        $photo->save();
    }
}
