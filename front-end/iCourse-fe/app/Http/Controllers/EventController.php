<?php

namespace App\Http\Controllers;

// use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function show()
    {
        return Inertia::render('/Home', [
            'user' => [
                'name' => 'ibnu'
            ]
        ]);
    }
}
