<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Inertia\Response;
use Route;

class MainController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function show(Card $card): Response
    {
        return Inertia::render('Profile/Show', ['card' => CardResource::make($card)]);
    }
}
