<?php


namespace App\Http\Controllers;


class PageController extends Controller
{
    public function welcome($name = null)
    {
        $arr = [
            'Ismoil',
            'Isroil',
            'Ibrohim',
        ];

        return view('salomlashish.welcome',compact('name','arr'));
    }
}
