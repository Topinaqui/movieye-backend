<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\TMDbService;

class MovieController extends Controller
{
    protected $tMDbService;


    public function __construct(TMDbService $tMDbService)
    {
        $this->tMDbService = $tMDbService;
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        return $this->tMDbService->searchMovies($query);
    }

    public function details(Request $request)
    {
        $id = $request->input('id');

        return $this->tMDbService->movieDetails($id);
    }
}
