<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function journal_view()
    {
        return view('journals.index');
    }
}
