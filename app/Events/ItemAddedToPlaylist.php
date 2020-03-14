<?php

namespace App\Events;

use App\Models\PlaylistItem;
use App\Models\Room;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ItemAddedToPlaylist implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @param Room $room
     */

    private $room;

    public $playlistItem;

    public function __construct(Room $room, PlaylistItem $item)
    {
        $this->room = $room;

        $this->playlistItem = $item;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('room.items.' . $this->room->name);
    }
}
