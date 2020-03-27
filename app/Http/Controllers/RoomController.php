<?php

namespace App\Http\Controllers;

use App\Events\ItemAddedToPlaylist;
use App\Events\UserJoinedRoom;
use App\Http\Requests\AddPlaylistItem;
use App\Http\Resources\PlaylistItem as PlaylistItemResource;
use App\Http\Resources\Room as RoomResource;
use App\Models\PlaylistItem;
use App\Models\Room;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RoomResource
     */
    public function create()
    {
        $room = Room::create([
            'name' => Str::random(10)
        ]);

        return new RoomResource($room);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Room $room
     * @return void
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Room $room
     * @return void
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Room $room
     * @return void
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Room $room
     * @return void
     */
    public function destroy(Room $room)
    {
        //
    }

    public function joinRoom(Request $request, $room)
    {
        $user = Auth::getUser();
        $room = Room::where('name', $room)->first();
        $room->users()->attach($user);

        broadcast(new UserJoinedRoom($user, $room));

        return response()->json('', 200);
    }

    public function addToPlaylist(AddPlaylistItem $request, Room $room)
    {
        $item = PlaylistItem::create([
            'youtube_id' => $request->get('youtube_id'),
            'room_id' => $room->id,
            'title' => $request->get('title'),
            'image_url' => $request->get('image_url')
        ]);

        broadcast(new ItemAddedToPlaylist($room, $item))->toOthers();

        return response()->json('', 200);
    }

    public function playlistItems(Request $Request, Room $room)
    {
        $playlistItems = $room->playlistitems;

        return PlaylistItemResource::collection($playlistItems);
    }
}
