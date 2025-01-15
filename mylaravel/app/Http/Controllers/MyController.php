<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showForm()
    {
        return view('myview');
    }

    public function generateTable(Request $request)
    {
        $number = $request->input('number');
        $table = [];

        if (is_numeric($number)) {
            for ($i = 1; $i <= 12; $i++) {
                $table[$i] = $number * $i;
            }
        }

        return view('myview', ['number' => $number, 'table' => $table]);
    }
}
