<?php

namespace App\Http\Controllers;

use App\Models\CurrencyUser;
use App\User;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
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
        $prices = json_decode(file_get_contents(public_path('bit.json')),true)['data'];
        /*echo '<pre>';
        print_r($prices);
        die();*/

        $panel_address = '#';
        if (Auth::check()) {
            if (Auth::user()->is_admin == User::ADMIN)
                $panel_address = "/admin-dashboard";
            if (Auth::user()->is_admin != User::ADMIN)
                $panel_address = "/user-dashboard";
        }

        // ========== Currency Users ==========
        $cu = CurrencyUser::with(['user:users.id,users.mobile', 'currency:currencies.title,currencies.id,currencies.symbol'])
            ->get();
        // ========== Currency Users ==========


        return view('site', compact('panel_address', 'cu','prices'));
    }

    public function blog()
    {
        return view('blog');
    }


    public function binanceApiConfig()
    {
        $api = new \Binance\API("ZFKjoDLlPO5OAlRdpzCqOmh17uGYomHZmwY7HKtVRYANbvBVAQJZYR2EZ6YFqhhb", "UKjNVx6tT8mL2usQdkAqOJaYA9LsurDpyQMeefYq7dC36arqxZZqkklAzqrGUakV");



    }
}
