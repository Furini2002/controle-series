<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Game of Thrones',
            'Breaking bad',
            'A casa do dragão'
        ];

        $html = '<ul>';

        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        };

        $html .= '</ul>';

        return $html;
    }
}
