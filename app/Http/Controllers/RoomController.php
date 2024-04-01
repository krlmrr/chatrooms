<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use Inertia\Inertia;

class RoomController extends Controller
{
    public function index()
    {
        return Inertia::render('Rooms/Index', [
            'rooms' => Room::all(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Rooms/Create', [
            'team' => auth()->user()->currentTeam,
        ]);
    }

    public function store(StoreRoomRequest $request)
    {
        //
    }

    public function show(Room $room)
    {
        //
    }

    public function edit(Room $room)
    {
        //
    }

    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    public function destroy(Room $room)
    {
        //
    }
}
