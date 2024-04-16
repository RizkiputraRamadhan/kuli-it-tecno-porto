<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use App\Models\Messages;
use Illuminate\Support\Str;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function checkUrl(Request $request)
    {
        $session = Session::where('id', $request->session()->getId())->first();
        $data = [
            'session' => $session,
        ];

        if (!$session) {
            return response()->json(
                [
                    'status' => 404,
                    'message' => 'Harap refresh halaman terlebih dahulu',
                ],
                404,
            );
        } elseif ($session->ticket == null) {
            try {
                $session->update([
                    'ticket' => $session->last_activity,
                ]);
            } catch (\Exception $e) {
                return response()->json(
                    [
                        'status' => 500,
                        'message' => 'Gagal memperbarui tiket session',
                    ],
                    500,
                );
            }
        }

        return view('interface.v_home.index', $data);
    }

    public function index(Request $request, $last_activity, $id)
    {
        if (!$id || !$last_activity) {
            return redirect()->back();
        }
        $session = Session::where('id', $id)->first();
        if (!$session) {
            return redirect()->back();
        } elseif (!$session->ticket) {
            $session->update([
                'ticket' => $request->last_activity,
            ]);
            return redirect('ticket=' . $session->last_activity . '/' . $session->id);
        }

        $room = Room::where('sessions_id', $id)->first();
        if (!$room) {
            $room = new Room();
            $room->create([
                'slug' => Str::random(10),
                'sessions_id' => $session->id,
            ]);
            try {
                return response()->json(
                    [
                        'status' => 200,
                    ],
                    200,
                );
            } catch (\Exception $e) {
                return response()->json(
                    [
                        'status' => 500,
                        'message' => 'Gagal memperbarui tiket session',
                    ],
                    500,
                );
            }
        }
        $message = Messages::where('chatroom_id', $room->id)->get();
        if (!$message) {
            $message = null;
        }
        $data = [
            'session' => $session,
            'room' => $room,
            'message' => $message,
            'request_sessions' => $request->session()->getId(),
        ];
       // dd($data);
        return view('interface.v_home.index', $data);
    }
}
