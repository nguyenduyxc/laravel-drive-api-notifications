<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DriveApiController extends Controller
{

    public function watch(){
//        dd(1);
        $body =  [
            'id' => uniqid(),
            'kind' => "drive#changes",
            'type' => 'web_hook',
            'address' => 'https://0996-14-248-80-153.ap.ngrok.io/'
        ];
        $response =
            Http::POST('https://www.googleapis.com/drive/v3/changes/watch', [
                'headers' => [ 'Content-Type' => 'application/json',  "Authorization: Bearer ya29.a0AVA9y1u5CxrBOatC5gCNw53iNVRBl4r9A3x6TVC118VSxTe9X_Iy_rpyOkjBzl9gpVN2o_n87_DjftHieSJkjm6TQC-Lo8oATpiPJhnmcncGNm8NMVSXm1EG9URZOMXYh_EHHBEyhKkIU4GFuaNCgWt4LoxnaCgYKATASAQASFQE65dr8t5T8l9YxKFjEe7eKK9oLJw0163" ],
                'body' => json_encode($body),
                "http_errors" => false
            ]);

        return response()->json($response);
//        return 'abc';
    }

    public function notifications()
    {
        return view('watch');
    }
}
