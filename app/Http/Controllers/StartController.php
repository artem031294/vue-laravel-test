<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            array(
                'title' => 'ASD',
                'url' => 'http://asd.dsa'
            ),
            array(
                'title' => "DAS",
                'url' => 'http://dsa.asd'
            ),
        ];

        return view('start', [
           'url_data' => $url_data
        ]);
    }

    public function getJson()
    {
        return [
            array(
                'title' => "Google",
                'url' => 'https://google.com'
            ),
            array(
                'title' => 'Yandex',
                'url' => 'https://ya.ru'
            )
        ];
    }
}
