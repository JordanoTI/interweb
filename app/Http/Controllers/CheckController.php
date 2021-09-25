<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Url;

class CheckController extends Controller
{
    public function index()
    {
        $urls = Url::all();

        return view('welcome', ['urls' => $urls]);
    }

    public function registration()
    {
        return view('urls.registration');
    }

    public function store(Request $request)
    {
        $url = new Url;

        $url->title = $request->title;
        $url->url = $request->url;

        $url->save();

        return redirect('/')->with('msg', 'URL registrada com sucesso!');
    }

}
