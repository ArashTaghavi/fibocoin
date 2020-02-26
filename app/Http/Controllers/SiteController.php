<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Comment;
use App\Models\Currency;
use App\Models\CurrencyUser;
use App\Models\Slider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{


    public function __construct()
    {
        $this->setPanelAddress();

        $banner = Banner::published()->first();


        \View::share('banner', $banner);

    }

    public function index()
    {
        // ========== Currency Users ==========
        $cu = CurrencyUser::with(['currency:currencies.title,currencies.id,currencies.symbol'])
            ->orderBy('unit_price', 'asc')->get()->toArray();
        $currencies = Currency::where('active', 1)->get();
        // ========== Currency Users ==========

        $sliders = Slider::published()->get();
        return view('site.index', compact('cu', 'currencies', 'sliders'));
    }

    public function questions()
    {

        return view('site.questions');
    }

    public function why_fibocoin()
    {


        return view('site.why-fibocoin');
    }

    public function blog()
    {
        return view('blog');
    }

    public function comments()
    {
        $comments = Comment::where('approved', 1)->orderBy('created_at','DESC')->paginate(10);


        return view('site.comments', compact('comments'));

    }

    public function store_comment(Request $request)
    {
        $comment = new Comment();
        if (Auth::check()) {
            $user = Auth::user();
            $comment->full_name = $user->first_name . ' ' . $user->last_name;
            $comment->email = $user->email;
            $comment->description = $request->description;
        } else {
            $comment->fill($request->all());
        }
        $comment->save();

        return back()->with('save_comment', 'نظر شما با موفقیت ثبت شد و پس از تایید مدیر نمایش داده می شود.');


    }

    public function setPanelAddress()
    {
         $this->middleware(function ($request, $next) {
            if (Auth::check()) {
                if (Auth::user()->is_admin == User::ADMIN)
                    \View::share('panel_address', "/admin-dashboard");

                if (Auth::user()->is_admin != User::ADMIN)
                    \View::share('panel_address', "/user-dashboard");

            }
            return $next($request);
        });
    }

}
