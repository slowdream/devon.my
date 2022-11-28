<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    public function show(Card $card): Response
    {
        return Inertia::render('Profile/Show', ['card' => CardResource::make($card)]);
    }
}
