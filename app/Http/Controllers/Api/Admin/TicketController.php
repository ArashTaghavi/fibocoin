<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function user_list($search_value = '')
    {
        $users = User::where('is_admin', '!=', 1)->where(function ($q) use ($search_value) {
            $q->where('first_name', 'like', "%{$search_value}%")
                ->orWhere('first_name', 'like', "%{$search_value}%")
                ->orWhere('last_name', 'like', "%{$search_value}%")
                ->orWhere('mobile', 'like', "%{$search_value}%");
        })->get();

        return $users;

    }

    public function getByUserId($id)
    {
        return Ticket::where('sender_id', $id)
            ->orWhere('receiver_id', $id)
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
