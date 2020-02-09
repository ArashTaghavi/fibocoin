<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function list()
    {
        return Ticket::where('sender_id', Auth::id())
            ->orWhere('receiver_id', Auth::id())
            ->orderBy('created_at', 'ASC')
            ->get();
    }

    public function store(Request $request)
    {
        Ticket::create($this->handleValidate($request));
    }


    public function update(Request $request, Ticket $ticket)
    {

    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();

        return ['message' => __('messages.delete_success')];
    }


    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'body' => 'required'
        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
