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
        $status = $this->is_verified_user() == 1 ? true : false;
        return ['user' => Auth::user(), 'status' => $status];
    }

    public function update(Request $request)
    {
        $status = $this->is_verified_user() == 1 ? true : false;

        if (!$status) {
            $this->handleValidate($request);
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
        'password' => 'required'
    ]);

        $validator->after(function ($validator) use ($request) {
            $uppercase = preg_match('@[A-Z]@', $request->password);
            $lowercase = preg_match('@[a-z]@', $request->password);
            $number = preg_match('@[0-9]@', $request->password);

            if (!$uppercase || !$lowercase || !$number || strlen($request->password) < 8) {
                $validator->errors()->add('password', 'پسورد باید شامل حروف کوچک، بزرگ و عدد باشد.');
            }
        });
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
        $status = 0;
        if ($user_info->is_admin_define) {
            return 1;
        }


        if ($user_info->cards != null) {
            foreach ($user_info->cards as $card) {
                if ($card->approved == Card::CONFIRM) {
                    $status = 1;
                    break;
                }
            }
        }

        if ($user_info->documents != null) {
            if (count($user_info->documents) > 2) {
                foreach ($user_info->documents as $document) {
                    if ($document->approved == Document::WAITING || $document->approved == Document::REJECT) {
                        $status = 0;
                        break;
                    }
                }
            } else {
                $status = 0;
            }
        } else {
            $status = 0;
        }

        return 1;
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'father_name' => 'required',
            'national_code' => 'required',
            'email' => 'required|email',
            'sos_phone' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
