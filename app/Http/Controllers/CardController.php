<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Inertia\Inertia;
use Inertia\Response;

class CardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('MainPage', ['cards' => CardResource::collection(Card::paginate(10))]);
    }

    public function show(): Response
    {
        return Inertia::render('Show', ['card' => CardResource::make(Card::first())]);
    }
}
