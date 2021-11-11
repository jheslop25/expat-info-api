<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $homePage = Page::where('name', 'Home')->with([
            'posts' => function ($query) {
                $query->orderBy('created_at', 'DESC')
                      ->limit(4)
                      ->with('comments');
            }
        ])->first();

        return response([
            'data' => $homePage,
        ])->setStatusCode(200);
    }

    public function show($id)
    {
        $page = Page::find($id);
        if (!$page) {
            return response([
                'error' => 'Page not found'
            ])->setStatusCode(404);
        }

        return response([
            'page' => $page,
        ])->setStatusCode(200);
    }
}
