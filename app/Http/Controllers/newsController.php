<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class newscontroller extends Controller
{
    public function index()
    {
        $apiUrl = "https://api.sheety.co/59ea279cdd13516f9008bedb74746804/newsApi/sheet1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'My Application'); // Set User-Agent header
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $data = json_decode($result, true);
        return view('news', compact('data'));
}
}