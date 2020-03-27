<?php

use App\Models\PlaylistItem;
use App\Models\Room;
use Illuminate\Database\Seeder;

class PlaylistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = Room::all();

        foreach($rooms as $room) {
            factory(PlaylistItem::class, 10)->create([
                'room_id' => $room->id
            ]);
        }
    }
}
