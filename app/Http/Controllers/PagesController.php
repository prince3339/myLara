<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page() {
        $testData = ["1", "2", "3"];
        return view('welcome', compact('testData'));
    }
}
