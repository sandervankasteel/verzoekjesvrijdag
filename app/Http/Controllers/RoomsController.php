<?php
namespace App\Http\Controllers;


class RoomsController extends Controller
{

    public function index()
    {
        return view('rooms.master');
    }

    public function room($room)
    {
        return "bla bla bla";
    }

    public function getPlaylist(Room $room)
    {

    }

}