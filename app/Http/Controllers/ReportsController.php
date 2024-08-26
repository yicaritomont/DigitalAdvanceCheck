<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attempt;

class ReportsController extends Controller
{
    //
    public function completedMedition(){
        // Consulte los intentos compeltados
        $attempts = Attempt::where('completed', 1)->get();
        return view("reports.completedMedition", compact("attempts"));

    }
}
