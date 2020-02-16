<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return Slider::orderBy('created_at','DESC')->get();
    }


    public function store(Request $request)
    {
        $this->handleValidate($request);

        $slider = new Slider();
        $slider->fillImage($request);
        $slider->save();

        return ['message' => __('messages.save_success')];
    }

    public function published(Slider $slider)
    {
        $slider->is_published = $slider->is_published == 1 ? 0 : 1;
        $slider->save();
    }
    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'profile_image' => 'required'
        ]);

        if ($validator->fails()) {
            abort(403, $validator->errors()->first());
        }
        return $validator->getData();
    }

    public function destroy(Slider $slider)
    {
        $slider->unlinkOriginalImage();
        $slider->delete();
        return ['message' => __('messages.delete_success')];
    }


}
