<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Detallesdeentrada;
use App\Models\Entradadeequipo;
use App\Models\Equipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UpdateController extends Controller
{
    public function UpdateClientesEntradas(Request $request):JsonResponse
    {

        $datos_json = json_decode($request->getContent(), true);

        if (isset($datos_json["clientes"]))
        {

            $clientes   = $datos_json["clientes"];

            if ($clientes == null)
               {
                return response()->json(
                    [
                       'status' => '404',
                       'msg'  => 'Imposible la Actualización',
                       'data' =>  "Apertura Clientes OK",
                      ],404);

               }

            foreach ($clientes as $dato)
            {
              $nit          =   $dato['nit'];
              $sucursal     =   $dato['sucursal'];
              $reg_clientes = cliente::updateOrCreate(['nit'=>$nit,'sucursal'=>$sucursal],
              [
                'nit'                   => $dato['nit'],
                'sucursal'              => $dato['sucursal'],
                'dv'                    => $dato['dv'],
                'nombredelcliente'      => $dato['nombre'],
                'direcciondelcliente'   => $dato['direccion'],
                'telefonodelcliente'    => $dato['telefono'],
                'emaildelcliente'       => $dato['email'],
                'contacto'              => $dato['contacto'],
                'telefonocontacto'      => $dato['telefonocontacto'],
                'idciudad'              => $dato['idciudad'],
                'idcontrato'            => $dato['idcontrato'],
                'longitud'              => $dato['longitud'],
                'latitud'               => $dato['latitud'],
                'estado'                => $dato['estado'],
                'usuario_created'       =>Auth::user()->codigo,
                'usuario_updated'       =>Auth::user()->codigo
              ]);

            }
        }

        //////////////////////////////////////////////////////////////
        /////           Procesar Entradas de Equipos
        //////////////////////////////////////////////////////////////

        if (isset($datos_json["entradas"]))
        {

            $entradas = $datos_json["entradas"];

            foreach ($entradas as $dato)
            {
              $consecutivo  =   $dato['consecutivo'];
              $reg_entradas =   Entradadeequipo::updateOrCreate(['consecutivo'=>$consecutivo],
              [
                'consecutivo'           => $dato['consecutivo'],
                'tipodedocumento'       => $dato['tipodedocumento'],
                'fechadereporte'        => $dato['fechadereporte'],
                'observaciones'         => $dato['observaciones'],
                'idcliente'             => $dato['idcliente'],
                'idtecnico'             => $dato['idtecnico'],
                'estado'                => $dato['estado'],
                'estado01'              => 0,
                'estado02'              => 0,
                'estado03'              => 1,
                'usuario_created'       =>Auth::user()->codigo,
                'usuario_updated'       =>Auth::user()->codigo
              ]);
            }
        }

        //////////////////////////////////////////////////////////////
        /////           Procesar  Detalle de Entradas
        //////////////////////////////////////////////////////////////

        if (isset($datos_json["detalledeentradas"]))
        {

            $detentradas = $datos_json["detalledeentradas"];

            foreach ($detentradas as $dato)
            {
              $consecutivo  =   $dato['consecutivo'];
              $idequipo     =   $dato['idequipo'];
              $reg_detentradas =   Detallesdeentrada::updateOrCreate(['consecutivo'=>$consecutivo,'idequipo'=>$idequipo],
              [
                'consecutivo'           => $dato['consecutivo'],
                'idequipo'              => $dato['idequipo'],
                'fechadereporte'        => $dato['fechadereporte'],
                'problemareportado'     => $dato['problemareportado'],
                'idcliente'             => $dato['idcliente'],
                'idtecnico'             => $dato['idtecnico'],
                'idorden'               => $dato['idorden'],
                'identrada'             => $dato['identrada'],
                'estado'                => $dato['estado'],
                'estado01'              => 0,
                'estado02'              => 0,
                'estado03'              => 1,
                'usuario_created'       =>Auth::user()->codigo,
                'usuario_updated'       =>Auth::user()->codigo
              ]);
            }
        }


       return response()->json(
        [
           'status' => '200',
           'msg' => 'Actualización Exitosa 201',
           'data' =>  "Detalle de Entradas OK",
          ],200);

    }

    //////  Crear Equipos
    public function UpdateEquipos(Request $request):JsonResponse
    {
      $datos_json = json_decode($request->getContent(), true);

      if(isset($datos_json["equipos"]))
        {
            $equipos = $datos_json["equipos"];

            foreach ($equipos as $dato)
            {
              $idequipo  =   $dato['idequipo'];
              $reg_equipos =   Equipo::updateOrCreate(['id'=>$idequipo],
              [
                'serial'                  => $dato['serial'],
                'descripcion'             => $dato['descripcion'],
                'modelo'                  => $dato['modelo'],
                'idfabricante'            => $dato['idfabricante'],
                'idcliente'               => $dato['idcliente'],
                'idcontrato'              => $dato['idcontrato'],
                'anodefabricacion'        => $dato['anodefabricacion'],
                'numerodecopias'          => $dato['numerodecopias'],
                'totalcopiasnegro'        => $dato['totalcopiasnegro'],
                'totalcopiascolor'        => $dato['totalcopiascolor'],
                'totalescaneo'            => $dato['totalescaneo'],
                'valorcopia'              => $dato['valorcopia'],
                'costocopia'              => $dato['costocopia'],
                'factordedepreciacion'    => $dato['factordedepreciacion'],
                'observaciones'           => $dato['observaciones'],
                'tipo'                    => $dato['tipo'],
                'estado'                  => $dato['estado'],
                'estado01'                => 0,
                'estado02'                => 0,
                'estado03'                => 1,
                'usuario_created'         =>Auth::user()->codigo,
                'usuario_updated'         =>Auth::user()->codigo
              ]);
            }
            return response()->json(
              [
                 'status' => '200',
                 'msg' => 'Actualización Exitosa 201',
                 'data_idequipo' =>  $reg_equipos->id,
                ],200);
        }



    }
//
}
