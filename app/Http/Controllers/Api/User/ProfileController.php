<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Document;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $status = $this->is_verified_user();
        return ['user' => Auth::user(), 'status' => $status];
    }

    public function update(Request $request)
    {
        if (!$this->is_verified_user()) {
            $user = Auth::user();
            $user->fill($request->except('profile_image'));
            $user->fillImage($request);
            $user->save();
            return ['message' => __('messages.save_success')];
        }
        abort('403', 'به دلیل تایید شدن مدارک، شما مجاز به تغییر اطلاعات وارد شده نمی باشید.');
    }

    public function change_password(Request $request)
    {
        $this->handleChangePasswordValidation($request);
        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return ['message' => __('messages.save_success')];
    }


    public function handleChangePasswordValidation($request)
    {
        $validator = \Validator::make($request->all(), [
            'password' => 'required|confirmed|',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function is_verified_user()
    {
        $user_info = User::with(['cards', 'documents'])->where('id', Auth::id())->first();
        $status = false;
        if ($user_info->is_admin_define) {
            return true;
        }


        if ($user_info->cards != null) {
            foreach ($user_info->cards as $card) {
                if ($card->approved == Card::CONFIRM) {
                    $status = true;
                    break;
                }
            }
        }

        if ($user_info->documents != null) {
            foreach ($user_info->documents as $document) {
                if ($document->approved == Document::WAITING || $document->approved == Document::REJECT) {
                    $status = false;
                    break;
                }
            }
        }

        return $status;
    }
}
