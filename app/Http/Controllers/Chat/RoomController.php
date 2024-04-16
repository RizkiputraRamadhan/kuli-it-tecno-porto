<?php

namespace App\Http\Controllers\Chat;

use App\Models\Room;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Session;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->session()->getId();
        $room = Room::where('sessions_id', $id)->first();
        $message = Messages::where('sessions_id', $id)->where('chatroom_id', $room->id)->get();
        dd($message);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function checkTicket(Request $request)
    {
        //dd($request->all());
        $session = Session::where('ticket', $request->ticket)->first();
        if (!$session) {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Ticket tidak ditemukan',
                ],
                404,
            );
        }else {
            return redirect('ticket=' . $session->ticket . '/' . $session->id)->with('msg', 'Pesan ditemukan');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
