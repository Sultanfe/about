<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request): View
    {
        $team = config('team.members');

        return view('about', [
            'team' => $team,
        ]);
    }
}
