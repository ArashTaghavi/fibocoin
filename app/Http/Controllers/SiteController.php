<?php

namespace App\Http\Controllers;

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

/*    public function mail($email)
    {
        $url = 'http:xoapp.ir/reset-password';


        $user = User::where('email',$email)->first();
        if($user!=null){

            $data = array('name' => "پشتیبانی xoapp");
            Mail::send(['text' => 'mail'], $data, function ($message) {
                $message->to('arash.taghavi69@gmail.com', 'تغییر کلمه عبور')->subject('تغییر کلمه عبور');
                $message->from('xyz@gmail.com', 'پشتیبانی xoapp');
            });
        }
    }*/


    public function index()
    {
        $this->binanceApiConfig();


        /* $url = 'https://sandbox-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
         $parameters = [
             'start' => '1',
             'limit' => '5000',
             'convert' => 'USD'
         ];

         $headers = [
             'Accepts: application/json',
             'X-CMC_PRO_API_KEY: a7833a78-a814-4455-9b1c-58777753dc9f'
         ];
         $qs = http_build_query($parameters); // query string encode the parameters
         $request = "{$url}?{$qs}"; // create the request URL


         $curl = curl_init(); // Get cURL resource
 // Set cURL options
         curl_setopt_array($curl, array(
             CURLOPT_URL => $request,            // set the request URL
             CURLOPT_HTTPHEADER => $headers,     // set the headers
             CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
         ));

         $response = curl_exec($curl); // Send the request, save the response
         echo '<pre>';
         print_r(json_decode($response)); // print json decoded response
         curl_close($curl); // Close request*/
        $prices = json_decode(file_get_contents(public_path('bit.json')), true)['data'];
        /*echo '<pre>';
        print_r($prices);
        die();*/

        // ========== Currency Users ==========
        $cu = CurrencyUser::with(['currency:currencies.title,currencies.id,currencies.symbol'])
            ->orderBy('unit_price', 'asc')->get()->toArray();
        $currencies = Currency::where('active', 1)->get();
        // ========== Currency Users ==========

        $prices = array_slice($prices, 1, 6);
        $panel_address = '#';
        if (Auth::check()) {
            if (Auth::user()->is_admin == User::ADMIN)
                $panel_address = "/admin-dashboard";
            if (Auth::user()->is_admin != User::ADMIN)
                $panel_address = "/user-dashboard";
        }
        $sliders = Slider::published()->get();
        return view('site.index', compact('panel_address', 'cu', 'prices', 'currencies','sliders'));
    }

    public function questions()
    {
        return view('site.questions');
    }

    public function why_fibocoin()
    {
        $panel_address = '#';
        if (Auth::check()) {
            if (Auth::user()->is_admin == User::ADMIN)
                $panel_address = "/admin-dashboard";
            if (Auth::user()->is_admin != User::ADMIN)
                $panel_address = "/user-dashboard";
        }

        return view('site.why-fibocoin', compact('panel_address'));
    }

    public function blog()
    {
        return view('blog');
    }

    public function comments()
    {
        $comments = Comment::where('approved', 1)->paginate(10);
        $panel_address = '#';
        if (Auth::check()) {
            if (Auth::user()->is_admin == User::ADMIN)
                $panel_address = "/admin-dashboard";
            if (Auth::user()->is_admin != User::ADMIN)
                $panel_address = "/user-dashboard";
        }

        return view('site.comments', compact('comments', 'panel_address'));

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


    public function binanceApiConfig()
    {
        $api = new \Binance\API("ZFKjoDLlPO5OAlRdpzCqOmh17uGYomHZmwY7HKtVRYANbvBVAQJZYR2EZ6YFqhhb", "UKjNVx6tT8mL2usQdkAqOJaYA9LsurDpyQMeefYq7dC36arqxZZqkklAzqrGUakV");

    }
}
