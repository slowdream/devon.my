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
        return Inertia::render('catalog', ['items' => CardResource::collection(Card::paginate(5))]);
    }

    public function show(Card $card): Response
    {
        return Inertia::render('Profile/Show', ['card' => CardResource::make($card)]);
    }
}
