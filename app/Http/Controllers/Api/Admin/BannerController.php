<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return Banner::orderBy('created_at', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);

        $slider = new Banner();
        $slider->fillImage($request);
        $slider->save();

        return ['message' => __('messages.save_success')];
    }

    public function published(Banner $banner)
    {
        Banner::query()->update(['is_published' => 0]);
        $banner->is_published = $banner->is_published == 1 ? 0 : 1;
        $banner->save();
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

    public function destroy(Banner $banner)
    {
        $banner->unlinkOriginalImage();
        $banner->delete();
        return ['message' => __('messages.delete_success')];
    }
}
