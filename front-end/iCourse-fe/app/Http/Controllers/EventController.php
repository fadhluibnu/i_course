<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class EventController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('/Home', [
            'user' => [
                'name' => 'ibnu'
            ]
        ]);
    }
}
