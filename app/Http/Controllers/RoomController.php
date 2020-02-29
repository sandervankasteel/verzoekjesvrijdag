<?php

namespace App\Http\Controllers;

use App\Events\UserJoinedRoom;
use App\Http\Resources\Room as RoomResource;
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

        $user = Auth::getUser();
        $room->users()->attach($user);

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

    public function joinRoom(Request $request, Room $room)
    {
        $user = Auth::getUser();
        $room->users()->attach($user);

        broadcast(new UserJoinedRoom($user, $room));

        return response()->json('', 200);
    }
}
