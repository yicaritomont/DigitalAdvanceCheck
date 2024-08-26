<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attempt;
use App\Models\User;
use App\Http\Helpers\Equivalencia;
use Illuminate\Support\Facades\Auth;

use DB;

class DashboardController extends Controller {
    /**
     * Function to return dashboard admin with information  of users, intents and others.
     */
    public function dashBoardAdmin() {
        // Información de USUARIOS.
        $totalUserRegistered = User::where('rol_id',"!=",1)->count();
        $totalAdminRegistered = User::where('rol_id',1)->count();
        $totalAllUser = User::count() ?? 0 ;
        // Información de MEDICIONES.
        $totalIntents = Attempt::count();
        $rangetotalIntents = range(0, $totalIntents);
        $totalIntentsDone = Attempt::where('completed',1)->count();
        $rangetotalIntentsDone = range(0, $totalIntentsDone);
        $totalIntentsProgress = Attempt::where('completed',0)->count();
        $rangetotalIntentsProgress = range(0, $totalIntentsProgress);
        $dataGraphIntents = [
            'rangetotalIntents' => $rangetotalIntents,
            'rangetotalIntentsDone' => $rangetotalIntentsDone,
            'rangetotalIntentsProgress' => $rangetotalIntentsProgress,
        ];
        // Información cantidad de USUARIOS por TAMAÑO ORGANIZACION.
        $userByM10 = User::where('size_organization','M10')->count();
        $userByM50 = User::where('size_organization','M50')->count();
        $userByM50M250 = User::where('size_organization','M50M250')->count();
        $userByM250 = User::where('size_organization','M250')->count();
        $usersCountByOrganizationSize = [$userByM10, $userByM50, $userByM50M250, $userByM250 ];
        return view('dashboard.dashboardAdmin', compact(
        'totalUserRegistered',
        'totalAdminRegistered',
        'totalAllUser',
        'totalIntents',
        'totalIntentsDone',
        'totalIntentsProgress',
        'dataGraphIntents',
        'usersCountByOrganizationSize'
    ));
    }

    /**
     * Function to return dashboard admin with information  of users, intents and others.
     */
    public function dashBoardUser() {
        $user = Auth::user()->id;
        // Validar la cantidad de de intentos
        $attem = Attempt::where('user_id', $user)->count();
        $attemptsInProgressCount = ( $attem == 0 ? 1 : $attem);
        //Validar la cantidad de intentos terminados
        $attemptsCompletedCount = Attempt::where('user_id', $user)->where('completed', 1)->count();
        return view('dashboard.dashboardUser', compact('attemptsInProgressCount','attemptsCompletedCount'));
    }
}
