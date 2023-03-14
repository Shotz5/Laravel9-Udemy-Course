<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // $listing = Listing::find(10);
        // $listing->city = 'Tinker';
        // $listing->save();

        // $listing = new Listing;
        // $listing->beds = 1;
        // $listing->baths = 1;
        // $listing->area = 50;
        // $listing->city = "London";
        // $listing->street = "Tinker Street";
        // $listing->street_nr = "10";
        // $listing->code = "TK";
        // $listing->price = 100_000;
        // $listing->save();

        // $listing = Listing::create([
        //     "beds" => 2,
        //     "baths" => 2,
        //     "area" => 100,
        //     "city" => "North",
        //     "street" => "Tinker St",
        //     "street_nr" => 20,
        //     "code" => "TS",
        //     "price" => 200,000
        // ]);

        return inertia('Index/Index', [
            'message' => 'Hello from Laravel',
        ]);
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
