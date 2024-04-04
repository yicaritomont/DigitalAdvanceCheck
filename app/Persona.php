<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Authenticatable as Authenticatable;
use App\Cargo;
use Illuminate\Notifications\Notifiable;
use App\Paises;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Passwords\CanResetPassword ;
use App\PersonaCategoria;
use App\EmpresasPersona;
use App\Contrato;
use App\Cita;
use App\Empresa;
use Session;
use Illuminate\Foundation\Auth\User as Authenticatable;
//\Illuminate\Contracts\Auth\Authenticatable

class Persona extends Authenticatable implements   CanResetPasswordContract
{
    //
    //use Authenticatable;
    use Notifiable;
    use CanResetPassword;
    
    protected $table = "personas";
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = ['id','nombres','apellidos','documento','pais','estado','ciudad','direccion1','direccion2','red_Facebook','red_Instagram','red_LinkedIn','red_YouTube','red_Twitter','red_pinterest','tels','celular','email','whastapp','representante','regimenTtributario','observaciones','web','vc_zoom','vc_skype','vc_microsoftteams','vc_googleMeet','vc_ciscoWebex','vc_facebook','vc_otro','cargo','password','tipo_persona','confirmed','confirmation_code','remember_token','picture','tipoPerfil'.'correoverificado_guid','correoVerificado'];

    public function paises()
    {
        return $this->belongsTo(Paises::class, 'pais');
    }

    public function categorias($id)
    {
        $categorias = PersonaCategoria::where('persona_id',$id)->get();
        return $categorias;
    }

    public function contrato($id)
    {
        $empresa = $NombreEmpresa = $contrato =  "";
        $empresaPersona = EmpresasPersona::where('persona_id',$id)->where('empresa_id',session()->get('id_empresa'))->first();
        if($empresaPersona)
        {
            $empresa = $empresaPersona->empresa_id;
            $NombreEmpresa = $empresaPersona->empresa->nombre;
            $existeContrato = Contrato::where('empresa_id',$empresa)->where('activo',1)->first();
            if($existeContrato)
            {
                $contrato = $existeContrato->id;
            }
        }
        return ['idEmpresa'=> $empresa, 'nombreEmpresa'=>$NombreEmpresa,'contrato'=>$contrato];
    }

    public function notificacionesCita($id)
    {
        //$citasSolicitadasxMi = $citasRechazadasxMi = $citasConfirmadasxMi = $citasPendientesxMi = $citasSolicitadasAMi = $citasRechazadasAMi = $citasConfirmadasAMi = $citasPendientesAMi = $ultimaCitaConfirmadaXMi = $ultimaCitaConfirmadaAMi = "";
        
        $citasSolicitadasXMi  = Cita::where('persona_id',$id)->count();
        $citasRechazadasXMi   = Cita::where('persona_id',$id)->where('estado','rechazada')->count();
        $citasConfirmadasXMi  = Cita::where('persona_id',$id)->where('estado','aprobada')->count();
        $citasPendientesXMi   = Cita::where('persona_id',$id)->where('estado','no confirmada')->count();

        $citasSolicitadasAMi  = Cita::where('vendedor_id',$id)->count();
        $citasRechazadasAMi   = Cita::where('vendedor_id',$id)->where('estado','rechazada')->count();
        $citasConfirmadasAMi  = Cita::where('vendedor_id',$id)->where('estado','aprobada')->count();
        $citasPendientesAMi   = Cita::where('vendedor_id',$id)->where('estado','no confirmada')->count();

        // ultimas citas confirmadas
        $ultimaCitaConfirmadaXMi = Cita::where('persona_id',$id)->where('estado','aprobada')->orderBy('updated_at','desc')->first();
        $ultimaCitaConfirmadaAMi = Cita::where('vendedor_id',$id)->where('estado','aprobada')->orderBy('updated_at','desc')->first();

        return [ 'citasSolicitadasXMi' => $citasSolicitadasXMi , 
        'citasRechazadasXMi'  => $citasRechazadasXMi , 
        'citasConfirmadasXMi' => $citasConfirmadasXMi , 
        'citasPendientesXMi'  => $citasPendientesXMi , 
        'citasSolicitadasAMi'     => $citasSolicitadasAMi , 
        'citasRechazadasAMi'      => $citasRechazadasAMi , 
        'citasConfirmadasAMi'     => $citasConfirmadasAMi , 
        'citasPendientesAMi'      => $citasPendientesAMi ,  
        'ultimaCitaConfirmadaXMi' => $ultimaCitaConfirmadaXMi , 
        'ultimaCitaConfirmadaAMi' => $ultimaCitaConfirmadaAMi];
    }
    
    
}