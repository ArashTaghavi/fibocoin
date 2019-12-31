<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\BuyOrder;
use App\Models\Document;
use App\Models\Requirement;
use App\Models\RequirementUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;

class DocumentController extends Controller
{

    public function index()
    {
        return Document::where('user_id', Auth::id())->orderBy('id','DESC')->get();
    }

    public function getByID($id)
    {
        return Document::whereId($id)->whereUserId(Auth::id())->first();
    }

    public function store(Request $request)
    {
        $this->handleValidate($request);
        $document = new Document();
        $document->fill($request->except('profile_image'));
        $document->user_id = Auth::id();
        $document->fillImage($request);
        $document->save();
        $user_requirement = new RequirementUser();
        $user_requirement->user_id = Auth::id();
        $user_requirement->requirement_id = Requirement::DOCUMENT;
        $user_requirement->save();
        return ['message' => __('messages.save_success')];
    }

    public function update(Request $request, $id)
    {
        $this->handleValidate($request);
        $document = $this->getByID($id);
        $document->fill($request->except('profile_picture'));
        $document->fillImage($request);
        if ($document->getDirty()) {
            $document->approved = BuyOrder::WAITING;
        }
        $document->save();
        return ['message' => __('messages.save_success')];
    }


    public function destroy($id)
    {
        $document = $this->getByID($id);
        $document->unlinkOriginalImage();
        $document->delete();
        return ['message' => __('messages.delete_success')];
    }

    public function handleValidate($request)
    {
        $validator = \Validator::make($request->all(), [
            'profile_image' => 'required',
        ]);

        if ($validator->fails()) {
            abort(422, $validator->errors()->first());
        }

        return $validator->getData();
    }
}
