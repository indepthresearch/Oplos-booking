<?php

namespace App\Http\Controllers;
use App\Filter;
use Illuminate\Http\Request;

class FilterController extends Controller
{
   public function index(Request $request)
    {
        return Filter::filter($request)->get();
    
}
}
