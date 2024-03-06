<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $message = new Message();
        $message->from_user_id = 1;
        $message->to_user_id = 5;
        $message->listing_id = 1;
        $message->content = 'Blablbalbal';
        $message->sent_at = date("Y-m-d H:i:s");

        $message->save();
    }
}
