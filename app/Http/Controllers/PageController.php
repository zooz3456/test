<?php

namespace App\Http\Controllers;
use App\Services\Facades;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function index(Request $request) {
        $pageName = $request->route()->getName();
        return view('rendering', ['pageName' => $pageName]);
    }
}
