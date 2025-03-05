<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Ciudad;
use App\Models\Cliente;
use App\Models\Contrato;
use App\Models\Control;
use App\Models\Departamento;
use App\Models\Equipo;
use App\Models\Fabricante;
use App\Models\Tecnico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;
use \Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;


class ConsultasController extends Controller
{
    public function consultar_test()
    {
       return response()->json(
          [
           'status' => '1',
           'msg' => 'Consulta Exitosa de test',
          ],200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' =>'required'
         ]);

         $usuario = User::where('email','=',$request->email)->first();

         if (isset($usuario->id))
         {

            if (Hash::check($request->password,$usuario->password))
               {
                // Creamos TOKEN
                $clientes   = Cliente::paginate(20);
                $token = $usuario->createToken("auth_token")->plainTextToken;
                return response()->json(
                 [
                     'status' => '1',
                     'msg' => 'Usuario logueado Exitosamente',
                     'codusuario' => $usuario->codigo,
                     'access_token' =>$token,
                     'data' => $usuario,
                     'data_cliente' => $clientes,
                 ]);
               }
            else
               {

                return response()->json(
                    [
                     'status' => '0',
                     'msg' => 'Contraseña Inválida',
                     'Password'=>$usuario->password
                    ],404);
               }
         }
         else
         {
           return response()->json(
             [
              'status' => '500',
              'msg' => 'Usuario Inválido'
             ],404);
         }

    }

    public function BuscarClientes(Request $request)
    {
       return response()->json(
          [
           'status' => '1',
           'msg' => 'Consulta Exitosa de Clientes',
          ],200);
    }

    public function CargarDatos():JsonResponse
    {
        $clientes        = Cliente::paginate(15);
        $users           = User::paginate(15);
        $equipos         = Equipo::paginate(15);
        $contratos       = Contrato::paginate(15);
        $fabricantes     = Fabricante::paginate(15);
        $ciudades        = Ciudad::paginate(15);
        $dptos           = Departamento::paginate(15);
        $tecnicos        = Tecnico::paginate(15);
        // Actualizar Passwordmobil - regresar contraseña origen
        foreach ($users as $user)
        {
         try
             {
                 $user->passwordmobil = decrypt($user->passwordmobil);
             }
             catch (DecryptException $e) {
                 //
             }

        }

        return response()->json(
           [
            'status' => '200',//sample entry
            'msg'               => 'Consulta Exitosa',
            'data_cliente'      => $clientes,
            'data_user'         => $users,
            'data_equipos'      => $equipos,
            'data_contratos'    => $contratos,
            'data_fabricantes'  => $fabricantes,
            'data_ciudades'     => $ciudades,
            'data_dptos'        => $dptos,
            'data_tecnicos'     => $tecnicos,
           ],Response::HTTP_OK);
    }

    public function UpdateConsecutivo():JsonResponse
    {
        $consecutivo     = Control::find(1);
        $consecutivo->consecutivoentrada++;
        $consecutivo->update();

        return response()->json(
           [
            'status' => '200',//sample entry
            'msg'               => 'Actualización Exitosa',
            'data_consecutivo'  => $consecutivo,
           ],Response::HTTP_OK);
    }
}
