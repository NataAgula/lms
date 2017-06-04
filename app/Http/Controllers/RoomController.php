<?php

namespace App\Http\Controllers;


use App\Models\Building;
use App\Models\Room;
use Illuminate\Http\Request;
use Validator;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('room.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buildings = Building::all();
        return view('room.create')->with('buildings', $buildings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'building_id' => 'required|exists:buildings,id',
            'floors' => 'required|integer',
            'students' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $Room = Room::create($request->all());

        return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::findOrFail($id);
        return view('room.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::findOrFail($id);
        $buildings = Building::all();
        return view('room.edit')
            ->with('room', $room)
            ->with('buildings', $buildings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'building_id' => 'required|exists:buildings,id',
            'floors' => 'required|integer',
            'students' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator);
        }
        
        $room = Room::findOrFail($id);
        $room->fill($request->all());
        $room->save();

        return redirect()->route('rooms.show', $room->id);
    }
}
