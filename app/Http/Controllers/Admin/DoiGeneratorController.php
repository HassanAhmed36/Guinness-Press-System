<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;

class DoiGeneratorController extends Controller
{
    public function index()
    {
        return view('admin.dio.index', [
            'journals' => Journal::all()
        ]);
    }
}
