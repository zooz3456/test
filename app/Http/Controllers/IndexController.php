<?php

namespace App\Http\Controllers;
use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index(Request $request) {
        $divisions = Division::all();
        return view('rendering', ['divisions' => $divisions]);
    }
}
