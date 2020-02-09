<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\CurrencyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrencyUserController extends Controller
{

    public function index()
    {
        return CurrencyUser::with('currency')
            ->where('user_id', Auth::id())
            ->get();
    }


    public function store(Request $request)
    {
        $this->handleValidate($request);

        $cu = new CurrencyUser();
        $cu->user_id = Auth::id();
        $cu->fill($request->all());
        $cu->save();

        return ['message' => __('messages.save_success')];
    }


    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'currency_id' => 'required',
            'balance' => 'required',
            'min_sale' => 'required',
            'unit_price' => 'required',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }

    public function getByID($id)
    {
        return CurrencyUser::whereId($id)->whereUserId(Auth::id())->first();
    }


    public function update(Request $request, $id)
    {
        $this->handleValidate($request);
        $cu = $this->getByID($id);
        $cu->fill($request->all());
        $cu->save();
        return ['message' => __('messages.save_success')];
    }

    public function destroy($id)
    {
        $cu = $this->getByID($id);
        $cu->delete();
        return ['message' => __('messages.delete_success')];
    }

    public function currencies_user_list($currency_id)
    {

        $sell = CurrencyUser::where('currency_id', $currency_id)->orderBy('unit_price', 'ASC')->get();
        $buy = BuyOrder::where('currency_id', $currency_id)->orderBy('created_at', 'ASC')->get();
        
        return compact('sell', 'buy');

    }
}
