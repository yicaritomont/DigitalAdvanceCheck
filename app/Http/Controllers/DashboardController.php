<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Helpers\Equivalencia;
use Illuminate\Support\Facades\Auth;

use DB;

class DashboardController extends Controller {
    /**
     * Function to return dashboard admin with information  of users, intents and others.
     */
    public function dashBoardAdmin() {
        
        return view('dashboard.dashboardAdmin');
    }

    /**
     * Function to return dashboard admin with information  of users, intents and others.
     */
    public function dashBoardUser() {
        
        return view('dashboard.dashboardUser');
    }

    public function dashBoardComprador() {
        //consultarla cantidad de empresas
        $totalEmpresasRegistradas = Empresa::count();
        //consultarel numero de empresas por industria
        $totalEmpresasPorTipo = DB::table('empresas')
                                ->join('industrias', 'empresas.industria_id', '=', 'industrias.id')
                                ->select(DB::raw('count(*) as totalTipoEmpresa, industrias.nombre as nombre'))
                                ->groupBy('industria_id')
                                ->get();
        //consultar el numero de stand
        $totalStandRegistrados = Stand::count();
        $listarRelaciones = EmpresasPersona::where('persona_id',Auth::user()->id)->get();
        $cargos = Equivalencia::cargo();
        return view('dashboard.dashboardComprador',compact('totalEmpresasRegistradas','totalEmpresasPorTipo','totalStandRegistrados','listarRelaciones','cargos'));

    }
}
