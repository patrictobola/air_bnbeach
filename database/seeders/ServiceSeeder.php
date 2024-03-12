<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $label = ['Wifi', 'TV', 'Bar', 'Parking', 'Room Service', 'Laundry'];

        foreach ($label as $label) {
            $serv = new Service();
            $serv->name = $label;
            $serv->save();
        }

        $services = Service::all();
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $listing->services()->attach($services->random(rand(1, 5))->pluck('id'));
        }
    }
}
