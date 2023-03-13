<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        dd(Listing::
            where('beds', '>', 4)
            ->where('area', '>', 100)
            ->orderBy('beds')
            ->get()
        );
        return inertia('Index/Index', [
            'message' => 'Hello from Laravel',
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
