<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Illuminate\Foundation\Application;
use Illuminate\Http\Resources\Json\JsonResource;
use Inertia\Inertia;
use Inertia\Response;
use Route;

class MainController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('MainPage', ['collection' => CardResource::collection(Card::paginate(5))]);
    }
}
