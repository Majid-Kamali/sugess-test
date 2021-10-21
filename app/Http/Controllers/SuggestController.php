<?php

namespace App\Http\Controllers;

use App\Suggest\suggest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SuggestController extends Controller
{
     public function index(Request $request)
     {
        // $suggest = new suggest();
        // $suggest->suggest($request->query, $request->locale);

        $suggest = new suggest($request->query, $request->locale);
        return response()->json([
            'data' => $suggest->data
        ],200);
     }
}
